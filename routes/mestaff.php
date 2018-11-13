<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('mestaff')->user();

    //dd($users);

    return view('mestaff.home');
})->name('home');

