<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/student-manage',[StudentController::class, 'manage'])->name('student.manage');
Route::get('/student-details/{id}',[StudentController::class, 'details'])->name('student.details');
Route::get('/department-manage', [DepartmentController::class,'index'])->name('department.manage');
Route::get('/department-student/{id}',[DepartmentController::class, 'departmentStudent'])->name('department.student');
