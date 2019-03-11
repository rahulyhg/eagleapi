<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Goal;
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
     * Display a listing of the Individual Goals.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => auth()->user()->goals
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     * @hideFromAPIDocumentation
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
                'end_date' => 'required|date'
            ]);

            $goal = new IndGoal();
            $goal->content = $request->get('content');
            $goal->start_date = $request->get('start_date');
            $goal->end_date = $request->get('end_date');
            $goal->employee_id = auth()->user()->id;
            $goal->approved = false;
            $goal->status = false;

            if ($goal->save())
                return response()->json([
                    'success' => true,
                    'data' => $goal
                ]);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal could not be added'
                ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IndGoal  $indGoal
     * @return \Illuminate\Http\Response
     */
    public function show(IndGoal $indGoal)
    {
        if (!$indGoal) {
            return response()->json([
                'success' => false,
                'message' => 'Individual Goal with id ' . $indGoal->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => IndGoal::with(['tasks','employee'])->find($indGoal->id)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
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
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id) {
            if (!$indGoal) {
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal with id ' . $indGoal->id . ' not found'
                ], 400);
            }
            $updated = $indGoal->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Individual Goal details updated'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Approve an individual Goal by HR or Admin. Send ID
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id){
        $indGoal = IndGoal::find($id);
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id){
            if (!$indGoal) {
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal with id ' . $indGoal->id . ' not found'
                ], 400);
            }
            $indGoal->approved = true;
            $updated = $indGoal->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Individual Goal approved'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal could not be approved'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }
    /**
     * Disapprove an individual Goal by HR or Admin. Send ID
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function disapprove($id){
        $indGoal = IndGoal::find($id);
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id){
            if (!$indGoal) {
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal with id ' . $indGoal->id . ' not found'
                ], 400);
            }
            $indGoal->approved = false;
            $updated = $indGoal->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Individual Goal disapproved'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal could not be disapproved'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }
    /**
     * Complete an individual Goal by User
     *
     * @return \Illuminate\Http\Response
     */
    public function complete(){
        $indGoal = IndGoal::find(auth()->user()->id);
            if (!$indGoal) {
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal with id ' . $indGoal->id . ' not found'
                ], 400);
            }
            $indGoal->status = true;
            $updated = $indGoal->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'Individual Goal Completed'
                ],200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Individual Goal could not be completed'
                ], 500);
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\IndGoal  $indGoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndGoal $indGoal)
    {
        //
    }
}
