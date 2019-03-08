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

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::post('user/create', 'AuthController@store');
    Route::get('user/details', 'AuthController@details');
    Route::resource('goals', 'GoalController');
    Route::resource('ind_goals', 'IndGoalController');
    Route::resource('ipms', 'IPMController');
    Route::resource('keyresults', 'KeyResultController');
    Route::resource('objectives', 'ObjectiveController');
    Route::resource('roles', 'RoleController');
    Route::resource('tasks', 'TaskController');
    Route::resource('units', 'UnitController');
    Route::resource('visions', 'VisionController');
});
