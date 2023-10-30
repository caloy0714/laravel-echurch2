<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserSubmission;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
{
    if (Auth::check()) {
        $user = Auth::user();
        $usertype = $user->usertype;

        if ($usertype === 'user') {
            return view('user.dashboard');
        } elseif ($usertype === 'admin') {
            $statuses = $this->getStatusCounts();
            return view('admin.admindashboard', compact('statuses'));
        }
    }

    return redirect()->back();
}

private function getStatusCounts()
{
    $records = UserSubmission::all();

    $statuses = [
        'Pending' => 0,
        'Ongoing' => 0,
        'Done' => 0,
    ];

    foreach ($records as $record) {
        $status = $record->getStatus();

        if (array_key_exists($status, $statuses)) {
            $statuses[$status]++;
        }
    }

    return $statuses;
}


}
