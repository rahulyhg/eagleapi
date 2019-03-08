<?php

namespace App\Http\Controllers;

use App\IndGoal;
use Illuminate\Http\Request;

/**
 * @resource IndGoal
 *
 * This is the Model for the employee Individual Goals
 * Attributes are: content(String), start_date(date), end_date(date), approved(boolean), status(boolean) to indicate completion, employee_id(integer)
 */
class IndGoalController extends Controller
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
     * @param  \App\IndGoal  $indGoal
     * @return \Illuminate\Http\Response
     */
    public function show(IndGoal $indGoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IndGoal  $indGoal
     * @return \Illuminate\Http\Response
     */
    public function edit(IndGoal $indGoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IndGoal  $indGoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndGoal $indGoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IndGoal  $indGoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndGoal $indGoal)
    {
        //
    }
}
