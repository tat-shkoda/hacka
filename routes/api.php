<?php

use App\Http\Controllers\CategoriesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', CategoriesController::class);
Route::apiResource('projectStatuses', 'App\Http\Controllers\ProjectStatusesController');
Route::apiResource('stagesOfReady', 'App\Http\Controllers\StagesOfReadyController');
Route::apiResource('cities', 'App\Http\Controllers\CitiesController');
Route::apiResource('companies', 'App\Http\Controllers\CompaniesController');
Route::apiResource('projects', 'App\Http\Controllers\ProjectsController');
Route::apiResource('tasks', 'App\Http\Controllers\TasksController');

Route::apiResource('collaboration/accept/:id', 'App\Http\Controllers\CollaborationController');
