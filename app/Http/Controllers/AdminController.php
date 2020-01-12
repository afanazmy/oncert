<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Auth;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use App\User;
use App\Event;
use App\EventOrganizer;
use App\Division;
use App\Position;
use App\DailyManager;
use App\CertificateSetting;
use App\Certificate;
use App\Setting;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $users = User::whereNotNull('division_id')->orWhereNotNull('daily_manager_id')
            ->with('division')
            ->get();


        return view('admin.index', compact('users'));
    }

    public function setting()
    {
        $setting = CertificateSetting::first();
        $config['kaprodi'] = Setting::where('key', 'kaprodi')->first();
        $config['nip_kaprodi'] = Setting::where('key', 'nip_kaprodi')->first();
        $config['ketua'] = Setting::where('key', 'ketua')->first();
        $config['nim_ketua'] = Setting::where('key', 'nim_ketua')->first();

        return view('admin.setting', compact('setting', 'config'));
    }

    public function storeSetting(Request $request)
    {
        $setting = CertificateSetting::first();
        if (!$setting) {
            CertificateSetting::create([
                'base' => $request->base,
                'increment' => $request->increment,
            ]);
        } else {
            $setting->base = $request->base;
            $setting->increment = $request->increment;
            $setting->save();
        }

        Setting::updateOrInsert(
            ['key'   => 'kaprodi'],
            ['value' => $request->kaprodi]
        );

        Setting::updateOrInsert(
            ['key'   => 'nip_kaprodi'],
            ['value' => $request->nip_kaprodi]
        );

        Setting::updateOrInsert(
            ['key'   => 'ketua'],
            ['value' => $request->ketua]
        );

        Setting::updateOrInsert(
            ['key'   => 'nim_ketua'],
            ['value' => $request->nim_ketua]
        );

        Alert::success('Succes', 'Setting Sertifikat berhasil');
        return redirect()->route('admin.setting');
    }

    public function nonactivate($id)
    {
        $user = User::where('id', $id)->first();
        if ($user->is_active) {
            $user->is_active = 0;
            $user->save();
            Alert::success('Success', 'Pengurus berhasil dinonaktifkan');
        } else {
            $user->is_active = 1;
            $user->save();
            Alert::success('Success', 'Pengurus berhasil diaktifkan');
        }


        return redirect()->route('admin.index');
    }

    public function detail($id)
    {
        $user = User::where('id', $id)->first();
        $divisions = Division::all();
        $managers = DailyManager::all();
        $events = EventOrganizer::where('user_id', $id)
            ->with('event')
            ->with('position')
            ->get();

        return view('admin.detail', compact('user', 'events', 'divisions', 'managers'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->division_id = $request->division_id;
        $user->daily_manager_id = $request->daily_manager_id;
        // $user->is_kadiv = $request->is_kadiv;
        $user->save();

        if ($user) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect()->back();
        } else {
            Alert::success('Success', 'Ada kesalahan');
            return redirect()->back();
        }
    }

    public function verified(Request $request)
    {
        $user = User::find($request->user_id);
        $events = EventOrganizer::where('user_id', $request->user_id)
            ->with('event')
            ->with('position')
            ->get();
            // dd($request);
        foreach ($events as $key => $event) {
            if ($request->is_verified && in_array($event->event_id, $request->is_verified)) {
                $event->is_verified = 1;
                $event->save();
            } else {
                $event->is_verified = 0;
                $event->save();
            }
        }

        Alert::success('Success', 'Data berhasil di verifikasi');

        return redirect()->back();
    }

    public function hasCertif($id)
    {
        $user = User::find($id);
        if (!$user->has_certificate) {
            $user->has_certificate = 1;
            $user->save();

            $last = Certificate::orderBy('increment', 'DESC')->first();
            $setting = CertificateSetting::first();
            if ($last) {
                $certif = Certificate::create([
                    'user_id'   => $id,
                    'division_id'=> $user->division_id,
                    'increment' => $last->increment + 1
                ]);
                if ($user->daily_manager_id) {
                    $certif = Certificate::create([
                        'user_id'   => $id,
                        'daily_manager_id'=> $user->daily_manager_id,
                        'increment' => $last->increment + 2
                    ]);
                }
            } else {
                $certif = Certificate::create([
                    'user_id'   => $id,
                    'division_id'=> $user->division_id,
                    'increment' => $setting->increment
                ]);
                $before = Certificate::orderBy('increment', 'DESC')->first();
                if ($user->daily_manager_id) {
                    $certif = Certificate::create([
                        'user_id'   => $id,
                        'daily_manager_id'=> $user->daily_manager_id,
                        'increment' => $before->increment + 1
                    ]);
                }
            }
        } else {
            $user->has_certificate = 0;
            $user->save();

            $certif = Certificate::where('user_id', $id)->pluck('id');
            Certificate::destroy($certif);
        }

        Alert::success('Success', 'Kepemilikan sertifikat berhasil diubah');
        return redirect()->back();

    }

    public function allCertif()
    {
        $data = [];
        $certifs = Certificate::with(['user', 'division', 'dailyManager'])->get();
        $setting = CertificateSetting::first();
        $config['kaprodi'] = Setting::where('key', 'kaprodi')->first();
        $config['nip_kaprodi'] = Setting::where('key', 'nip_kaprodi')->first();
        $config['ketua'] = Setting::where('key', 'ketua')->first();
        $config['nim_ketua'] = Setting::where('key', 'nim_ketua')->first();
        // dd($certifs);
        foreach ($certifs as $key => $certif) {
            $division = null;
            $daily_manger = null;

            if (isset($certif->division)) {
                $division = $certif->division->name;
            } else {
                $daily_manger = $certif->dailyManager->name;
            }

            $data[$key] = [
                'name'  => $certif->user->name,
                'division'  => $division,
                'daily_manager'  => $daily_manger,
                'increment' => $certif->increment,
                'base'      => $setting->base
            ];
        }

        return view('admin.backcertificate', compact('data', 'config'));

    }

    public function userCertif($id)
    {
        $data = [];
        $user = User::find($id);
        $certifs = Certificate::where('user_id', $id)->with(['user', 'division', 'dailyManager'])->get();
        $setting = CertificateSetting::first();
        $config['kaprodi'] = Setting::where('key', 'kaprodi')->first();
        $config['nip_kaprodi'] = Setting::where('key', 'nip_kaprodi')->first();
        $config['ketua'] = Setting::where('key', 'ketua')->first();
        $config['nim_ketua'] = Setting::where('key', 'nim_ketua')->first();
        // dd($certifs);
        foreach ($certifs as $key => $certif) {
            $division = null;
            $daily_manger = null;

            if (isset($certif->division)) {
                $division = $certif->division->name;
            } else {
                $daily_manger = $certif->dailyManager->name;
            }

            $data[$key] = [
                'name'  => $certif->user->name,
                'division'  => $division,
                'daily_manager'  => $daily_manger,
                'increment' => $certif->increment,
                'base'      => $setting->base
            ];
        }

        // dd($data);
        $pdf = PDF::loadView('admin.backcertificate', compact('data', 'config'));
        $pdf->setPaper('a4', 'landscape');
        // $pdf->setOptions(['debugCss' => true]);
        // return $pdf->stream();
        // return $pdf->download($user->name.'.pdf');

        return view('admin.backcertificate', compact('data', 'config'));
    }

    public function lock($id)
    {
        $user = User::find($id);
        if (!$user->is_locked) {
            $user->is_locked = 1;
            $user->save();

            Alert::success('Success', 'Data pengurus berhasil di kunci');
        } else {
            $user->is_locked = 0;
            $user->save();

            Alert::success('Success', 'Data pengurus berhasil di buka');
        }

        return redirect()->back();
    }

    public function create()
    {
        $divisions = Division::all();
        $managers = DailyManager::all();
        return view('admin.create', compact('divisions', 'managers'));
    }

    public function store(Request $request)
    {
        $pengurus = User::create([
            'division_id'       => $request->division_id,
            'daily_manager_id'  => $request->daily_manager_id,
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'has_certificate'   => 0,
            'has_filled_form'   => 0,
            'is_kadiv'          => 0,
            'is_locked'         => 0,
            'is_active'         => 1,
        ]);

        if ($pengurus) {
            Alert::success('Succes', 'Data pengurus berhasil dibuat');
            return redirect()->route('admin.index');
        } else {
            Alert::error('Error', 'Terjadi kesalahan');
            return redirect()->back();
        }
    }

    public function eventOrganizer($id)
    {
        $user = User::where('id', $id)->first();
        $divisions = Division::all();
        $managers = DailyManager::all();
        $events = Event::all();
        $positions = Position::all();

        return view('admin.event', compact('user', 'events', 'positions', 'divisions', 'managers'));
    }

    public function eventOrganizerStore(Request $request)
    {
        $user = User::find($request->user_id);
        // dd($user);
        $user->events()->detach([$request->event_id]);
        $user->events()->attach([$request->event_id => [
            'user_id'       => $user->id,
            'position_id'   => $request->position_id,
            'is_verified'   => 0,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]]);
        // $user->has_filled_form = 1;
        // $user->save();

        Alert::success('Success', 'Data kegiatan berhasil disimpan');
        return redirect()->route('admin.detail', $user->id);
    }
}
