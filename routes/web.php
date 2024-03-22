<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/loginForm', [UserController::class, 'loginForm'])->name('loginform');
Route::post('/register', [UserController::class, 'addMember'])->name('register');
Route::post('/addUser', [UserController::class, 'addUser'])->name('addUser');
Route::post('/login', [UserController::class, 'authenticate'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/registerForm', [UserController::class, 'registerForm'])->name('registerForm');
Route::get('/addUserForm', [UserController::class, 'addUserForm'])->name('addUserForm');

Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
