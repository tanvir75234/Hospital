<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

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
    return view('admin.dashboard.home');
})->name('home');

Route::get('dashboard/doctor',[DoctorController::class,'index'])->name('doctor');
Route::get('dashboard/doctor/add',[DoctorController::class,'add'])->name('doctor.add');
Route::post('dashboard/doctor/submit',[DoctorController::class,'insert']);

Route::get('dashboard/patient',[PatientController::class,'index'])->name('patient');
Route::get('dashboard/patient/add',[PatientController::class,'add'])->name('patient.add');
Route::post('dashboard/patient/submit',[PatientController::class,'insert'])->name('patient.add');

require __DIR__.'/auth.php';
