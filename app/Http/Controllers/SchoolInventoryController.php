<?php

namespace App\Http\Controllers;

use App\SchoolInventory;
use Illuminate\Http\Request;

class SchoolInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        return view('frontend.SchoolInventoryForm');
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
     * @param  \App\SchoolInventory  $schoolInventory
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolInventory $schoolInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SchoolInventory  $schoolInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolInventory $schoolInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SchoolInventory  $schoolInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolInventory $schoolInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SchoolInventory  $schoolInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolInventory $schoolInventory)
    {
        //
    }
}
