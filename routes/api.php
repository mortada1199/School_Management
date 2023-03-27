<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('student')->group(function () {
    Route::post('register', [StudentsController::class, 'create']);
    Route::post('login', [StudentsController::class, 'login']);
});

Route::middleware(['auth:sanctum'])->prefix('student/')->group(function () {
 Route::post('comment', [StudentsController::class, 'Comment']);
 Route::post('school/comment', [StudentsController::class, 'getComment']);
 Route::post('upload/invoice', [StudentsController::class, 'Invoice']);


});
