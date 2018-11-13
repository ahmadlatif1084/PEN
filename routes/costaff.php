<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('costaff')->user();

    //dd($users);

    return view('costaff.home');
})->name('home');

