<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Division;
use App\EventOrganizer;
use App\Event;
use App\User;

use Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'active']);
    }
    public function index()
    {
        $divisions = Division::all();
        $username = explode(" ", Auth::user()->name);
        $username = $username[1];

        $events = EventOrganizer::where('user_id', Auth::user()->id)
            ->with('event')
            ->with('position')
            ->get();

        return view('user.index', compact('username', 'divisions', 'events'));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->division_id = $request->division_id;
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

    public function preview()
    {
        $user = User::where('id', Auth::user()->id)->with('division')->first();
        $division = $user->division;
        // dd($division);
        return view('user.preview', compact('user', 'division'));
    }

}
