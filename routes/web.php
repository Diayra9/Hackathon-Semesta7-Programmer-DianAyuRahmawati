<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UnitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/assignments', AssignmentController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/complaints', ComplaintController::class);
Route::resource('/priorities', PriorityController::class);
Route::resource('/residents', ResidentController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/units', UnitController::class);