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
        return response()->json([
            'success' => true,
            'data' => IPM::with(['tasks'])->get()
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
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);
            $ipm = new IPM();
            $ipm->start_date = $request->get('start_date');
            $ipm->end_date = $request->get('end_date');
            $ipm->employee_id = auth()->user()->id;
            if ($ipm->save())
                return response()->json([
                    'success' => true,
                    'data' => $ipm
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'IPM could not be added'
                ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IPM  $ipm
     * @return \Illuminate\Http\Response
     */
    public function show(IPM $ipm)
    {
        if (!$ipm->exists) {
            return response()->json([
                'success' => false,
                'message' => 'IPM with id ' . $ipm->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => IPM::with(['tasks','employee'])->find($ipm->id)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
     * @param  \App\IPM  $iPM
     * @return \Illuminate\Http\Response
     */
    public function edit(IPM $iPM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *@hideFromAPIDocumentation
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IPM  $ipm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IPM $ipm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\IPM  $iPM
     * @return \Illuminate\Http\Response
     */
    public function destroy(IPM $iPM)
    {
        //
    }
}
