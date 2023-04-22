<?php

use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ProjectUserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\EventController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ProjectUserController::class, 'index'])->name('index');
    Route::get('logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/home/project', [ProjectUserController::class, 'project_index'])->name('project.index');
    Route::get('/home/project/view/{slug}/{project_id}/{project_user_id}', [ProjectUserController::class, 'view'])->name('project.view');
    Route::get('/home/message/{message_to}', [MessageController::class, 'index'])->name('message');
    Route::post('/home/message/{message_to}', [MessageController::class, 'send'])->name('message.send');
    Route::get('/home/message/fetch/{message_to}', [MessageController::class, 'fetch'])->name('message.fetch');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', [UserAuthController::class, 'index'])->name('login');
    Route::post('login', [UserAuthController::class, 'login_auth'])->name('login.auth');
    Route::get('register', [UserAuthController::class, 'register'])->name('register');
    Route::post('register', [UserAuthController::class, 'register_auth'])->name('register.auth');
});


Route::prefix('admin')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', [UserController::class, 'login'])->name('admin.login');
        Route::post('login', [UserController::class, 'login_auth'])->name('admin.login.auth');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('logout', [UserController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [UserController::class, 'index'])->name('admin.dashboard');

        Route::resource('project', ProjectController::class);
        Route::resource('event', EventController::class);


    });
});
