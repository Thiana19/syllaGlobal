<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');;

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/our-team', function () {
    return view('team');
})->name('team');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/free-consultation', function () {
    return view('consultation');
})->name('consultation');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');
