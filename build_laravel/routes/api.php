<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComplectController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Работа с пользователем
Route::prefix("user") -> group( function () {
    Route::get("all", [UserController::class, "all_users"]);
    Route::post("login", [UserController::class, "login"]);
    Route::post("registration", [UserController::class, "registration"]);

});



// ДОБАВИТЬ КОМПЛЕКТУЮЩИЕ
Route::prefix("complect/add") -> group( function () {
    Route::post("motherboard", [ComplectController::class, "MotherBoardAdd"]);
    Route::post("processor", [ComplectController::class, "ProcessorAdd"]);
    Route::post("gpu", [ComplectController::class, "GPUAdd"]);
    Route::post("ram", [ComplectController::class, "RAMAdd"]);
    Route::post("power", [ComplectController::class, "PowerAdd"]);
    Route::post("cooling", [ComplectController::class, "CoolingAdd"]);
    Route::post("storage", [ComplectController::class, "StorageAdd"]);
    Route::post("constrained", [ComplectController::class, "ConstrainedAdd"]);

});


// ИЗМЕНИТЬ КОМПЛЕКТУЮЩИЕ
Route::prefix("complect/edit/{id}") -> group( function () {
    Route::post("motherboard", [ComplectController::class, "MotherBoardEdit"]);
    Route::post("processor", [ComplectController::class, "ProcessorEdit"]);
    Route::post("gpu", [ComplectController::class, "GPUEdit"]);
    Route::post("ram", [ComplectController::class, "RAMEdit"]);
    Route::post("power", [ComplectController::class, "PowerEdit"]);
    Route::post("cooling", [ComplectController::class, "CoolingEdit"]);
    Route::post("storage", [ComplectController::class, "StorageEdit"]);
    Route::post("constrained", [ComplectController::class, "ConstrainedEdit"]);

});

// УДАЛИТЬ КОМПЛЕКТУЮЩИЕ
Route::prefix("complect/delete/{id}") -> group( function () {
    Route::delete("motherboard", [ComplectController::class, "MotherBoardDelete"]);
    Route::delete("processor", [ComplectController::class, "ProcessorDelete"]);
    Route::delete("gpu", [ComplectController::class, "GPUDelete"]);
    Route::delete("ram", [ComplectController::class, "RAMDelete"]);
    Route::delete("power", [ComplectController::class, "PowerDelete"]);
    Route::delete("cooling", [ComplectController::class, "CoolingDelete"]);
    Route::delete("storage", [ComplectController::class, "StorageDelete"]);
    Route::delete("constrained", [ComplectController::class, "ConstrainedDelete"]);
});

// Просмотреть
Route::prefix("complect/show") -> group( function () {
    // Route::delete("motherboard", [ComplectController::class, "MotherBoardDelete"]);
    // Route::delete("processor", [ComplectController::class, "ProcessorDelete"]);
    // Route::delete("gpu", [ComplectController::class, "GPUDelete"]);
    // Route::delete("ram", [ComplectController::class, "RAMDelete"]);
    // Route::delete("power", [ComplectController::class, "PowerDelete"]);
    // Route::delete("cooling", [ComplectController::class, "CoolingDelete"]);
    // Route::delete("storage", [ComplectController::class, "StorageDelete"]);
    Route::get("constrained", [ComplectController::class, "ConstrainedShowAll"]);
});
