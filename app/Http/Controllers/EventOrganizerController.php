<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Event;
use App\Position;
use App\EventOrganizer;

use DB;
use Auth;
use Alert;
use Carbon\Carbon;

class EventOrganizerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = explode(" ", Auth::user()->name);
        $username = $username[1];
        return view('form.done', compact('username'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        $positions = Position::all();
        $username = explode(" ", Auth::user()->name);
        $username = $username[1];
        return view('form.event', compact('events', 'positions', 'username'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $user = User::find(Auth::user()->id);

        for ($i=0; $i < @count($request->event_id); $i++) {
            if ($request->position_id[$i] != "tm") {
                $data[$i] = [
                    'user_id'       => Auth::user()->id,
                    'event_id'      => $request->event_id[$i],
                    'position_id'   => $request->position_id[$i],
                    'is_verified'   => 0,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ];
            }
        }

        $insert = DB::table('event_organizers')->insert($data);
        $user->has_filled_form = 1;
        $user->save();

        Alert::success('Success', 'Terima kasih telah mengisi form :)');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
