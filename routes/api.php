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

Route::get('all-chapters',function (){
    $chapters=\App\Models\Chapter::all();
    return response()->json(['success'=>true, 'chapters'=>$chapters],200);
});
Route::get('all-schools',function (){
    $schools=\App\Models\User::all();
    return response()->json(['success'=>true, 'schools'=>$schools],200);

});

Route::prefix('student')->group(function () {
    Route::post('register', [StudentsController::class, 'create']);
    Route::post('login', [StudentsController::class, 'login']);
});

Route::middleware(['auth:sanctum'])->prefix('student/')->group(function () {
 Route::post('comment', [StudentsController::class, 'Comment']);
 Route::get('school/comment', [StudentsController::class, 'getComment']);
 Route::post('upload/invoice', [StudentsController::class, 'Invoice']);
 Route::post('upload-notice',[\App\Http\Controllers\StudentsController::class,'uploadNotice']);



});
