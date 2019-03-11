<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Goal;
use Illuminate\Http\Request;


/**
 * @resource Goal
 *
 * This is the Model for the overall Company goals
 * Attributes are: content(String), start_date(date), end_date(date)
 */
class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Goal::all()
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *@hideFromAPIDocumentation
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created Goal in storage. Access Level (Admin)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'content' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ]);
        if (auth()->user()->role->id == Constants::admin_role_id){
            $goal = new Goal();
            $goal->content = $request->get('content');
            $goal->start_date = $request->get('start_date');
            $goal->end_date = $request->get('end_date');
                if ($goal->save())
                    return response()->json([
                        'success' => true,
                        'data' => $goal
                    ],200);
                else
                    return response()->json([
                        'success' => false,
                        'message' => 'Goal could not be added'
                    ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        if (!$goal) {
            return response()->json([
                'success' => false,
                'message' => 'Goal with id ' . $goal->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $goal
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        if (auth()->user()->role->id == Constants::admin_role_id) {
            if (!$goal) {
                return response()->json([
                    'success' => false,
                    'message' => 'Goal with id ' . $goal->id . ' not found'
                ], 400);
            }
            $updated = $goal->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Goal details updated'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Goal could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
