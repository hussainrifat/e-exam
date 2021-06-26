<?php

use App\Http\Controllers\Question\QuestionController;

Route::get('admin/questions',[QuestionController::class,'viewAllQuestion']);
Route::get('admin/add-student',[QuestionController::class,'studentInsertView']);