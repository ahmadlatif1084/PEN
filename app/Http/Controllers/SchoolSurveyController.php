<?php

namespace App\Http\Controllers;

use App\SchoolSurvey;
use Illuminate\Http\Request;

class SchoolSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.SchoolSurveyForm');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SchoolSurvey  $schoolSurvey
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolSurvey $schoolSurvey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolSurvey  $schoolSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolSurvey $schoolSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolSurvey  $schoolSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolSurvey $schoolSurvey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolSurvey  $schoolSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolSurvey $schoolSurvey)
    {
        //
    }
}
