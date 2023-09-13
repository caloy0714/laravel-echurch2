<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\UserSubmission;
use App\Models\UserSubmissionName;

class EventRegistrationController extends Controller
{
    public function showForm()
    {
        $events = Event::where('status', 'active')->get();
        // $events = Event::where('status', 1)->get();
        return view('user.event-registration', compact('events'));
    }

    public function register(Request $request)
    {
        // Validation rules for the form fields
        $data = $request->validate([
            'name' => 'required|string',
            'event' => 'required|exists:events,id',
            'names' => 'required|string',
        ]);

        // Split the comma-separated names into an array
        $names = explode(',', $data['names']);

        // Create a new UserSubmission record in the database with the default status "Pending"
        $submission = UserSubmission::create([
            'name' => $data['name'],
            'event_id' => $data['event'],
            'status' => 'Pending', // Set the status to "Pending" by default
        ]);

        // Attach additional names to the submission
        foreach ($names as $name) {
            UserSubmissionName::create([
                'name' => trim($name),
                'user_submission_id' => $submission->id,
            ]);
        }

        // Redirect to a success page or return a response
        return redirect()->route('user.dashboard');
    }
}

