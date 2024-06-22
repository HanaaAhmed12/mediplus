<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Doctors;
use App\Http\Controllers\FrontpagesController;
use App\Http\Controllers\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Errors;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    // Your routes

Route::get('/', function () {
    return view('test');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
















Route::get('/', [FrontpagesController::class, 'home'])->name('home');
Route::get('/blog', [blogController::class, 'blog'])->name('blog');
Route::get('/doctor', [Doctors::class, 'doctor'])->name('doctor');
Route::get('/service', [Service::class, 'service'])->name('service');
Route::get('/error', [Errors::class, 'error'])->name('error');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

});