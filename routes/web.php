<?php


use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

// language route
Route::get('/lang', [userController::class, 'language_change']);
// Authentication
Route::post('login', [authController::class, 'login']);
Route::match(['get',  'post'], 'weblogout', [authController::class, 'weblogout']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/notifications', function () {
    return view('notification');
});


Route::middleware('custom')->group(function () {
    Route::get('/setting', [authController::class, 'settingdata']);
    Route::post('updateSettings', [authController::class, 'updateSet']);
    Route::get('/', [userController::class, 'dashboard']);
    Route::get('help', function () {
        return view('help');
    });






    // customers CRUD
    Route::get('/customers', [userController::class,  'customers']);
    Route::post('/addCustomer', [userController::class,  'addCustomer']);
    Route::get('/delCustomer/{user_id}', [userController::class,  'delCustomer']);
    Route::get('/CustomerUpdateData/{user_id}', [userController::class,  'CustomerUpdateData']);
    Route::post('/CustomerUpdate/{user_id}', [userController::class,  'CustomerUpdate']);


    Route::controller(ExcelController::class)->group(function () {
        Route::post('addData', 'insert')->name('insert');
        Route::post('importExcel', 'importExcel')->name('importExcel');
        Route::get('excel-list', 'getData')->name('getData');
        Route::get('deleteData/{id}', 'deleteData')->name('deleteData');
        Route::get('getData/{id}', 'getForUpdate')->name('getForUpdate');
        Route::post('updateData/{id}', 'update');
    });
});
