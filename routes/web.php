<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\BloodTestsController;
use App\Http\Controllers\DoctorTestsController;
use App\Http\Controllers\ViralTestsController;
use App\Http\Controllers\BloodWithdrawsController;
use App\Http\Controllers\DCTTestController;
use App\Http\Controllers\DerivativesController;
use App\Http\Controllers\ExchangesController;
use App\Http\Controllers\ICTTestController;
use App\Http\Controllers\ViralDiseasesController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\InvestigationsController;
use App\Http\Controllers\PolcythemiasController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Artisan;

// use App\Http\Controllers\PatientsController;
// use NunoMaduro\Collision\Adapters\Phpunit\State;

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

// Route::get('/states', function () {
//     return State::with('cities')->get();
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


//Language Translation
Route::get('clear_cache', function () {

    Artisan::call('config:cache');

    dd("Cache is cleared");
});


Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');

Route::get('chapters/download/file/{media}', [\App\Http\Controllers\ChapterController::class, 'downloadFile'])->name('chapter.downloadfile');
Route::get('chapters/delete/file/{media}/{donorentity}', [\App\Http\Controllers\ChapterController::class, 'deleteFile'])->name('chapter.deletefile');
Route::resource('chapters', \App\Http\Controllers\ChapterController::class);
Route::resource('orders', \App\Http\Controllers\OrdersController::class);
Route::resource('comments', \App\Http\Controllers\CommentController::class);
Route::post('upload-grades',[\App\Http\Controllers\StudentsController::class,'uploadGrades'])->name('upload-grades');
Route::post('upload-classes',[\App\Http\Controllers\StudentsController::class,'uploadClasses'])->name('upload-classes');

Route::put('updateStatus/{id}', [OrdersController::class, 'changeStatus'])->name('updateStatus');

Route::put('updateStatus/{id}', [\App\Http\Controllers\CommentController::class, 'changeStatus'])->name('updateStatus');

Route::get('Classes/create',function (){
   return view('Classes/create');
})->name('Classes.create');

Route::get('grades/create',function (){
    return view('grades/create');
})->name('grades.create');
