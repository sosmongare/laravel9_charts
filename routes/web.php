<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ChartController;

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

Route::get('/',[ChartController::class,'showChart'])->name('index');
//Route::get('/getChartData',[ChartController::class,'getChartData'])->name('getChartData');