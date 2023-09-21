<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserSubmission;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve users from the database
        return view('admin.displayUser', compact('users')); 
    }

    public function dashboard()
    {
        return view('user.dashboard');

    }

    // public function viewSubmittedRequests()
    // {
    //     $userSubmissions = UserSubmission::with(['event', 'user'])->get();
    
    //     return view('user.submitted-requests', compact('userSubmissions'));
    // }

    public function viewSubmittedRequests()
    {
        $user = auth()->user();
        $userSubmissions = UserSubmission::where('user_id', $user->id)->get();

        return view('user.submitted-requests', compact('userSubmissions'));
    }

    
}
