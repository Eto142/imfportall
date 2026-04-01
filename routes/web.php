<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/send-mail', function () {
    return view('home.send_mail');
});


Route::get('/sent-emails', [SendEmailController::class, 'sentEmails'])->name('sent-emails');
Route::get('/send-email', [SendEmailController::class, 'index'])->name('send.email');
Route::post('/send-email', [SendEmailController::class, 'send'])->name('send.email.post');

