<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TarotController;
use App\Http\Controllers\ConsultController;

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
    return Inertia::render('Welcome');
});

Route::get('/shuffle', [TarotController::class, 'index'])->name('shuffle.index');
Route::get('/shuffle/{id}', [TarotController::class, 'shuffle'])->name('shuffle.shuffle');
Route::get('/consult/{id}', [TarotController::class, 'consult'])->name('shuffle.consult');
Route::post('/consultTeacher/{id}', [TarotController::class, 'consultTeacher'])->name('shuffle.consultTeacher');
Route::get('/success/{id}', [TarotController::class, 'success'])->name('shuffle.success');
Route::get('/result/{id}', [TarotController::class, 'result'])->name('shuffle.result');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [ConsultController::class, 'latest'])->name('dashboard');
    Route::get('/dashboard/consult', [ConsultController::class, 'index'])->name('dashboard.consult.index');
    Route::get('/dashboard/consult/{id}', [ConsultController::class, 'view'])->name('dashboard.consult.view');
    Route::post('/dashboard/consult/update/{id}', [ConsultController::class, 'update'])->name('dashboard.consult.update');
});
