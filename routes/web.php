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

Route::post('/task/{id}', [TaskController::class, 'show'])->name('task.show');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
