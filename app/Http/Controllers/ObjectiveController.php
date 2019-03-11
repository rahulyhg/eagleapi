<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Objective;
use App\Unit;
use Illuminate\Http\Request;

/**
 * @resource Objective
 *
 * This is the Model for the Unit Objectives
 * Attributes are: content(String), start_date(date), end_date(date), unit_id(integer)
 */
class ObjectiveController extends Controller
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
            'data' => Objective::with(['unit','key_results'])->get()
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'unit_id' => 'required',
        ]);
        $unit = Unit::find($request->get('unit_id'));
        if (auth()->user()->role->id == Constants::admin_role_id ||
            (auth()->user()->role->id == Constants::unit_lead_role_id && auth()->user()->id == $unit->unit_lead)){
            $objective = new Objective();
            $objective->content = $request->get('content');
            $objective->start_date = $request->get('start_date');
            $objective->end_date = $request->get('end_date');
            $objective->unit_id = $request->get('unit_id');
            if ($objective->save())
                return response()->json([
                    'success' => true,
                    'data' => $objective
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Objective could not be added'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function show(Objective $objective)
    {
        if (!$objective) {
            return response()->json([
                'success' => false,
                'message' => 'Objective with id ' . $objective->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => Objective::with(['key_results','unit'])->find($objective->id)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function edit(Objective $objective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objective $objective)
    {
        if (auth()->user()->role->id == Constants::admin_role_id ||
            (auth()->user()->role->id == Constants::unit_lead_role_id && auth()->user()->id == $objective->unit->unit_lead)){
            if (!$objective) {
                return response()->json([
                    'success' => false,
                    'message' => 'Objective with id ' . $objective->id . ' not found'
                ], 400);
            }
            $updated = $objective->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Objective details updated'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Objective could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\Objective  $objective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objective $objective)
    {
        //
    }
}
