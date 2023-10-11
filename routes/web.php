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
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware(['isAdmin']);
    Route::get('users_create', [UserController::class, 'create'])->name('users.create')->middleware(['isAdmin']);
    Route::get('users_{id}_edit', [UserController::class, 'edit'])->name('users.edit')->middleware(['isAdmin']);
    Route::get('users_{id}', [UserController::class, 'show'])->name('users.show')->middleware(['isAdmin']);
    Route::post('users', [UserController::class, 'store'])->name('users.store')->middleware(['isAdmin']);
    Route::put('users_{id}', [UserController::class, 'update'])->name('users.update')->middleware(['isAdmin']);
    Route::delete('users_{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware(['isAdmin']);
    Route::get('users_search', [UserController::class, 'search'])->name('users.search')->middleware(['isAdmin']);


    Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index')->middleware(['isAdmin']);
    Route::get('rooms_create', [RoomController::class, 'create'])->name('rooms.create')->middleware(['isAdmin']);
    Route::get('rooms_{id}_edit', [RoomController::class, 'edit'])->name('rooms.edit')->middleware(['isAdmin']);
    Route::get('rooms_{id}', [RoomController::class, 'show'])->name('rooms.show')->middleware(['isAdmin']);
    Route::post('rooms', [RoomController::class, 'store'])->name('rooms.store')->middleware(['isAdmin']);
    Route::put('rooms_{id}', [RoomController::class, 'update'])->name('rooms.update')->middleware(['isAdmin']);
    Route::delete('rooms_{id}', [RoomController::class, 'destroy'])->name('rooms.destroy')->middleware(['isAdmin']);
    Route::get('rooms_search', [RoomController::class, 'search'])->name('rooms.search')->middleware(['isAdmin']);

    //Route::resource('floors', FloorController::class);
    Route::get('floors', [FloorController::class, 'index'])->name('floors.index')->middleware(['isAdmin']);
    Route::get('floors_create', [FloorController::class, 'create'])->name('floors.create')->middleware(['isAdmin']);
    Route::get('floors_edit_{id}', [FloorController::class, 'edit'])->name('floors.edit')->middleware(['isAdmin']);
    Route::get('floors_{id}', [FloorController::class, 'show'])->name('floors.show')->middleware(['isAdmin']);
    Route::post('floors', [FloorController::class, 'store'])->name('floors.store')->middleware(['isAdmin']);
    Route::put('floors_{id}', [FloorController::class, 'update'])->name('floors.update')->middleware(['isAdmin']);
    Route::delete('floors_{id}', [FloorController::class, 'destroy'])->name('floors.destroy')->middleware(['isAdmin']);
    Route::get('floors_search', [FloorController::class, 'search'])->name('floors.search')->middleware(['isAdmin']);

    Route::get('doctor-departments', [DoctorDepartmentController::class, 'index'])->name('doctor-departments.index')->middleware(['isAdmin']);
    Route::get('doctor-departments_create', [DoctorDepartmentController::class, 'create'])->name('doctor-departments.create')->middleware(['isAdmin']);
    Route::get('doctor-departments_{id}_edit', [DoctorDepartmentController::class, 'edit'])->name('doctor-departments.edit')->middleware(['isAdmin']);
    Route::get('doctor-departments_{id}', [DoctorDepartmentController::class, 'show'])->name('doctor-departments.show')->middleware(['isAdmin']);
    Route::post('doctor-departments', [DoctorDepartmentController::class, 'store'])->name('doctor-departments.store')->middleware(['isAdmin']);
    Route::put('doctor-departments_{id}', [DoctorDepartmentController::class, 'update'])->name('doctor-departments.update')->middleware(['isAdmin']);
    Route::delete('doctor-departments_{id}', [DoctorDepartmentController::class, 'destroy'])->name('doctor-departments.destroy')->middleware(['isAdmin']);
    Route::get('doctor-departments_search', [DoctorDepartmentController::class, 'search'])->name('doctor-departments.search')->middleware(['isAdmin']);

    Route::get('doctors', [DoctorController::class, 'index'])->name('doctors.index')->middleware(['CheckUserAccess']);
    Route::get('doctors_create', [DoctorController::class, 'create'])->name('doctors.create')->middleware(['isAdmin']);
    Route::get('doctors_{id}_edit', [DoctorController::class, 'edit'])->name('doctors.edit')->middleware(['isAdmin']);
    Route::get('doctors_{id}', [DoctorController::class, 'show'])->name('doctors.show')->middleware(['isAdmin']);
    Route::post('doctors', [DoctorController::class, 'store'])->name('doctors.store')->middleware(['isAdmin']);
    Route::put('doctors_{id}', [DoctorController::class, 'update'])->name('doctors.update')->middleware(['isAdmin']);
    Route::delete('doctors_{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy')->middleware(['isAdmin']);
    Route::get('doctors_search', [DoctorController::class, 'search'])->name('doctors.search')->middleware(['CheckUserAccess']);

    Route::get('patients', [PatientController::class, 'index'])->name('patients.index')->middleware(['CheckUserAccess']);
    Route::get('patients_create', [PatientController::class, 'create'])->name('patients.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('patients_{id}_edit', [PatientController::class, 'edit'])->name('patients.edit')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('patients_{id}', [PatientController::class, 'show'])->name('patients.show')->middleware(['CheckUserAccessAdminDoctor']);
    Route::post('patients', [PatientController::class, 'store'])->name('patients.store')->middleware(['CheckUserAccessAdminDoctor']);
    Route::put('patients_{id}', [PatientController::class, 'update'])->name('patients.update')->middleware(['CheckUserAccessAdminDoctor']);
    Route::delete('patients_{id}', [PatientController::class, 'destroy'])->name('patients.destroy')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('patients_search', [PatientController::class, 'search'])->name('patients.search')->middleware(['CheckUserAccess']);

    Route::get('patient-rooms', [PatientRoomController::class, 'index'])->name('patient-rooms.index')->middleware(['CheckUserAccess']);
    Route::get('patient-rooms_create', [PatientRoomController::class, 'create'])->name('patient-rooms.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('patient-rooms_{id}_edit', [PatientRoomController::class, 'edit'])->name('patient-rooms.edit')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('patient-rooms_{id}', [PatientRoomController::class, 'show'])->name('patient-rooms.show')->middleware(['CheckUserAccessAdminDoctor']);
    Route::post('patient-rooms', [PatientRoomController::class, 'store'])->name('patient-rooms.store')->middleware(['CheckUserAccessAdminDoctor']);
    Route::put('patient-rooms_{id}', [PatientRoomController::class, 'update'])->name('patient-rooms.update')->middleware(['CheckUserAccessAdminDoctor']);
    Route::delete('patient-rooms_{id}', [PatientRoomController::class, 'destroy'])->name('patient-rooms.destroy')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('patient-rooms_search', [PatientRoomController::class, 'search'])->name('patient-rooms.search')->middleware(['CheckUserAccess']);

    Route::get('illnesses', [IllnessController::class, 'index'])->name('illnesses.index')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::get('illnesses_create', [IllnessController::class, 'create'])->name('illnesses.create')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::get('illnesses_{id}_edit', [IllnessController::class, 'edit'])->name('illnesses.edit')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::get('illnesses_{id}', [IllnessController::class, 'show'])->name('illnesses.show')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::post('illnesses', [IllnessController::class, 'store'])->name('illnesses.store')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::put('illnesses_{id}', [IllnessController::class, 'update'])->name('illnesses.update')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::delete('illnesses_{id}', [IllnessController::class, 'destroy'])->name('illnesses.destroy')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::get('illnesses_search', [IllnessController::class, 'search'])->name('illnesses.search')->middleware(['CheckUserAccessAdminDoctor']);;

    Route::get('previews', [PreviewController::class, 'index'])->name('previews.index')->middleware(['CheckUserAccess']);
    Route::get('previews_create', [PreviewController::class, 'create'])->name('previews.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('previews_{id}_edit', [PreviewController::class, 'edit'])->name('previews.edit')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::get('previews_{id}', [PreviewController::class, 'show'])->name('previews.show')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::post('previews', [PreviewController::class, 'store'])->name('previews.store')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::put('previews_{id}', [PreviewController::class, 'update'])->name('previews.update')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::delete('previews_{id}', [PreviewController::class, 'destroy'])->name('previews.destroy')->middleware(['CheckUserAccessAdminDoctor']);;
    Route::get('previews_search', [PreviewController::class, 'search'])->name('previews.search')->middleware(['CheckUserAccess']);

    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->middleware(['isAdmin']);
    Route::get('categories_create', [CategoryController::class, 'create'])->name('categories.create')->middleware(['isAdmin']);
    Route::get('categories_{id}_edit', [CategoryController::class, 'edit'])->name('categories.edit')->middleware(['isAdmin']);
    Route::get('categories_{id}', [CategoryController::class, 'show'])->name('categories.show')->middleware(['isAdmin']);
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store')->middleware(['isAdmin']);
    Route::put('categories_{id}', [CategoryController::class, 'update'])->name('categories.update')->middleware(['isAdmin']);
    Route::delete('categories_{id}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware(['isAdmin']);
    Route::get('categories_search', [CategoryController::class, 'search'])->name('categories.search')->middleware(['isAdmin']);

    Route::get('brands', [BrandController::class, 'index'])->name('brands.index')->middleware(['isAdmin']);
    Route::get('brands_create', [BrandController::class, 'create'])->name('brands.create')->middleware(['isAdmin']);
    Route::get('brands_{id}_edit', [BrandController::class, 'edit'])->name('brands.edit')->middleware(['isAdmin']);
    Route::get('brands_{id}', [BrandController::class, 'show'])->name('brands.show')->middleware(['isAdmin']);
    Route::post('brands', [BrandController::class, 'store'])->name('brands.store')->middleware(['isAdmin']);
    Route::put('brands_{id}', [BrandController::class, 'update'])->name('brands.update')->middleware(['isAdmin']);
    Route::delete('brands_{id}', [BrandController::class, 'destroy'])->name('brands.destroy')->middleware(['isAdmin']);
    Route::get('brands_search', [BrandController::class, 'search'])->name('brands.search')->middleware(['isAdmin']);

    Route::get('medicines', [MedicineController::class, 'index'])->name('medicines.index')->middleware(['CheckUserAccess']);
    Route::get('medicines_create', [MedicineController::class, 'create'])->name('medicines.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('medicines_{id}_edit', [MedicineController::class, 'edit'])->name('medicines.edit')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('medicines_{id}', [MedicineController::class, 'show'])->name('medicines.show')->middleware(['CheckUserAccessAdminDoctor']);
    Route::post('medicines', [MedicineController::class, 'store'])->name('medicines.store')->middleware(['CheckUserAccessAdminDoctor']);
    Route::put('medicines_{id}', [MedicineController::class, 'update'])->name('medicines.update')->middleware(['CheckUserAccessAdminDoctor']);
    Route::delete('medicines_{id}', [MedicineController::class, 'destroy'])->name('medicines.destroy')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('medicines_search', [MedicineController::class, 'search'])->name('medicines.search')->middleware(['CheckUserAccess']);

    Route::get('preview-details', [PreviewDetailsController::class, 'index'])->name('preview-details.index')->middleware(['CheckUserAccess']);
    Route::get('preview-details_create', [PreviewDetailsController::class, 'create'])->name('preview-details.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('preview-details_{id}_edit', [PreviewDetailsController::class, 'edit'])->name('preview-details.edit')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('preview-details_{id}', [PreviewDetailsController::class, 'show'])->name('preview-details.show')->middleware(['CheckUserAccessAdminDoctor']);
    Route::post('preview-details', [PreviewDetailsController::class, 'store'])->name('preview-details.store')->middleware(['CheckUserAccessAdminDoctor']);
    Route::put('preview-details_{id}', [PreviewDetailsController::class, 'update'])->name('preview-details.update')->middleware(['CheckUserAccessAdminDoctor']);
    Route::delete('preview-details_{id}', [PreviewDetailsController::class, 'destroy'])->name('preview-details.destroy')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('preview-details_search', [PreviewDetailsController::class, 'search'])->name('preview-details.search')->middleware(['CheckUserAccess']);

    Route::get('operations', [OperationController::class, 'index'])->name('operations.index')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operations_create', [OperationController::class, 'create'])->name('operations.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operations_{id}_edit', [OperationController::class, 'edit'])->name('operations.edit')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operations_{id}', [OperationController::class, 'show'])->name('operations.show')->middleware(['CheckUserAccessAdminDoctor']);
    Route::post('operations', [OperationController::class, 'store'])->name('operations.store')->middleware(['CheckUserAccessAdminDoctor']);
    Route::put('operations_{id}', [OperationController::class, 'update'])->name('operations.update')->middleware(['CheckUserAccessAdminDoctor']);
    Route::delete('operations_{id}', [OperationController::class, 'destroy'])->name('operations.destroy')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operations_search', [OperationController::class, 'search'])->name('operations.search')->middleware(['CheckUserAccessAdminDoctor']);

    Route::get('operation-doctors', [OperationDoctorController::class, 'index'])->name('operation-doctors.index')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operation-doctors_create', [OperationDoctorController::class, 'create'])->name('operation-doctors.create')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operation-doctors_{id}_edit', [OperationDoctorController::class, 'edit'])->name('operation-doctors.edit')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operation-doctors_{id}', [OperationDoctorController::class, 'show'])->name('operation-doctors.show')->middleware(['CheckUserAccessAdminDoctor']);
    Route::post('operation-doctors', [OperationDoctorController::class, 'store'])->name('operation-doctors.store')->middleware(['CheckUserAccessAdminDoctor']);
    Route::put('operation-doctors_{id}', [OperationDoctorController::class, 'update'])->name('operation-doctors.update')->middleware(['CheckUserAccessAdminDoctor']);
    Route::delete('operation-doctors_{id}', [OperationDoctorController::class, 'destroy'])->name('operation-doctors.destroy')->middleware(['CheckUserAccessAdminDoctor']);
    Route::get('operation-doctors_search', [OperationDoctorController::class, 'search'])->name('operation-doctors.search')->middleware(['CheckUserAccessAdminDoctor']);

    Route::get('patient_report', [ReportsController::class, 'patientReport'])->name('patient.report')->middleware('isAdmin');
    Route::post('patient_reports', [ReportsController::class, 'patientReports'])->name('patient.reports')->middleware('isAdmin');
    Route::get('doctor_report', [ReportsController::class, 'doctorReport'])->name('doctor.report')->middleware('isAdmin');
    Route::post('doctor_reports', [ReportsController::class, 'doctorReports'])->name('doctor.reports')->middleware('isAdmin');
});

require __DIR__ . '/auth.php';


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
