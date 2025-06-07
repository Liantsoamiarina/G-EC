<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Route admin
Route::get("/",[AdminController::class, "index"])->name('admin.dashboard');
Route::get("/gestion",[AdminController::class, "gestion"])->name('admin.gestion');
Route::get("/agent",[AdminController::class, "agent"])->name('admin.agent');
Route::get("/historique",[Admincontroller::class, "history"])->name('admin.history');

//Route pour les utilisateurs
Route::get("/admin/register", [UserController::class, "index"]);
Route::post("/admin/register/save" ,[UserController::class,"store"])->name('user.save');
