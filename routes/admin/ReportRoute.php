<?php

use App\Http\Controllers\report\reportController;

Route::get('admin/reports',[reportController::class,'viewAllReports']);
Route::get('admin/add-report',[reportController::class,'viewInsertReport']);