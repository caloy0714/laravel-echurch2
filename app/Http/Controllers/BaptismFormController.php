<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaptismForm;

class BaptismFormController extends Controller
{

    public function create()
    {
        return view('user.baptism.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_of_child' => 'required|string',
            'place_of_birth' => 'required|string',
            'father' => 'required|string',
            'father_place_of_birth' => 'required|string',
            'mother' => 'required|string',
            'mother_place_of_birth' => 'required|string',
            'kind_of_union' => 'required|in:Catholic,Civil,Protestant,Aglipayan',
            'date_of_birth' => 'required|date',
            'date_of_baptism' => 'required|date',
            'godfather' => 'required|string',
            'residence_of_godfather' => 'required|string', 
            'godmother' => 'required|string',
            'residence_of_godmother' => 'required|string', 
            'other_sponsors' => 'nullable|string',
        ]);

        // Add status and message fields
        $data['status'] = 'Pending';
        $data['message'] = null;

        // Create a new BaptismForm record
        $data['user_id'] = auth()->user()->id;
        BaptismForm::create($data);
        return redirect()->route('dashboard');

    }


    public function show()
    {
        $user = auth()->user();
        $baptismForm = $user->BaptismForm;

        return view('user.baptism.show', compact('baptismForm'));
    }

    // public function viewSubmittedRequests()
    // {
    //     $user = auth()->user();
    //     $userSubmissions = UserSubmission::where('user_id', $user->id)->get();

    //     return view('user.submitted-requests', compact('userSubmissions'));
    // }

//     public function show($id)
// {
//     // Retrieve and display a user's submitted Baptism Form
//     $baptismForm = BaptismForm::findOrFail($id);

//     return view('baptism.show', compact('baptismForm'));
// }


}
