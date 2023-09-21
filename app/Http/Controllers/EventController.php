<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event-index', compact('events'));
    }

    public function create()
    {
        $event = new Event();
        return view('admin.event-create', compact('event'));
    }
    
    // public function showForm()
    // {
    //     $events = Event::where('status', true)->get();
    //     return view('user.event-create', compact('events'));
    // }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required',
    //         'start_date' => 'required|date',
    //         'end_date' => 'required|date',
    //         'status' => 'boolean',
    //     ]);

    //     Event::create($data);

    //     return redirect()->route('admin.event-index');
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'boolean', 
        ]);

        // Convert the "status" checkbox value to a boolean
        $data['status'] = (bool) $request->input('status');

        Event::create($data);

        return redirect()->route('admin.event-index');
    }

    public function edit(Event $event)
    {
        return view('admin.event-edit', compact('event'));
    }

    // public function update(Request $request, Event $event)
    // {
    //     $data = $request->validate([
    //         'title' => 'required',
    //         'start_date' => 'required|date',
    //         'end_date' => 'required|date',
    //         'status' => 'boolean',
    //     ]);

    //     $event->update($data);

    //     return redirect()->route('admin.event-index');
    // }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'boolean', // Ensure that status is a boolean
        ]);

        // Convert the "status" checkbox value to a boolean
        $data['status'] = (bool) $request->input('status');

        $event->update($data);

        return redirect()->route('admin.event-index');
    }


    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.event-index');
    }
}
