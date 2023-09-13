<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\UserSubmissionController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome2', function () {
    return view('welcome2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
// Route::get('/home',[HomeController::class,'index']);
Route::get('/users', [UserController::class, 'index'])->name('admin.displayUser');
Route::resource('events', EventController::class);
Route::get('/admin/events', [EventController::class, 'index'])->name('admin.event-index');
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.event-create');
Route::post('/admin/events/store', [EventController::class, 'store'])->name('admin.event-store');
Route::get('/admin/events/edit/{event}', [EventController::class, 'edit'])->name('admin.event-edit');
Route::put('/admin/events/update/{event}', [EventController::class, 'update'])->name('admin.event-update');
Route::delete('/admin/events/destroy/{event}', [EventController::class, 'destroy'])->name('admin.event-destroy');


// Display the registration form
Route::get('/user/registration-form', [UserSubmissionController::class, 'showForm'])->name('user.event-registration');
// Handle form submissions
Route::post('/user/submit-registration', [UserSubmissionController::class, 'submit'])->name('user.submit-registration');
Route::get('/user/event-registration', [EventRegistrationController::class, 'showForm'])->name('user.registration-form');


// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/user-submissions', 'AdminController@viewUserSubmissions')->name('admin.user-submissions');
//     Route::patch('/admin/user-submissions/{id}', 'AdminController@updateUserSubmission')->name('admin.user-submissions.update');
//     Route::get('/admin/user-submissions', 'AdminController@viewUserSubmissions')->name('admin.user-submissions.index');

// });
Route::get('/admin/user-submissions', [AdminController::class, 'viewUserSubmissions'])->name('admin.user-submissions.index');
Route::patch('/admin/user-submissions/update/{id}', [AdminController::class, 'updateUserSubmission'])->name('admin.user-submissions.update');;
Route::get('/admin/user-submissions/{id}/edit-message', [AdminController::class, 'editUserSubmissionMessage'])->name('admin.user-submissions.edit-message');
Route::patch('/admin/user-submissions/{id}/update-message', [AdminController::class, 'updateUserSubmissionMessage'])->name('admin.user-submissions.update-message');


Route::get('/user/registration-success', function () {
    return view('user.registration-success');
})->name('user.registration-success');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
