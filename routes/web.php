<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, AuthController, TaskController};

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::post('/task/update/{id}', [TaskController::class, 'update'])->whereNumber('id')->name('task.update');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->whereNumber('id')->name('task.edit');
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->whereNumber('id')->name('task.delete');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/sucess', [AuthController::class, 'login'])->name('login.user');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/user', [AuthController::class, 'registerUser'])->name('register.user');
