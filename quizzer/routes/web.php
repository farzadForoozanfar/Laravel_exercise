<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class , 'Index']);
Route::get('/question/{id}', [QuizController::class, 'Index']);
Route::post('/check', [QuizController::class, 'Check']);
Route::get('/final', [HomeController::class, 'ReportCard']);
Route::post('/validate', [AdminController::class, 'Login']);
Route::post('add', [AdminController::class, 'NewQuestion']);
