<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Unit;
use Illuminate\Http\Request;

/**
 * @resource Unit
 *
 * This is the Model for the Units
 * Attributes are: name(String), unit_lead(integer) a foreign key for employee (User)
 */
class UnitController extends Controller
{
    /**
     * Display a listing of the Units.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Unit::with(['lead','employees'])->get()
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
     * Store a newly created Unit in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'unit_lead' => 'required'
        ]);
        if (auth()->user()->role->id == Constants::admin_role_id) {
            $unit = new Unit();
            $unit->name = $request->get('name');
            $unit->unit_lead = $request->get('unit_lead');
            if ($unit->save())
                return response()->json([
                    'success' => true,
                    'data' => $unit
                ]);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Unit could not be added'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        if (!$unit) {
            return response()->json([
                'success' => false,
                'message' => 'Unit with id ' . $unit->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => Unit::with(['lead','employees'])->find($unit->id)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        if (auth()->user()->role->id == Constants::admin_role_id) {
            if (!$unit) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unit with id ' . $unit->id . ' not found'
                ], 400);
            }
            $updated = $unit->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Unit details updated'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Unit could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
