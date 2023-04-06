<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Read
Route::get("/", [ProductController::class, "index"]);
Route::get("/dashboard/{pagination?}", [ProductController::class, "dashboard"]);
// Create
Route::get('/create', [ProductController::class, "create"]);
Route::post('/store', [ProductController::class, "store"]);
// Update
Route::get('/edit/{id}', [ProductController::class, "edit"]);
Route::post('/update/{id}', [ProductController::class, "update"]);
// Delete
Route::delete('/delete/{id}', [ProductController::class, "destroy"]);

// how to pass url parameters to controller methods
// https://stackoverflow.com/questions/40510086/how-to-pass-url-parameters-to-controller-methods
