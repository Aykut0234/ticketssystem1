<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function viewHomePage()
    {
        return view('home');
    }

    public function getAllEvents(){
        $allEvents = Event::all();
        
        return view('events', [
            'events' => $allEvents, 
            
        ]);
    }

    public function addEvent() {
        return view('add-event');
    }

    public function processNewEvent(Request $request) {
        $newEvent = new Event();
        $newEvent->name = $request->name;
        $newEvent->event_start = $request->event_start;
        $newEvent->event_end = $request->event_end;
        $newEvent->available_tickets = $request->available_tickets;
        $newEvent->price = $request->price;
        $newEvent->description = $request->description;
        

        $newEvent->save();

        return redirect()->route('events');
    }

    public function editEvent($id) {
        $event = Event::findOrFail($id);
        return view('edit-event', [
            'event' => $event
        ]);
    }

    public function processEditEvent(Request $request, $id) {
        $event = Event::findOrFail($id);
        $event->name = $request->name;
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        $event->available_tickets = $request->available_tickets;
        $event->price = $request->price;
        $event->description = $request->description;

        $event->save();

        return redirect()->route('events');
    }

    public function deleteEvent($id) {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events');
    }
}
