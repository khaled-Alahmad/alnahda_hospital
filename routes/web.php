<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDepartmentController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientRoomController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
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
Route::resource('rooms', RoomController::class);
Route::get('rooms/search', [RoomController::class, 'search'])->name('rooms.search');
Route::resource('floors', FloorController::class);
Route::get('floors/search', [FloorController::class, 'search'])->name('floors.search');
Route::resource('doctor-departments', DoctorDepartmentController::class);
Route::get('doctor-departments/search', [DoctorDepartmentController::class, 'search'])->name('doctor-departments.search');
Route::resource('doctors', DoctorController::class);
Route::get('doctors/search', [DoctorController::class, 'search'])->name('doctors.search');
Route::resource('patients', PatientController::class);
Route::get('patients/search', [PatientController::class, 'search'])->name('patients.search');
Route::resource('patient-rooms', PatientRoomController::class);
Route::get('patients/search', [PatientRoomController::class, 'search'])->name('patients.search');
Route::resource('illnesses', IllnessController::class);
Route::get('/illnesses/search', [IllnessController::class, 'search'])->name('illnesses.search');
Route::resource('previews', PreviewController::class);

Route::get('/previews/search', [PreviewController::class, 'search'])->name('previews.search');

require __DIR__ . '/auth.php';
