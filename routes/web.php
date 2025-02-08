<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\panel\HRManagementController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
// use \App\Http\Middleware\VerifyCsrfToken;

Route::get('/chat-{id}',[MessageController::class,'ViewChat']);

Route::get('/Channel-{id}',[MessageController::class,'ViewChannel']);

Route::post('/chat-post',[MessageController::class,'sendMessage'])->name('chat-post')->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('/employees',[HRManagementController::class,'employees']);
