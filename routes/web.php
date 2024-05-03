<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get("/", [TasksController::class , "index"])->name("home.index");
Route::post("/tasks", [TasksController::class , "store"])->name("task.store");
Route::put("/tasks/edit/{task}", [TasksController::class , "update"])->name("task.update");
Route::delete("/tasks/delete/{task}", [TasksController::class , "destroy"])->name("task.delete");
// 
Route::get("/calendar", [TasksController::class , "calendar"])->name("calendar");
Route::get("/profile", [TasksController::class , "profile"])->name("profile");
