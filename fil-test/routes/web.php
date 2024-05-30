<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Accurate Motorcycle Service Reminder']);
});


Route::get('/home', function () {
    return view('home', ['name' => 'Hudiya Resa', 'title' => 'Home Page']);
});

// Route::get('/vehicle', function(){
//     return view('vehicle', ['title' => 'Vehicle', ]);
// }); revise panggil controller



Route::get('/service', function(){
    return view('service', ['title' => 'Service']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/profile/edit', function(){
    return view('profile/edit', ['title' => 'Edit Profile']);
});

Route::get('/vehicle-status', [VehicleStatusController::class, 'index']);


// Route::get('/', 'PagesController@welcome');
// Route::get('/home', 'PagesController@home');
// Route::get('/vehicle', 'PagesController@vehicle');
// Route::get('/service', 'PagesController@service');
// Route::get('/contact', 'PagesController@contact');

// Route::get('/profile/edit', function(){
//     return view('profile/edit', ['title' => 'Edit Profile']);
// });