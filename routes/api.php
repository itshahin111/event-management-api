<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post("/register",[AuthController::class,"memberRegister"]);
Route::post("/login",[AuthController::class,"login"]);
Route::get("/current-user/{id}",[AuthController::class,"user"])->middleware('auth:sanctum');
Route::get("/logout",[AuthController::class,"logout"])->middleware('auth:sanctum');

Route::get("/users",[UserController::class,"getUsers"]);
Route::get("/user/{id}",[UserController::class,"getUser"]);
Route::post("/create-user",[UserController::class,"createUser"]);
Route::put("/update-user/{id}",[UserController::class,"updateUser"]);
Route::delete("/delete-user/{id}",[UserController::class, "deleteUser"]);
Route::get("/events",[EventController::class, "events"]);


Route::get("/bookings",[BookingController::class, "getAllBookings"]);
