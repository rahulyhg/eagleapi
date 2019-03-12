<?php

namespace App\Http\Controllers;

use App\Constants;
use App\KeyResult;
use App\Objective;
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
        return response()->json([
            'success' => true,
            'data' => KeyResult::with(['objective'])->get()
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
            'objective_id' => 'required',
        ]);
        $objective = Objective::find($request->get('objective_id'));
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id ||
            (auth()->user()->role->id == Constants::unit_lead_role_id && auth()->user()->id == $objective->unit->unit_lead)){
            $key_result = new KeyResult();
            $key_result->content = $request->get('content');
            $key_result->start_date = $request->get('start_date');
            $key_result->end_date = $request->get('end_date');
            $key_result->objective_id = $request->get('objective_id');
            if ($key_result->save())
                return response()->json([
                    'success' => true,
                    'data' => $key_result
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'KeyResult could not be added'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
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
     *@hideFromAPIDocumentation
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
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param KeyResult $keyResult
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'objective_id' => 'required',
        ]);
        $keyResult = KeyResult::find($id);
        $objective = Objective::find($request->get('objective_id'));
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id ||
            (auth()->user()->role->id == Constants::unit_lead_role_id && auth()->user()->id == $objective->unit->unit_lead)){
            if (!$keyResult->exists) {
                return response()->json([
                    'success' => false,
                    'message' => 'KeyResult with id ' . $keyResult->id . ' not found'
                ], 400);
            }
            $updated = $keyResult->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'KeyResult details updated'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'KeyResult could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\KeyResult  $keyResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeyResult $keyResult)
    {
        //
    }
}
