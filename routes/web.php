<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ShuffleController;

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

Route::get('/shuffle', [ShuffleController::class, 'index'])->name('shuffle.index');
Route::get('/shuffle/{id}', [ShuffleController::class, 'shuffle'])->name('shuffle.shuffle');
Route::get('/consult/{id}', [ShuffleController::class, 'consult'])->name('shuffle.consult');
Route::post('/consultTeacher/{id}', [ShuffleController::class, 'consultTeacher'])->name('shuffle.consultTeacher');
Route::get('/success/{id}', [ShuffleController::class, 'success'])->name('shuffle.success');
Route::get('/result/{id}', [ShuffleController::class, 'result'])->name('shuffle.result');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
