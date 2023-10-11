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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users_create', [UserController::class, 'create'])->name('users.create');
    Route::get('users_{id}_edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('users_{id}', [UserController::class, 'show'])->name('users.show');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::put('users_{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users_{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('users_search', [UserController::class, 'search'])->name('users.search');


    Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('rooms_create', [RoomController::class, 'create'])->name('rooms.create');
    Route::get('rooms_{id}_edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::get('rooms_{id}', [RoomController::class, 'show'])->name('rooms.show');
    Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::put('rooms_{id}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('rooms_{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::get('rooms_search', [RoomController::class, 'search'])->name('rooms.search');

    //Route::resource('floors', FloorController::class);
    Route::get('floors', [FloorController::class, 'index'])->name('floors.index');
    Route::get('floors_create', [FloorController::class, 'create'])->name('floors.create');
    Route::get('floors_edit_{id}', [FloorController::class, 'edit'])->name('floors.edit');
    Route::get('floors_{id}', [FloorController::class, 'show'])->name('floors.show');
    Route::post('floors', [FloorController::class, 'store'])->name('floors.store');
    Route::put('floors_{id}', [FloorController::class, 'update'])->name('floors.update');
    Route::delete('floors_{id}', [FloorController::class, 'destroy'])->name('floors.destroy');
    Route::get('floors_search', [FloorController::class, 'search'])->name('floors.search');

    Route::get('doctor-departments', [DoctorDepartmentController::class, 'index'])->name('doctor-departments.index');
    Route::get('doctor-departments_create', [DoctorDepartmentController::class, 'create'])->name('doctor-departments.create');
    Route::get('doctor-departments_{id}_edit', [DoctorDepartmentController::class, 'edit'])->name('doctor-departments.edit');
    Route::get('doctor-departments_{id}', [DoctorDepartmentController::class, 'show'])->name('doctor-departments.show');
    Route::post('doctor-departments', [DoctorDepartmentController::class, 'store'])->name('doctor-departments.store');
    Route::put('doctor-departments_{id}', [DoctorDepartmentController::class, 'update'])->name('doctor-departments.update');
    Route::delete('doctor-departments_{id}', [DoctorDepartmentController::class, 'destroy'])->name('doctor-departments.destroy');
    Route::get('doctor-departments_search', [DoctorDepartmentController::class, 'search'])->name('doctor-departments.search');

    Route::get('doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('doctors_create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::get('doctors_{id}_edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::get('doctors_{id}', [DoctorController::class, 'show'])->name('doctors.show');
    Route::post('doctors', [DoctorController::class, 'store'])->name('doctors.store');
    Route::put('doctors_{id}', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('doctors_{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
    Route::get('doctors_search', [DoctorController::class, 'search'])->name('doctors.search');

    Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('patients_create', [PatientController::class, 'create'])->name('patients.create');
    Route::get('patients_{id}_edit', [PatientController::class, 'edit'])->name('patients.edit');
    Route::get('patients_{id}', [PatientController::class, 'show'])->name('patients.show');
    Route::post('patients', [PatientController::class, 'store'])->name('patients.store');
    Route::put('patients_{id}', [PatientController::class, 'update'])->name('patients.update');
    Route::delete('patients_{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
    Route::get('patients_search', [PatientController::class, 'search'])->name('patients.search');

    Route::get('patient-rooms', [PatientRoomController::class, 'index'])->name('patient-rooms.index');
    Route::get('patient-rooms_create', [PatientRoomController::class, 'create'])->name('patient-rooms.create');
    Route::get('patient-rooms_{id}_edit', [PatientRoomController::class, 'edit'])->name('patient-rooms.edit');
    Route::get('patient-rooms_{id}', [PatientRoomController::class, 'show'])->name('patient-rooms.show');
    Route::post('patient-rooms', [PatientRoomController::class, 'store'])->name('patient-rooms.store');
    Route::put('patient-rooms_{id}', [PatientRoomController::class, 'update'])->name('patient-rooms.update');
    Route::delete('patient-rooms_{id}', [PatientRoomController::class, 'destroy'])->name('patient-rooms.destroy');
    Route::get('patient-rooms_search', [PatientRoomController::class, 'search'])->name('patient-rooms.search');

    Route::get('illnesses', [IllnessController::class, 'index'])->name('illnesses.index');
    Route::get('illnesses_create', [IllnessController::class, 'create'])->name('illnesses.create');
    Route::get('illnesses_{id}_edit', [IllnessController::class, 'edit'])->name('illnesses.edit');
    Route::get('illnesses_{id}', [IllnessController::class, 'show'])->name('illnesses.show');
    Route::post('illnesses', [IllnessController::class, 'store'])->name('illnesses.store');
    Route::put('illnesses_{id}', [IllnessController::class, 'update'])->name('illnesses.update');
    Route::delete('illnesses_{id}', [IllnessController::class, 'destroy'])->name('illnesses.destroy');
    Route::get('illnesses_search', [IllnessController::class, 'search'])->name('illnesses.search');

    Route::get('previews', [PreviewController::class, 'index'])->name('previews.index');
    Route::get('previews_create', [PreviewController::class, 'create'])->name('previews.create');
    Route::get('previews_{id}_edit', [PreviewController::class, 'edit'])->name('previews.edit');
    Route::get('previews_{id}', [PreviewController::class, 'show'])->name('previews.show');
    Route::post('previews', [PreviewController::class, 'store'])->name('previews.store');
    Route::put('previews_{id}', [PreviewController::class, 'update'])->name('previews.update');
    Route::delete('previews_{id}', [PreviewController::class, 'destroy'])->name('previews.destroy');
    Route::get('previews_search', [PreviewController::class, 'search'])->name('previews.search');

    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories_create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('categories_{id}_edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::get('categories_{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('categories_{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories_{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('categories_search', [CategoryController::class, 'search'])->name('categories.search');

    Route::get('brands', [BrandController::class, 'index'])->name('brands.index');
    Route::get('brands_create', [BrandController::class, 'create'])->name('brands.create');
    Route::get('brands_{id}_edit', [BrandController::class, 'edit'])->name('brands.edit');
    Route::get('brands_{id}', [BrandController::class, 'show'])->name('brands.show');
    Route::post('brands', [BrandController::class, 'store'])->name('brands.store');
    Route::put('brands_{id}', [BrandController::class, 'update'])->name('brands.update');
    Route::delete('brands_{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
    Route::get('brands_search', [BrandController::class, 'search'])->name('brands.search');

    Route::get('medicines', [MedicineController::class, 'index'])->name('medicines.index');
    Route::get('medicines_create', [MedicineController::class, 'create'])->name('medicines.create');
    Route::get('medicines_{id}_edit', [MedicineController::class, 'edit'])->name('medicines.edit');
    Route::get('medicines_{id}', [MedicineController::class, 'show'])->name('medicines.show');
    Route::post('medicines', [MedicineController::class, 'store'])->name('medicines.store');
    Route::put('medicines_{id}', [MedicineController::class, 'update'])->name('medicines.update');
    Route::delete('medicines_{id}', [MedicineController::class, 'destroy'])->name('medicines.destroy');
    Route::get('medicines_search', [MedicineController::class, 'search'])->name('medicines.search');

    Route::get('preview-details', [PreviewDetailsController::class, 'index'])->name('preview-details.index');
    Route::get('preview-details_create', [PreviewDetailsController::class, 'create'])->name('preview-details.create');
    Route::get('preview-details_{id}_edit', [PreviewDetailsController::class, 'edit'])->name('preview-details.edit');
    Route::get('preview-details_{id}', [PreviewDetailsController::class, 'show'])->name('preview-details.show');
    Route::post('preview-details', [PreviewDetailsController::class, 'store'])->name('preview-details.store');
    Route::put('preview-details_{id}', [PreviewDetailsController::class, 'update'])->name('preview-details.update');
    Route::delete('preview-details_{id}', [PreviewDetailsController::class, 'destroy'])->name('preview-details.destroy');
    Route::get('preview-details_search', [PreviewDetailsController::class, 'search'])->name('preview-details.search');

    Route::get('operations', [OperationController::class, 'index'])->name('operations.index');
    Route::get('operations_create', [OperationController::class, 'create'])->name('operations.create');
    Route::get('operations_{id}_edit', [OperationController::class, 'edit'])->name('operations.edit');
    Route::get('operations_{id}', [OperationController::class, 'show'])->name('operations.show');
    Route::post('operations', [OperationController::class, 'store'])->name('operations.store');
    Route::put('operations_{id}', [OperationController::class, 'update'])->name('operations.update');
    Route::delete('operations_{id}', [OperationController::class, 'destroy'])->name('operations.destroy');
    Route::get('operations_search', [OperationController::class, 'search'])->name('operations.search');

    Route::get('operation-doctors', [OperationDoctorController::class, 'index'])->name('operation-doctors.index');
    Route::get('operation-doctors_create', [OperationDoctorController::class, 'create'])->name('operation-doctors.create');
    Route::get('operation-doctors_{id}_edit', [OperationDoctorController::class, 'edit'])->name('operation-doctors.edit');
    Route::get('operation-doctors_{id}', [OperationDoctorController::class, 'show'])->name('operation-doctors.show');
    Route::post('operation-doctors', [OperationDoctorController::class, 'store'])->name('operation-doctors.store');
    Route::put('operation-doctors_{id}', [OperationDoctorController::class, 'update'])->name('operation-doctors.update');
    Route::delete('operation-doctors_{id}', [OperationDoctorController::class, 'destroy'])->name('operation-doctors.destroy');
    Route::get('operation-doctors_search', [OperationDoctorController::class, 'search'])->name('operation-doctors.search');

    Route::get('patient_report', [ReportsController::class, 'patientReport'])->name('patient.report');
    Route::post('patient_reports', [ReportsController::class, 'patientReports'])->name('patient.reports');
});

require __DIR__ . '/auth.php';


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
