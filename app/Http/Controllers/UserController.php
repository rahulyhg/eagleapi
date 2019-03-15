<?php

namespace App\Http\Controllers;

use App\Constants;
use App\User;
use Illuminate\Http\Request;


/**
 * @resource User
 *
 * This is the Model for the User (Employee)
 * Attributes are: surname(String), firstname(string), email(string), phone(string),unit_id(integer),gender(string),role_id(integer),password and job_title(string)
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource. Access Level (Logged in)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => User::with(['unit','supervisor','role'])
        ],200);
    }



    /**
     * Display the details of a particular User
     * including ipms, goals, tasks, supervises, unit and supervisor. Access Level Admin or HR or owner of account
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id
        || auth()->user()->id == $id
        ) { //admin or HR or owner of account role check
            $user = User::with(['ipms','goals','tasks','supervises','unit','supervisor'])->find($id);
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User with id ' . $id . ' not found'
                ], 400);
            }
            return response()->json([
                'success' => true,
                'data' => $user
            ], 200);
        } else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }

    /**
     * Update the authenticated User.
     * Don't send ID. User will be detected based on Token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $updated = $user->fill($request->all())->save();
        if ($updated)
            return response()->json([
                'success' => true,
                'message' => 'User details updated'
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'User could not be updated'
            ], 500);
    }

    /**
     * Update a specified User ID.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminUpdate(Request $request,$id)
    {
        if (auth()->user()->role->id == Constants::admin_role_id || auth()->user()->role->id == Constants::hr_role_id) {
            $user = User::find($id);
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User with id ' . $id . ' not found'
                ], 400);
            }
            $updated = $user->fill($request->all())->save();
            if ($updated)
                return response()->json([
                    'success' => true,
                    'message' => 'User details updated'
                ]);
            else
                return response()->json([
                    'success' => false,
                    'message' => 'User could not be updated'
                ], 500);
        }else {
            return response()->json(["success"=>false,"message"=>"User does not have required access permission."],403);
        }
    }
}
