<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Task;
use App\User;
use Illuminate\Http\Request;

/**
 * @resource Task
 *
 * This is the Model for the Tasks
 * Attributes are: content(String), start_date(date), end_date(date), employee_id, goal_id, ipm_id, rating(integer), status (boolean), approved (boolean)
 */
class TaskController extends Controller
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
            'data' => Task::with(['ipm','employee'])->get()
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
     * Store a newly created Task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
            'hours' => 'required|string',
            'goal_id' => 'required|integer',
            'ipm_id' => 'required|integer',
        ]);
        $task = new Task();
        $task->content = $request->get('content');
        $task->hours = $request->get('hours');
        $task->employee_id = auth()->user()->id;
        $task->goal_id = $request->get('goal_id');
        $task->ipm_id = $request->get('ipm_id');
        $task->rating = 0;
        $task->status = false;
        $task->approved = false;
        if ($task->save())
            return response()->json([
                'success' => true,
                'data' => $task
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
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        if (!$task->exists) {
            return response()->json([
                'success' => false,
                'message' => 'Task with id ' . $task->id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => Task::with(['ipm','employee','goal'])->find($task->id)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *@hideFromAPIDocumentation
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the Task resource in storage. Access:Employee
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        if (!$task->exists) {
            return response()->json([
                'success' => false,
                'message' => 'Task with id ' . $task->id . ' not found'
            ], 400);
        }
        $updated = $task->fill($request->all())->save();
        if ($updated)
            return response()->json([
                'success' => true,
                'message' => 'Task details updated'
            ],200);
        else
            return response()->json([
                'success' => false,
                'message' => 'Task could not be updated'
            ], 500);
    }
    /**
     * Approve a Task. Access:Supervisor, HR or Admin
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, Task $task)
    {
        $employee = User::find($task->employee_id);
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id
            || auth()->user()->id == $employee->supervisor_id) {
            if (!$task->exists) {
                return response()->json([
                    'success' => false,
                    'message' => 'Task with id ' . $task->id . ' not found'
                ], 400);
            }
            $task->approved = true;
            if ($task->save())
                return response()->json([
                    'success' => true,
                    'message' => 'Task approved'
                ], 200);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'Task could not be approved'
                ], 500);
        } else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }
    /**
     * Complete a Task. Access:Employee. Send rating.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request, Task $task)
    {
        if (!$task->exists) {
            return response()->json([
                'success' => false,
                'message' => 'Task with id ' . $task->id . ' not found'
            ], 400);
        }
        if ($task->save())
            return response()->json([
                'success' => true,
                'message' => 'Task Completed'
            ],200);
        else
            return response()->json([
                'success' => false,
                'message' => 'Task could not be completed'
            ], 500);
    }

    /**
     * Remove the specified resource from storage.
     *@hideFromAPIDocumentation
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
