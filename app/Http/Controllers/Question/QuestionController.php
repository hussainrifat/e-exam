<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subject;

class QuestionController extends Controller
{
    public function viewAllQuestion(){
        return view('admin.question.questions');
    }

    public function questionInsertView()
    {
        $subjects = subject::all();
        return view('admin.question.add-question',compact('subjects'));

    }


    public function getSubject(){
        $subjects = subject::get();
        $data = '<option disabled selected> Select Subject </option>';

        foreach($subjects as $sub)
        {
            $data.='<option value='.$sub->id.'>'.$sub->subject_name.'</option>';

        }
        
        
        return $data;
    }
}
