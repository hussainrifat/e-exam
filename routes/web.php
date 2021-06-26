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

include "admin/studentRoute.php";
include "admin/HomeContentRoute.php";
include "admin/SubjectRoute.php";
include "admin/TopicRoute.php";
include "admin/QuestionRoute.php";
include "admin/reportRoute.php";