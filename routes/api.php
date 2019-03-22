<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('v1/user/login', 'AuthController@login');
Route::get('v1/home/landing', 'HomeController@landing');


Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::post('user/create', 'AuthController@store');
    Route::get('user/details', 'AuthController@details');
    Route::get('user/all', 'UserController@index');
    Route::get('user/{id}', 'UserController@show');
    Route::post('user/unit_lead/{user}/{unit}', 'AuthController@set_unit_lead');
    Route::post('user/demote_unit_lead/{user}/{unit}', 'AuthController@demote_unit_lead');
    Route::post('user/hr/{user}', 'AuthController@set_hr');
    Route::post('user/demote_hr/{user}', 'AuthController@demote_hr');
    Route::get('user/{id}', 'UserController@show');
    Route::patch('user/update', 'UserController@update');
    Route::patch('user/admin_update/{id}', 'UserController@adminUpdate');
    Route::resource('goals', 'GoalController');
    Route::resource('ind_goals', 'IndGoalController');
    Route::patch('ind_goals/approve/{id}','IndGoalController@approve');
    Route::patch('ind_goals/disapprove/{id}','IndGoalController@disapprove');
    Route::patch('ind_goals/complete/{id}','IndGoalController@complete');
    Route::resource('ipms', 'IPMController');
    Route::get('current_ipm','IPMController@current');
    Route::get('keyresults', 'KeyResultController@index');
    Route::post('keyresults', 'KeyResultController@store');
    Route::patch('keyresults/{id}', 'KeyResultController@update');
    Route::resource('objectives', 'ObjectiveController');
    Route::resource('roles', 'RoleController');
    Route::resource('tasks', 'TaskController');
    Route::post('tasks/approve/{task}', 'TaskController@approve');
    Route::post('tasks/complete/{task}', 'TaskController@complete');
    Route::resource('units', 'UnitController');
    Route::resource('visions', 'VisionController');
});
