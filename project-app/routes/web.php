<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class,'home']);
Route::get('/register', [DashboardController::class,'register']);
Route::post('/welcome', [DashboardController::class,'welcome']);

Route::get('/data-table',function(){
    return view('datatable');
});

Route::get('/table',function(){
    return view('table');
});

Route::get('/cast',[CastController::class,'index']);
Route::get('/cast/create',[CastController::class,'create']);
Route::post('/cast',[CastController::class,'store']);
Route::get('/cast/{cast_id}',[CastController::class,'show']);
Route::get('/cast/{cast_id}/edit',[CastController::class,'edit']);
Route::put('/cast/{cast_id}',[CastController::class,'update']);
Route::delete('/cast/{cast_id}',[CastController::class,'destroy']);