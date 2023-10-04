<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('floors', \App\Http\Controllers\FloorController::class);
Route::get('floors/search', [\App\Http\Controllers\FloorController::class,'search'])->name('floors.search');

Route::resource('rooms', \App\Http\Controllers\RoomController::class);
Route::get('rooms/search', [\App\Http\Controllers\RoomController::class, 'search'])->name('rooms.search');

Route::resource('doctor-departments', \App\Http\Controllers\DoctorDepartmentController::class);
Route::get('doctor-departments/search', [\App\Http\Controllers\DoctorDepartmentController::class, 'search'])->name('doctor-departments.search');

Route::resource('doctors', \App\Http\Controllers\DoctorController::class);
Route::get('doctors/search', [\App\Http\Controllers\DoctorController::class, 'search'])->name('doctors.search');




require __DIR__.'/auth.php';
