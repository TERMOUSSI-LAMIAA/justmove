<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\SubscriptionController;

use App\Http\Controllers\memberDashboard ;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserSubscriptionController;

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
Route::put('admin/updateUser/{id}', [UserController::class, 'updateUser'])->name('updateUser');
Route::delete('admin/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/usersList', [UserController::class, 'userList'])->name('usersList');
Route::get('/membersList', [UserController::class, 'membersList'])->name('membersList');
Route::resource('category', CategoryController::class);
Route::resource('sport', SportController::class);
Route::resource('subscription', SubscriptionController::class);
Route::resource('session',SessionController::class);
Route::get('/admin/editUserForm/{id}', [UserController::class, 'editUserForm'])->name('editUserForm');
Route::get('/admin/editmemberForm', [UserController::class, 'editmemberForm'])->name('editmemberForm');
Route::delete('/admin/deletemember', [UserController::class, 'deletemember'])->name('deletemember');
Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');
Route::get('/user/subscribeMemberForm/{user_id}', [UserSubscriptionController::class, 'subscribeMemberForm'])->name('subscribeMemberForm');
Route::post('/user/subscribe', [UserSubscriptionController::class, 'subscribe'])->name('subscribe');
Route::get('/user/subscriptionsList', [UserController::class, 'subscriptionsList'])->name('subscriptionsList');
Route::get('/member/displaySports', [memberDashboard::class, 'displayCatgs'])->name('displaySports');
Route::get('/category/{category}/sports', [memberDashboard::class, 'getCategorySports']);
Route::get('/sport/{sport}/sessions', [memberDashboard::class, 'getSportSessions']);

