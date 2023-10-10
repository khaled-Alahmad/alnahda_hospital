<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorDepartmentController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\OperationDoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientRoomController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\PreviewDetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RoomController;
use App\Models\Doctor;
use App\Models\Illness;
use App\Models\Patient;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//Route::get('/aa', function () {
//    $illnesses = Illness::all();
//    $doctors = Doctor::all();
//    $patients = Patient::all();
//
//    return view('previews.create',compact( 'illnesses', 'doctors', 'patients'));
//});
Route::resource('users', UserController::class);
Route::get('users/search', [UserController::class, 'search'])->name('users.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('dashboard')->group(function (){
    Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('rooms/{id}', [RoomController::class, 'show'])->name('rooms.show');
    Route::get('rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::get('rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::put('rooms/{id}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::get('rooms/search', [RoomController::class, 'search'])->name('rooms.search');

    Route::get('floors', [FloorController::class, 'index'])->name('floors.index');
    Route::get('floors/{id}', [FloorController::class, 'show'])->name('floors.show');
    Route::get('floors/create', [FloorController::class, 'create'])->name('floors.create');
    Route::get('floors/{id}/edit', [FloorController::class, 'edit'])->name('floors.edit');
    Route::post('floors', [FloorController::class, 'store'])->name('floors.store');
    Route::put('floors/{id}', [FloorController::class, 'update'])->name('floors.update');
    Route::delete('floors/{id}', [FloorController::class, 'destroy'])->name('floors.destroy');
    Route::get('floors/search', [FloorController::class, 'search'])->name('floors.search');

    Route::get('doctor-departments', [DoctorDepartmentController::class, 'index'])->name('doctor-departments.index');
    Route::get('doctor-departments/{id}', [DoctorDepartmentController::class, 'show'])->name('doctor-departments.show');
    Route::get('doctor-departments/create', [DoctorDepartmentController::class, 'create'])->name('doctor-departments.create');
    Route::get('doctor-departments/{id}/edit', [DoctorDepartmentController::class, 'edit'])->name('doctor-departments.edit');
    Route::post('doctor-departments', [DoctorDepartmentController::class, 'store'])->name('doctor-departments.store');
    Route::put('doctor-departments/{id}', [DoctorDepartmentController::class, 'update'])->name('doctor-departments.update');
    Route::delete('doctor-departments/{id}', [DoctorDepartmentController::class, 'destroy'])->name('doctor-departments.destroy');
    Route::get('doctor-departments/search', [DoctorDepartmentController::class, 'search'])->name('doctor-departments.search');

    Route::get('doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('doctors/{id}', [DoctorController::class, 'show'])->name('doctors.show');
    Route::get('doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::get('doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::post('doctors', [DoctorController::class, 'store'])->name('doctors.store');
    Route::put('doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
    Route::get('doctors/search', [DoctorController::class, 'search'])->name('doctors.search');

    Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('patients/{id}', [PatientController::class, 'show'])->name('patients.show');
    Route::get('patients/create', [PatientController::class, 'create'])->name('patients.create');
    Route::get('patients/{id}/edit', [PatientController::class, 'edit'])->name('patients.edit');
    Route::post('patients', [PatientController::class, 'store'])->name('patients.store');
    Route::put('patients/{id}', [PatientController::class, 'update'])->name('patients.update');
    Route::delete('patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
    Route::get('patients/search', [PatientController::class, 'search'])->name('patients.search');

    Route::get('patient-rooms', [PatientRoomController::class, 'index'])->name('patient-rooms.index');
    Route::get('patient-rooms/{id}', [PatientRoomController::class, 'show'])->name('patient-rooms.show');
    Route::get('patient-rooms/create', [PatientRoomController::class, 'create'])->name('patient-rooms.create');
    Route::get('patient-rooms/{id}/edit', [PatientRoomController::class, 'edit'])->name('patient-rooms.edit');
    Route::post('patient-rooms', [PatientRoomController::class, 'store'])->name('patient-rooms.store');
    Route::put('patient-rooms/{id}', [PatientRoomController::class, 'update'])->name('patient-rooms.update');
    Route::delete('patient-rooms/{id}', [PatientRoomController::class, 'destroy'])->name('patient-rooms.destroy');
    Route::get('patient-rooms/search', [PatientRoomController::class, 'search'])->name('patient-rooms.search');

    Route::get('illnesses', [IllnessController::class, 'index'])->name('illnesses.index');
    Route::get('illnesses/{id}', [IllnessController::class, 'show'])->name('illnesses.show');
    Route::get('illnesses/create', [IllnessController::class, 'create'])->name('illnesses.create');
    Route::get('illnesses/{id}/edit', [IllnessController::class, 'edit'])->name('illnesses.edit');
    Route::post('illnesses', [IllnessController::class, 'store'])->name('illnesses.store');
    Route::put('illnesses/{id}', [IllnessController::class, 'update'])->name('illnesses.update');
    Route::delete('illnesses/{id}', [IllnessController::class, 'destroy'])->name('illnesses.destroy');
    Route::get('illnesses/search', [IllnessController::class, 'search'])->name('illnesses.search');
    Route::resource('previews',PreviewController::class);
//    Route::get('previews', [PreviewController::class, 'index'])->name('previews.index');
//    Route::get('previews/{id}', [PreviewController::class, 'show'])->name('previews.show');
//    Route::get('previews/create', [PreviewController::class, 'create'])->name('previews.create');
//    Route::get('previews/{id}/edit', [PreviewController::class, 'edit'])->name('previews.edit');
//    Route::post('previews', [PreviewController::class, 'store'])->name('previews.store');
//    Route::put('previews/{id}', [PreviewController::class, 'update'])->name('previews.update');
//    Route::delete('previews/{id}', [PreviewController::class, 'destroy'])->name('previews.destroy');
    Route::get('previews/search', [PreviewController::class, 'search'])->name('previews.search');

    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('categories/search', [CategoryController::class, 'search'])->name('categories.search');

    Route::get('brands', [BrandController::class, 'index'])->name('brands.index');
    Route::get('brands/{id}', [BrandController::class, 'show'])->name('brands.show');
    Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create');
    Route::get('brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
    Route::post('brands', [BrandController::class, 'store'])->name('brands.store');
    Route::put('brands/{id}', [BrandController::class, 'update'])->name('brands.update');
    Route::delete('brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
    Route::get('brands/search', [BrandController::class, 'search'])->name('brands.search');

    Route::get('medicines', [MedicineController::class, 'index'])->name('medicines.index');
    Route::get('medicines/{id}', [MedicineController::class, 'show'])->name('medicines.show');
    Route::get('medicines/create', [MedicineController::class, 'create'])->name('medicines.create');
    Route::get('medicines/{id}/edit', [MedicineController::class, 'edit'])->name('medicines.edit');
    Route::post('medicines', [MedicineController::class, 'store'])->name('medicines.store');
    Route::put('medicines/{id}', [MedicineController::class, 'update'])->name('medicines.update');
    Route::delete('medicines/{id}', [MedicineController::class, 'destroy'])->name('medicines.destroy');
    Route::get('medicines/search', [MedicineController::class, 'search'])->name('medicines.search');

    Route::get('preview-details', [PreviewDetailsController::class, 'index'])->name('preview-details.index');
    Route::get('preview-details/{id}', [PreviewDetailsController::class, 'show'])->name('preview-details.show');
    Route::get('preview-details/create', [PreviewDetailsController::class, 'create'])->name('preview-details.create');
    Route::get('preview-details/{id}/edit', [PreviewDetailsController::class, 'edit'])->name('preview-details.edit');
    Route::post('preview-details', [PreviewDetailsController::class, 'store'])->name('preview-details.store');
    Route::put('preview-details/{id}', [PreviewDetailsController::class, 'update'])->name('preview-details.update');
    Route::delete('preview-details/{id}', [PreviewDetailsController::class, 'destroy'])->name('preview-details.destroy');
    Route::get('preview-details/search', [PreviewDetailsController::class, 'search'])->name('preview-details.search');

    Route::get('operations', [OperationController::class, 'index'])->name('operations.index');
    Route::get('operations/{id}', [OperationController::class, 'show'])->name('operations.show');
    Route::get('operations/create', [OperationController::class, 'create'])->name('operations.create');
    Route::get('operations/{id}/edit', [OperationController::class, 'edit'])->name('operations.edit');
    Route::post('operations', [OperationController::class, 'store'])->name('operations.store');
    Route::put('operations/{id}', [OperationController::class, 'update'])->name('operations.update');
    Route::delete('operations/{id}', [OperationController::class, 'destroy'])->name('operations.destroy');
    Route::get('operations/search', [OperationController::class, 'search'])->name('operations.search');

    Route::get('operation-doctors', [OperationDoctorController::class, 'index'])->name('operation-doctors.index');
    Route::get('operation-doctors/{id}', [OperationDoctorController::class, 'show'])->name('operation-doctors.show');
    Route::get('operation-doctors/create', [OperationDoctorController::class, 'create'])->name('operation-doctors.create');
    Route::get('operation-doctors/{id}/edit', [OperationDoctorController::class, 'edit'])->name('operation-doctors.edit');
    Route::post('operation-doctors', [OperationDoctorController::class, 'store'])->name('operation-doctors.store');
    Route::put('operation-doctors/{id}', [OperationDoctorController::class, 'update'])->name('operation-doctors.update');
    Route::delete('operation-doctors/{id}', [OperationDoctorController::class, 'destroy'])->name('operation-doctors.destroy');
    Route::get('operation-doctors/search', [OperationDoctorController::class, 'search'])->name('operation-doctors.search');

    Route::get('/patient/report', [ReportsController::class, 'patientReport'])->name('patient.report');
    Route::post('/patient/reports', [ReportsController::class, 'patientReports'])->name('patient.reports');
});

require __DIR__ . '/auth.php';


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
