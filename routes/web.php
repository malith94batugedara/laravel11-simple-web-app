<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-student',[StudentController::class,'create'])->name('student.create');

Route::get('/all-students',[StudentController::class,'index'])->name('student.index');

Route::post('/add-student',[StudentController::class,'store'])->name('student.store');

Route::get('/edit-student/{student_id}',[StudentController::class,'edit'])->name('student.edit');

Route::post('/update-student/{student_id}',[StudentController::class,'update'])->name('student.update');

Route::get('/delete-student/{student_id}',[StudentController::class,'destroy'])->name('student.delete');
