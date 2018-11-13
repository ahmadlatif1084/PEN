<?php

namespace App\Http\Controllers;

use App\TrainingAssesment;
use Illuminate\Http\Request;

class TrainingAssesmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.TrainingNeedAssessment');
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
     * @param  \App\TrainingAssesment  $trainingAssesment
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingAssesment $trainingAssesment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainingAssesment  $trainingAssesment
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingAssesment $trainingAssesment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainingAssesment  $trainingAssesment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingAssesment $trainingAssesment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainingAssesment  $trainingAssesment
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingAssesment $trainingAssesment)
    {
        //
    }
}
