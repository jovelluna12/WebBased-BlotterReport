<?php

use App\Http\Controllers\WebBlotterControl;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[WebBlotterControl::class,'index']);
Route::get('/viewreport/{id}',[ReportsController::class,'show']);
Route::post('/submit',[ReportsController::class,'store'])->name('submit');
Route::get('/show',[ReportsController::class,'index'])->name('show');
