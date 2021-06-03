<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/grade/store', [GradeController::class, 'store'])->middleware(['auth'])->name('create_grade');

Route::get('/grade/remove/{id}', [GradeController::class, 'destroy'])->middleware(['auth'])->name('remove_grade');

Route::post('/student/store', [StudentController::class, 'store'])->middleware(['auth'])->name('register_student');

Route::get('/student/remove/{id}', [StudentController::class, 'destroy'])->middleware(['auth'])->name('remove_student');

require __DIR__.'/auth.php';
