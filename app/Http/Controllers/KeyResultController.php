<?php

namespace App\Http\Controllers;

use App\KeyResult;
use Illuminate\Http\Request;

/**
 * @resource KeyResult
 *
 * This is the Model for the Unit KeyResults
 * Attributes are: content(String), start_date(date), end_date(date), objective_id(integer)
 */

class KeyResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\KeyResult  $keyResult
     * @return \Illuminate\Http\Response
     */
    public function show(KeyResult $keyResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeyResult  $keyResult
     * @return \Illuminate\Http\Response
     */
    public function edit(KeyResult $keyResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KeyResult  $keyResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeyResult $keyResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeyResult  $keyResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeyResult $keyResult)
    {
        //
    }
}
