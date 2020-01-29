<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::any('amilissa-ex1', 'Exercise1');
Route::any('amilissa-ex2', 'Exercise2');
Route::any('amilissa-ex3', 'Exercise3@index');
Route::any('amilissa-ex3/store', 'Exercise3@store');
Route::any('amilissa-final', 'ExerciseFinal@login');
Route::any('amilissa-final/store', 'ExerciseFinal@store');
