<?php

use App\Http\Controllers\ActualiteController;
use App\Models\Actualite;
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


Route::get("/",[ActualiteController::class,"index"]);

Route::get("/detail/{id}",[ActualiteController::class,"detail"]);

Route::get("/create",[ActualiteController::class,"create"]);

Route::post("/save",[ActualiteController::class,"save"]);

Route::post("/update",[ActualiteController::class,"update"]);

Route::get("/modifier/{id}",[ActualiteController::class,"modifier"]);

Route::get("/delete/{id}",[ActualiteController::class,"delete"]);

