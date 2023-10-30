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
        return redirect()->route('user.dashboard');

    }

    // public function index()
    // {
    //     $baptismForms = BaptismForm::all();
    //     return view('admin.baptism-forms.index', compact('baptismForms'));
    // }

    // public function updateStatus(Request $request, BaptismForm $baptismForm)
    // {
    //     $request->validate([
    //         'status' => 'required|in:Pending,Ongoing,Done',
    //         'message' => 'nullable|string',
    //     ]);

    //     $baptismForm->update([
    //         'status' => $request->input('status'),
    //         'message' => $request->input('message'),
    //     ]);

    //     return redirect()->route('admin.baptism-forms.update-status');
    // }


    public function editAll()
    {
        $baptismForms = BaptismForm::all();
        return view('admin.baptism-forms.update-all', compact('baptismForms'));
    }

    public function updateAll(Request $request)
    {
        $data = $request->validate([
            'statuses' => 'required|array',
            'messages' => 'array',
        ]);

        foreach ($data['statuses'] as $baptismFormId => $status) {
            $baptismForm = BaptismForm::find($baptismFormId);

            if ($baptismForm) {
                $baptismForm->update([
                    'status' => $status,
                    'message' => $data['messages'][$baptismFormId],
                ]);
            }
        }

        return redirect()->route('admin.baptism-forms.update-all');
    }




    // public function show()
    // {
    //     $user = auth()->user();
    //     $baptismForm = BaptismForm::where('user_id', $user->id)->get();

    //     return view('user.baptism.show', compact('baptismForm'));
    // }

    public function show()
    {   
        $user = auth()->user();
        $baptismForm = $user->baptismForms->first(); 
    
        return view('user.baptism.show', compact('baptismForm'));
    }
    


    
    // public function viewSubmittedRequests()
    // {
    //     $user = auth()->user();
    //     $userSubmissions = UserSubmission::where('user_id', $user->id)->get();

    //     return view('user.submitted-requests', compact('userSubmissions'));
    // }

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
