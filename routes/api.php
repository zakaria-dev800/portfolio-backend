<?php

use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LinkController;


Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/educations', [EducationController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/links', [LinkController::class, 'index']);