<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instagram_signup', function () {
    return view('instagram_signup');
});

Route::get('/instagram_login', function () {
    return view('instagram_login');
});

Route::get('/signup',[SignupController::class, 'Signup']);
Route::get('/addition',[SignupController::class, 'Addition']);
Route::get('/substraction',[SignupController::class, 'Substraction']);
Route::get('/multiplication',[Signupcontroller::class, 'Multiplication']);
Route::get('/division',[Signupcontroller::class, 'Division']);

Route::get('/calculator',[Signupcontroller::class,'Calculator']);

Route::post('/signup',[Signupcontroller::class,'Signup']);