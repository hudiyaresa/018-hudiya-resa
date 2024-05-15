<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Welcome to Smart Automotive']);
});


Route::get('/home', function () {
    return view('home', ['name' => 'Hudiya Resa', 'title' => 'Home Page']);
});

Route::get('/vehicle', function(){
    return view('vehicle', ['title' => 'Vehicle']);
});

Route::get('/service', function(){
    return view('service', ['title' => 'Service']);
});

Route::get('/contact', function(){
    return view('contact', ['title' => 'Contact Us']);
});