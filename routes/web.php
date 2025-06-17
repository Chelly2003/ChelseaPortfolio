<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::post('/send-message', [EmailController::class, 'send'])->name('contact.send');



Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('about',[HomeController::class,'about'])->name('about');

Route::get('skills',[HomeController::class,'skills'])->name('skills');

Route::get('education',[HomeController::class,'education'])->name('education');

Route::get('experience',[HomeController::class,'experience'])->name('experience');



Route::get('contact',[HomeController::class,'contact'])->name('contact');




