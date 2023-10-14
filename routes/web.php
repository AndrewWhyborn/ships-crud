<?php

use App\Http\Controllers\ShipController;
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

Route::get("/", [ShipController::class, "index"])->name("ships.index");
Route::get("/ships/{ship}/edit", [ShipController::class, "edit"])->name("ships.edit");
Route::put("/ships/{ship}", [ShipController::class, "update"])->name("ships.update");
