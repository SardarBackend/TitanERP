<?php
use Filament\Facades\Filament;
use App\Http\Controllers\Messanger\MessangerController;
use App\Http\Controllers\panel\HRManagementController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
// use \App\Http\Middleware\VerifyCsrfToken;

Route::get('/chat-{id}',[MessangerController::class,'ViewChat']);

Route::get('/Channel-{id}',[MessangerController::class,'ViewChannel']);

Route::post('/chat-post',[MessangerController::class,'sendMessanger'])->name('chat-post')->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('/employees',[HRManagementController::class,'employees']);


    Filament::serving(function () {
        Route::get('/admin', function () {
            return view('filament::dashboard');
        });
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Request', [App\Http\Controllers\HomeController::class, 'Request'])->name('Request');
Route::get('/SendResume', [App\Http\Controllers\HomeController::class, 'SendResumeView'])->name('SendResumeView');
Route::post('/SendResume', [App\Http\Controllers\HomeController::class, 'SendResumePost'])->name('SendResumePost');
Route::get('/Sendcomplaint', [App\Http\Controllers\HomeController::class, 'SendcomplaintView'])->name('SendcomplaintView');
Route::post('/Sendcomplaint', [App\Http\Controllers\HomeController::class, 'SendcomplaintPost'])->name('SendcomplaintPost');

Route::get('/Attendance', [App\Http\Controllers\HomeController::class, 'Attendance'])->name('Attendance');

Route::get('/RegisterBusinesses', [App\Http\Controllers\HomeController::class, 'RegisterBusinesses'])->name('RegisterBusinesses');

Route::get('/RulesView', [App\Http\Controllers\HomeController::class, 'RulesView'])->name('RulesView');
