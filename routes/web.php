<?php

use App\Http\Controllers\CabinCategoryController;
use App\Http\Controllers\ShipController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ShipController::class, "index"])->name("ships.index");
Route::get("/ships/{ship}/edit", [ShipController::class, "edit"])->name("ships.edit");
Route::put("/ships/{ship}", [ShipController::class, "update"])->name("ships.update");

Route::get("/cabin_categories/{cabinCategory}/edit", [CabinCategoryController::class, "edit"])->name("cabinCategories.edit");
Route::put("/cabin_categories/{cabinCategory}", [CabinCategoryController::class, "update"])->name("cabinCategories.update");
