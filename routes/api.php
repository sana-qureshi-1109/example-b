<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignupController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/welcome', function () {
    return response()->json([
        "status" =>"success",
        "message" =>"Hii its Welcome Page",
        "data" => [
            "username" => "Sana Qureshi",
            "email" => "sana@gmail.com"
        ]
        ], 200);
});

Route::get('/users',[AdminController::class,'UsersListAPI']);
Route::get('/posts',[AdminController::class,'PostsAPI']);

Route::get('/signup',[SignupController ::class,'SignupAPI']);

