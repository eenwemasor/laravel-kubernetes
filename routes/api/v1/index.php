<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// route modules
require __DIR__ . '/../admin.php';

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login/google', [AuthController::class, 'loginWithGoogle']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:api'], function () {
    Route::get('/me', [UserController::class, 'me']);
});
