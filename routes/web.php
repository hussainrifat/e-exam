<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'admin.dashboard');

// Student Route

// include "admin/studentRoute.php";
// include "admin/HomeContentRoute.php";
// include "admin/SubjectRoute.php";
// include "admin/TopicRoute.php";
// include "admin/QuestionRoute.php";
// include "admin/reportRoute.php";


Route::get('admin/subjects',[subjectController::class,'getAllSubjects'])->name('getAllSubjects');
// Route::get('admin/subjects',[subjectController::class,'viewAllSubjects'])->name('subjects');

// Route::post('admin/subjects',[subjectController::class,'viewAllSubjects'])->name('subjects');
Route::get('admin/add-subject',[subjectController::class,'viewInsertSubject']);
Route::post('admin/subject/insert',[subjectController::class,'subjectInsert'])->name('add-subject');

Route::get('admin/delete-subject/{id}',[subjectController::class,'deleteSubject']);
Route::post('admin/subject/',[subjectController::class,'updateSubject'])->name('update-subject');
Route::get('admin/edit-subject/{id}',[subjectController::class,'editSubject']);



Route::get('admin/students',[studentController::class,'viewAllStudents']);
Route::get('admin/add-student',[studentController::class,'studentInsertView']);

Route::get('admin/reports',[reportController::class,'viewAllReports']);
Route::get('admin/add-report',[reportController::class,'viewInsertReport']);

Route::get('admin/questions',[QuestionController::class,'viewAllQuestion']);
Route::get('admin/add-student',[QuestionController::class,'studentInsertView']);

Route::view('admin/home-content', 'admin.home-content.home');