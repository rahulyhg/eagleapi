<?php

namespace App\Http\Controllers;

use App\IPM;
use Illuminate\Http\Request;

/**
 * @resource IPM
 *
 * This is the Model for the employee Individual IPMs
 * Attributes are: content(String), start_date(date), end_date(date), employee_id(integer)
 */
class IPMController extends Controller
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
     * @param  \App\IPM  $iPM
     * @return \Illuminate\Http\Response
     */
    public function show(IPM $iPM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IPM  $iPM
     * @return \Illuminate\Http\Response
     */
    public function edit(IPM $iPM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IPM  $iPM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IPM $iPM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IPM  $iPM
     * @return \Illuminate\Http\Response
     */
    public function destroy(IPM $iPM)
    {
        //
    }
}
