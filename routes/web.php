<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\pengurusController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/dashboard_pengurus', [pengurusController::class, 'index']);