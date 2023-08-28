<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TimeSlot;

class TimeSlotController extends Controller
{
    public function index()
    {
        $timeSlots = TimeSlot::all();
        return view('admin.index', compact('timeSlots'));
    }
    
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        TimeSlot::create([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('time-slots.index')->with('success', 'Time Slot created successfully.');
    }

    public function edit($id)
    {
        $timeSlot = TimeSlot::findOrFail($id);
        return view('time_slots.edit', compact('timeSlot'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $timeSlot = TimeSlot::findOrFail($id);
        $timeSlot->update([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('time-slots.index')->with('success', 'Time Slot updated successfully.');
    }

    public function destroy($id)
    {
        $timeSlot = TimeSlot::findOrFail($id);
        $timeSlot->delete();

        return redirect()->route('time-slots.index')->with('success', 'Time Slot deleted successfully.');
    }
}