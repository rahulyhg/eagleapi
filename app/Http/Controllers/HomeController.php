<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Vision;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * @resource Home
 * This is for requests relating to home. E.g. Landing Page
 *
 */
class HomeController extends Controller
{
    /**
     * Landing Page. Returns Vision and Goals
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $vision = Vision::all()->last();
        $goals = Goal::orderBy('created_at','desc')->take(2)->get();
        return response()->json([
            'success' => true,
            'data' => ['vision'=>$vision,'goals'=>$goals]
        ],200);
    }
}
