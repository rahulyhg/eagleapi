<?php

namespace App\Http\Controllers;

use App\Constants;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if (auth()->user()->id == Constants::$admin_id) {
            $this->validate($request, [
                'surname' => 'required|string',
                'firstname' => 'required|string',
                'email' => 'required|email|unique:users',
                'phone' => 'required|string',
                'password' => 'required|string',
                'job_title' => 'required|string',
            ]);

            $user = User::create([
                'surname' => $request->surname,
                'firstname' => $request->firstname,
                'email' => $request->email,
                'phone' => $request->phone,
                'job_title' => $request->job_title,
                'password' => bcrypt($request->password)
            ]);

            $token = $user->createToken($user->email)->accessToken;
            return response()->json(['success' => true,'token' => $token], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not have required access permission.'
            ], 403);
        }
    }

    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken($request->email)->accessToken;
            return response()->json(['success' => true,'token' => $token], 200);
        } else {
            return response()->json(['success' => false,'error' => 'Unauthorised'], 401);
        }
    }

    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['success' => true,'user' => auth()->user()], 200);
    }
}
