<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\UserSubmission;
use App\Models\UserSubmissionName;
use App\Exports\UserSubmissionsExport;
use Maatwebsite\Excel\Facades\Excel;

class UserSubmissionController extends Controller
{
    public function showForm()
    {
        $events = Event::where('status', 1)->get();
        // dd($events);
        return view('user.event-registration', compact('events'));
    }

    public function submit(Request $request)
    {
        // Validation rules for the form fields
        $data = $request->validate([
            'name' => 'required|string',
            'event' => 'required|exists:events,id',
            'names' => 'required|string',
        ]);

        // Split the comma-separated names into an array
        $names = explode(',', $data['names']);

        // Create a new UserSubmission record in the user_submissions table with the default status "Pending"
        $submission = UserSubmission::create([
            'name' => $data['name'],
            'event_id' => $data['event'],
            'status' => 'Pending', 
        ]);

        // Assign the user_id from the authenticated user
        $submission->user_id = auth()->user()->id; // Capture the authenticated user's ID

        // Save the submission
        $submission->save();

        // Attach additional names to the submission
        foreach ($names as $name) {
            UserSubmissionName::create([
                'name' => trim($name),
                'user_submission_id' => $submission->id,
            ]);
        }

        // Redirect to a success page or return a response
        return redirect()->route('user.registration-success');
    }


    public function exportUserSubmissions()
    {
        return Excel::download(new UserSubmissionsExport, 'user_submissions.xlsx');
    }

    // public function submit(Request $request)
    // {
    //     // Validation rules for the form fields
    //     $data = $request->validate([
    //         'name' => 'required|string',
    //         'event' => 'required|exists:events,id',
    //         'names' => 'required|string',
    //     ]);

    //     // Split the comma-separated names into an array
    //     $names = explode(',', $data['names']);

    //     // Create a new UserSubmission record in the user_submissions table with the default status "Pending"
    //     $submission = UserSubmission::create([
    //         'name' => $data['name'],
    //         'event_id' => $data['event'],
    //         'status' => 'Pending', 
    //     ]);

    //     // Attach additional names to the submission
    //     foreach ($names as $name) {
    //         UserSubmissionName::create([
    //             'name' => trim($name),
    //             'user_submission_id' => $submission->id,
    //         ]);
    //     }

    //     // Redirect to a success page or return a response
    //     return redirect()->route('user.registration-success');
    // }
}
