<?php


use App\Http\Controllers\authController;
use App\Http\Controllers\ExcelController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [authController::class, 'login']);
Route::post('register', [authController::class, 'register']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/changepasword', [authController::class, 'changepasword']);
    Route::post('/updateProfile', [authController::class, 'updateSettings']);
    Route::post('logout', [authController::class, 'logout']);
    Route::get('/getUser', [authController::class, 'getUserProfile']);
});

// category api

Route::get('/getMessages', [ExcelController::class, 'getMessagesData']);
Route::get('/updateMessageStatus/{id}', [ExcelController::class, 'updateMessage']);
