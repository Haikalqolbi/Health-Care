<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vaksinController;
use App\Http\Controllers\PatientController;

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
    return view('home');
})->name('home');

Route::get('/vaccine', [vaksinController::class, 'index']);
Route::get('/create', [vaksinController::class, 'create']);
Route::get('/show/{id}', [vaksinController::class, 'show']);
Route::get('/destroy/{id}', [vaksinController::class, 'destroy']);
Route::post('/store', [vaksinController::class, 'store']);
Route::get('/edit-vaccine/{id}', [vaksinController::class, 'edit']);
Route::post('/update/{id}', [vaksinController::class, 'update']);

Route::get('/patient', [PatientController::class, 'index']);
Route::post('/register-patient', [PatientController::class, 'store']);
Route::get('/add-patient/{id}', [PatientController::class, 'show']);
Route::get('/choose-vaccine', [vaksinController::class, 'show']);
Route::get('/edit-patient/{id}', [PatientController::class, 'edit']);
Route::patch('/update-patient/{id}', [PatientController::class, 'update']);
Route::delete('/delete-patient/{id}', [PatientController::class, 'destroy']);