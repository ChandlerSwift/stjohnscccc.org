<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
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
        return view('events.index')
            ->with('events', \App\Event::where('date', '>', \Carbon\Carbon::now())->get())
            ->with('archived_events', \App\Event::where('date', '<', \Carbon\Carbon::now())->get())
            ->with('deleted_events', \App\Event::onlyTrashed()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Event::create($request->all())->save();
        return redirect('/admin/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit')
            ->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->fill($request->all());
        $event->save();
        return redirect('/admin/events');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }

    /** Restore the specified resource */
    public function restore($id)
    {
        $event = Event::withTrashed()->find($id);
        $event->restore();
        return redirect('/admin/events');
    }

    /** Make a copy of an archived event */
    public function copy($id)
    {
        $event = Event::find($id); // TODO: figure out why type hinting isn't working
        $new_event = $event->replicate();
        $new_event->date = $event->date->addYear();
        $new_event->save();
        return view('events.edit')
            ->with('event', $new_event);
    }
}
