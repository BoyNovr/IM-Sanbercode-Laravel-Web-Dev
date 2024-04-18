<?php

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
