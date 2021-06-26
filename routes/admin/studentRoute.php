<?php
use App\Http\Controllers\student\studentController;



Route::get('admin/students',[studentController::class,'viewAllStudents']);
Route::get('admin/add-student',[studentController::class,'studentInsertView']);