<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/posts', [PostController::class, 'list'])->name('admin.posts.list');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/posts/{post}', [PostController::class, 'view'])->name('user.posts.view');
    Route::get('/user/posts/create', [PostController::class, 'staticForm'])->name('user.posts.create');
});

// Public Pages
Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1', function () {
    return view('pages.page1');
})->name('page1');

Route::get('/page2', function () {
    return view('pages.page2');
})->name('page2');

Route::get('/page3', function () {
    return view('pages.page3');
})->name('page3');

Route::get('/page4', function () {
    return view('pages.page4');
})->name('page4');

Route::get('/page5', function () {
    return view('pages.page5');
})->name('page5');


// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Ensure this view exists
    })->name('dashboard');

    Route::get('/page6', [PageController::class, 'page6'])->name('page6');
    Route::get('/page7/{id}', [PageController::class, 'page7'])->name('page7');


});


// Route to list all users
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
});

