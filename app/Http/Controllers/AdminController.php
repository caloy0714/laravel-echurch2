<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSubmission;

class AdminController extends Controller
{
    public function viewUserSubmissions()
    {
        $userSubmissions = UserSubmission::with('user')->get();
        return view('admin.user-submissions.index', compact('userSubmissions'));
        // Fetch all user submissions from the database
        // $userSubmissions = UserSubmission::all();

        // // Display the user submissions in a view
        // return view('admin.user-submissions.index', compact('userSubmissions'));
    }

    // public function updateUserSubmission($id)
    // {
    //     // Find the user submission by ID
    //     $userSubmission = UserSubmission::findOrFail($id);

    //     // Update the user submission status (you can replace 'new_status' with your desired status)
    //     $userSubmission->update(['status' => 'new_status']);

    //     // Redirect back to the admin user submissions page
    //     return redirect()->route('admin.user-submissions');
    // }

    public function updateUserSubmission(Request $request, $id)
    {
        \DB::enableQueryLog();
        $data = $request->validate([
            'status' => 'required|in:Pending,Ongoing,Done',
            
        ]);

        $userSubmission = UserSubmission::find($id);

        if ($userSubmission) {
            $userSubmission->update([
                'status' => $data['status'],
                // Add other fields here if needed
            ]);

            // Redirect or return a success message
            return redirect()->route('admin.user-submissions.index')->with('success', 'User submission updated successfully');
        } else {
            // Handle the case where the user submission is not found
            return redirect()->route('admin.user-submissions.index')->with('error', 'User submission not found');
        }
    }

    public function deleteUserSubmission($id)
    {
        // Find the user submission by ID
        $userSubmission = UserSubmission::findOrFail($id);

        // Delete the user submission
        $userSubmission->delete();

        // Redirect back to the admin user submissions page
        return redirect()->route('admin.user-submissions');
    }

    public function editUserSubmissionMessage($id)
    {
        $userSubmission = UserSubmission::find($id);

        return view('admin.edit-message', compact('userSubmission'));
    }

    // Method to update the message for a user submission
    public function updateUserSubmissionMessage(Request $request, $id)
    {
        $userSubmission = UserSubmission::find($id);

        $data = $request->validate([
            'message' => 'required',
        ]);

        $userSubmission->update($data);

        return redirect()->route('admin.user-submissions.index')->with('success', 'Message updated successfully');
    }

}
