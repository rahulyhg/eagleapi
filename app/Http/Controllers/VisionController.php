<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Vision;
use Illuminate\Http\Request;

/**
 * @resource Vision
 *
 * This is the Model for the Vision
 * Attributes are: content(String), start_date(date), end_date(date)
 */
class VisionController extends Controller
{
    /**
     * Display a listing of the Vision.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Vision::orderBy('created_at','desc')->get()
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
        if (auth()->user()->role->id == Constants::admin_role_id){
            $validatedData = $request->validate([
                'content' => 'required',
                'start_date' => 'required|date',
                'end_date' => 'required|date'
            ]);

            $vision = new Vision();
            $vision->content = $request->get('content');
            $vision->start_date = $request->get('start_date');
            $vision->end_date = $request->get('end_date');

            if ($vision->save())
                return response()->json([
                    'success' => true,
                    'data' => $vision
                ]);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Vision could not be added'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show(Vision $vision)
    {
        if (!$vision) {
            return response()->json([
                'success' => false,
                'message' => 'Vision with id ' . $vision->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $vision
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit(Vision $vision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vision $vision)
    {
        if (auth()->user()->role->id == Constants::admin_role_id) {
            if (!$vision) {
                return response()->json([
                    'success' => false,
                    'message' => 'Vision with id ' . $vision->id . ' not found'
                ], 400);
            }
            $updated = $vision->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Vision details updated'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Vision could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vision $vision)
    {
        //
    }
}
