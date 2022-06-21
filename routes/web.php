<?php

use App\Http\Controllers\authenticate;
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

Route::get('/home',[WebBlotterControl::class,'redirecttohome']); // -
Route::get('/',[WebBlotterControl::class,'redirecttologin'])->name('login'); // -
// Route::get('/sendreport',[WebBlotterControl::class,'index'])->middleware('auth:sanctum');
Route::get('/login/{email}/{password}',[authenticate::class,'login']);
Route::get('/sendMail/{name}/{email}/{id}',[WebBlotterControl::class,'sendMail']);
Route::get('/assess',[WebBlotterControl::class,'ViewasAssessor']);
Route::get('/viewreport/{id}',[ReportsController::class,'show']);
Route::get('/assessreport/{id}/{userid}',[ReportsController::class,'edit']);
Route::get('/MarkAssessed/{id}',[WebBlotterControl::class,'assessed']);
Route::get('/MarkReject/{id}',[WebBlotterControl::class,'reject']);
Route::get('/show',[ReportsController::class,'index'])->name('show');

