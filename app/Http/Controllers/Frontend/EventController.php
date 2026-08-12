<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $title = 'Event | SMP Islam Nurul Ulum';

        $events = Event::latest()->paginate(9);

        return view('frontend.events.event-view', compact([
            'title',
            'events',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $title = $event->event_name . ' | SMP Islam Nurul Ulum';
        $recentEvents = Event::latest()->where('id', '!=', $event->id)->take(5)->get();
        
        return view('frontend.events.event-detail', compact('event', 'title', 'recentEvents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
