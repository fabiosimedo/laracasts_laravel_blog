<?php

use App\Http\Controllers\FindController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\FindCommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminFindController;
use Illuminate\Support\Facades\Route;

use Clockwork\Request\Request;
use App\Services\Newsletter;


Route::get('/', [FindController::class, 'index'])->name('home');
Route::get('/post/{post:slug}', [FindController::class, 'show']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('/post/{post:slug}/comments', [FindCommentController::class, 'store']);


// Admin routes
Route::get('admin/posts/create', [AdminFindController::class, 'create'])->middleware('admin')->name('post-admin-create');
Route::post('admin/posts', [AdminFindController::class, 'store'])->middleware('admin');
Route::get('admin/posts', [AdminFindController::class, 'index'])->middleware('admin')->name('post-admin');
Route::get('admin/dashboard', [AdminFindController::class, 'dashboard'])->middleware('admin')->name('post-admin-dashboard');
Route::get('/admin/posts/{post}', [AdminFindController::class, 'edit'])->middleware('admin')->name('post-admin');
Route::patch('/admin/posts/{post}', [AdminFindController::class, 'update'])->middleware('admin');
Route::delete('/admin/posts/{post}', [AdminFindController::class, 'destroy'])->middleware('admin');

