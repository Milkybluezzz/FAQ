<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/home', function () {
        return view('admin.home');
    });
});

Route::get('/create-admin', [AdminAuthController::class, 'createAdmin']);


Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/home', function () {
    return view('home', ['nama' => 'Radithia']);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['username' => 'radithiaannafi']);
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/FAQ/e-pentingFAQ', function () {
    return view('faq.e-pentingFAQ');
});


