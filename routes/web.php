<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\WebController;
use App\Http\Middleware\AdminMiddleware;
use PHPUnit\Framework\Attributes\Group;

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/admin/dashboard/test', [AdminAuthController::class, 'dashboard']);
});

Route::get('/create-admin', [AdminAuthController::class, 'createAdmin']);




Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['username' => 'radithiaannafi']);
});

Route::get('/FAQ/e-pentingFAQ', function () {
    return view('faqSection.e-pentingFAQ');
});




Route::controller(WebController::class)->group(function () {
    Route::get('/','homepage');    
    Route::get('/FAQ','search')->name('search'); 
    Route::get('/FAQ/{id}', 'faq');
    
});


Route::controller(AdminAuthController::class)->group(function () {

    Route::get('/admin/dashboard', 'dashboard');
    Route::get('/admin/content', 'addContent');
    Route::post('/admin/content', 'createContent');
    Route::get('/admin/content/edit/{id}', 'editContent');
    Route::patch('/admin/content/{id}', 'updateContent');
    Route::post('/admin/content/delete/{id}', 'deleteContent');

    Route::get('/admin/FAQ/all/{id}', 'faq');

    Route::get('/admin/FAQ/create/{id}', 'createFaq');
    Route::post('/admin/FAQ/store/{id}', 'storeFaq');
    Route::get('/admin/FAQ/edit/{id}', 'editFaq');
    Route::patch('/admin/FAQ/update/{id}', 'updateFaq');
    Route::post('/admin/FAQ/delete/{id}', 'deleteFaq');

    Route::get('/admin/QnA/create/{id}', 'createQna');
    Route::post('/admin/QnA/store/{id}', 'storeQna');
    Route::get('/admin/QnA/edit/{id}', 'editQna');
    Route::patch('/admin/QnA/update/{id}', 'updateQna');
    Route::post('/admin/QnA/delete/{id}', 'deleteQna');

});