<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Checkout\CheckoutController;
use App\Http\Controllers\API\File\FileController;
use App\Http\Controllers\API\Product\ProductController;
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

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index']);
});


Route::group(['prefix' => 'file'], function () {
    Route::get('/', [FileController::class, 'index']);
    Route::post('/upload', [FileController::class, 'upload']);
    Route::post('/delete', [FileController::class, 'delete']);
    Route::get('/assets/download', [FileController::class, 'download'])->name('file-assets-download');
});

Route::group(['prefix' => 'checkout'], function () {
    Route::post('/', [CheckoutController::class, 'store']);
});