<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('donor')->user();

    //dd($users);

    return view('donor.home');
})->name('home');

