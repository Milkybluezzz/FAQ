<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FAQController;

Route::get('/FAQ', [FAQController::class, 'index']);
// use App\Http\Controllers\AdminAuthController;

// Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('admin/login', [AdminAuthController::class, 'login']);
// Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Route::group(['middleware' => 'admin'], function () {
//     Route::get('/admin/home', function () {
//         return view('admin.home');
//     });
// });

// Route::get('/create-admin', [AdminAuthController::class, 'createAdmin']);

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});

Route::get('/FAQ/e-pentingFAQ', function () {
    return view('faq.e-pentingFAQ');
});

Route::get('/FAQ/pmoFAQ', function () {
    return view('faq/pmoFAQ');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';