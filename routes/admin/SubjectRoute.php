<?php

use App\Http\Controllers\subject\subjectController;


Route::get('admin/subjects',[subjectController::class,'getAllSubjects'])->name('getAllSubjects');
// Route::get('admin/subjects',[subjectController::class,'viewAllSubjects'])->name('subjects');

// Route::post('admin/subjects',[subjectController::class,'viewAllSubjects'])->name('subjects');
Route::get('admin/add-subject',[subjectController::class,'viewInsertSubject']);
Route::post('admin/subject/insert',[subjectController::class,'subjectInsert'])->name('add-subject');
