<?php

use App\Http\Controllers\WebBlotterControl;
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

Route::post('/submit',[WebBlotterControl::class,'submit'])->name('submit');
Route::get('/show',[WebBlotterControl::class,'showReports']);
