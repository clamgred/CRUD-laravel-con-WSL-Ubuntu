<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
// ** Get route example

Route::get('/', function () {
    return view('home');
    //return 'welcome to laravel';
});
// Parameters using route
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname,$lastname) {
    return $firstname.' '.$lastname;
});

Route::get('/contact', function () {
    return view('contact');
});

// Named route
Route::get('/test', function () {
    return 'This es a test!';
})->name('testpage');   

// Portfolio related routes
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/organization', function () {
        return view('organization');
    });
});

// ** POST route example
Route::post('/formsubmitted', function (Request $request) {
    $request->validate([
        'fullname' => 'required|string|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    $fullname = $request->input('fullname');
    $email = $request->input('email');
    // return "Your full name is $fullname, and your email is $email!"; 
    return "Your full name is {$request->input('fullname')}, and your email is $email!"; 
})->name('formsubmitted');

Route::resource('posts', PostController::class);