<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('hostaff')->user();

    //dd($users);

    return view('hostaff.home');
})->name('home');

