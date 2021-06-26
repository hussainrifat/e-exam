<?php

namespace App\Http\Controllers\report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reportController extends Controller
{
      /**
     * @name viewAllSubjects
     * @role all Subjects view
     * @param
     * @return  view with compact array
     *
     */
    
    public function viewAllReports()
    {
        return view('admin.report.reports');
    }


    public function viewInsertReport()
    {
        return view('admin.report.add-report');

    }

}
