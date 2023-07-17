<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::resource('about', AboutController::class);
Route::resource('job', JobController::class);

