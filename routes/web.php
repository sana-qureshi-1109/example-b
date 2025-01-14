<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostControlle;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/instagram_signup', function () {
    return view('instagram_signup');
});

Route::get('/instagram_login', function () {
    return view('instagram_login');
});

Route::get('/layout', function () {
    return view('layouts/default');
});



// Route::get('/signup',[SignupController::class, 'Signup']);
Route::get('/addition',[SignupController::class, 'Addition']);
Route::get('/substraction',[SignupController::class, 'Substraction']);
Route::get('/multiplication',[Signupcontroller::class, 'Multiplication']);
Route::get('/division',[Signupcontroller::class, 'Division']);

Route::get('/calculator',[Signupcontroller::class,'Calculator']);
Route::post('/login-user', [LoginController::class, 'login_user']);

Route::post('/signup',[Signupcontroller::class,'Signup']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'Profile'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'Update'])->middleware('auth');

Route::get('/logout',[DashboardController::class,'logout']);




//Posts


Route::post('/create_post_backened', [PostController::class, 'CreatePost'])->middleware('auth');
Route::get('/create_post', [PostController::class, 'CreatePostScreen'])->middleware('auth');


//Admin-Panel
Route::get('/admin-dashboard',[AdminController::class,'Dashboard'])->name('admin-dashboard');
Route::get('/admin-users',[AdminController::class,'UsersPage'])->name('admin-users');
Route::get('/admin-posts',[AdminController::class,'PostsPage'])->name('admin-posts');


//manager-panel

Route::get('/layout/manager', function () {
    return view('layouts/manager');
});