<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\topic;
use Illuminate\Support\Facades\Validator;
use App\Models\question;
use Yajra\DataTables\DataTables;


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


    public function getTopic(Request $request)
    {
        $subject_id = $request->subject_id;

        file_put_contents('file2.txt',"Hello");

        $topics = topic::where('subject_id',$subject_id)->get();
        $data = '<option disabled selected>Select Topic Name</option>';
        foreach($topics as $topic)
        {
            $data.='<option value='.$topic->id.'>'.$topic->topic_name.'</option>';
        }
        return $data;
    }

    
    public function questionInsert(Request $request)
    {

        $insertRules = ['subject_name'=>'required',
                 'topic_name'=>'required',
                 'question'=>'required',
                 'option1'=>'required',
                 'option2'=>'required',
                 'option3'=>'required',
                 'option4'=>'required',
                 'correct_ans'=>'required',

            ];



        $customMessages = [
                'topic_name.required'       => 'Topic Name field is required.',
                'subject_name.required'     => 'Subject Bangla Name field is required.',
                'question.required'         => ' Question field is required.',
                'option1.required'          => ' Option field is required.',
                'option2.required'          => ' Option field is required.',
                'option3.required'          => ' Option field is required.',
                'option4.required'          => ' Option field is required.',
                'correct_ans.required' => ' Correct Answer field is required.',

            ];

            $validator = Validator::make( $request->all(), $insertRules, $customMessages );

            if($validator->fails())
            {
                return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
            }


            $question = question::create([
                'topic_id'          => $request->topic_name,
                'subject_id'        => $request->subject_name,
                'question'          => $request->question,

                'option1'           => $request->option1,
                'option2'           => $request->option2,
                'option3'           => $request->option3,
                'option4'           => $request->option4,
                'correct_ans'       => $request->correct_ans,


            ]);
            return redirect()->route('getAllQuestions')->with('success','Question Added Successfully');

    }


    public function viewQuestion(Request $request)
    {
    


        if ($request->ajax()) {
            $datas = question::with('getSubjectInfo','getTopicInfo')->where('topic_id',$request->topic_name)->get();
            $i=1;
                foreach($datas as $data)
                {
                    $checked = $data->active_status=='1'?'checked':'';
                    $data['sl_no'] = $i++;
                    $data['checked'] =$checked;

                }


            return Datatables::of($datas)
                    ->addIndexColumn()
                    // ->addColumn('status', function($datas){

                    //        $switch = "<label class='switch'> <input onclick='topic_active_status(".$datas->id.")' type='checkbox'".$datas->checked."  /> <span class='slider round'></span> </label>";

                    //         return $switch;
                    // })

                    ->addColumn('subject_name', function ($datas) {
                        return $datas->getSubjectInfo->subject_name;
                    })

                    ->addColumn('topic_name', function ($datas) {
                        return $datas->getTopicInfo->topic_name;
                    })


                    
                   ->addColumn('action', function($data){

                    $button = '';

                    $button .= ' <a href="edit-topic/'.$data->id.'" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>';


                    $button .= ' <a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="topic_delete('.$data->id.')"><i class="la la-trash-o"></i></a>';

                    return $button;
             })

                    ->rawColumns(['status','subject_name','topic_name','action'])
                    ->make(true);
        }

        return view('admin.question.view-question');



    }
}
