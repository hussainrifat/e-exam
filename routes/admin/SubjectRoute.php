<?php

use App\Http\Controllers\subject\subjectController;


Route::get('admin/subjects',[subjectController::class,'getAllSubjects'])->name('getAllSubjects');
// Route::get('admin/subjects',[subjectController::class,'viewAllSubjects'])->name('subjects');

// Route::post('admin/subjects',[subjectController::class,'viewAllSubjects'])->name('subjects');
Route::get('admin/add-subject',[subjectController::class,'viewInsertSubject']);
Route::post('admin/subject/insert',[subjectController::class,'subjectInsert'])->name('add-subject');

Route::get('admin/delete-subject/{id}',[subjectController::class,'deleteSubject']);
Route::post('admin/subject/',[subjectController::class,'updateSubject'])->name('update-subject');
Route::get('admin/edit-subject/{id}',[subjectController::class,'editSubject']);

