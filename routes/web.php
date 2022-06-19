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

Route::get('/',[WebBlotterControl::class,'redirecttologin'])->name('login');
Route::get('/sendreport',[WebBlotterControl::class,'index']);
Route::get('/sendMail/{name}/{email}',[WebBlotterControl::class,'sendMail']);
Route::get('/assess',[WebBlotterControl::class,'ViewasAssessor'])->middleware('auth:sanctum');
Route::get('/viewreport/{id}',[ReportsController::class,'show']);
Route::get('/assessreport/{id}',[ReportsController::class,'edit']);
Route::post('/submit',[ReportsController::class,'store'])->name('submit');
Route::get('/show',[ReportsController::class,'index'])->name('show');