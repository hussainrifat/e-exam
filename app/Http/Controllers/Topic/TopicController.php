<?php

namespace App\Http\Controllers\Topic;

use App\Http\Controllers\Controller;
use App\Models\subject;
use App\Models\topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


class TopicController extends Controller
{
    
    /**
     * @name viewInsertTopic
     * @role view topic insert page
     * @param
     * @return  view with compact array
     *
     */
  

    public function viewInsertTopic()
    {
        $subjects = subject::get();
        return view('admin.topic.add-topic',compact('subjects'));

    }

    

     /**
     * @name topicInsert
     * @role insert a topic record into database
     * @param Request $request
     * @return  Json response
     *
     * @throws Illuminate\Validation\ValidationException
     */

    public function topicInsert(Request $request)
    {
        $insertRules = 
        ['subject_id'=>'required',
        'topic_name'=>'required'
       ];

        $customMessages = [
       'subject_id.required' => 'Subject Name field is required.',
       'topic_name.required' => 'Topic Name field is required.'
       ];

       $validator = Validator::make( $request->all(), $insertRules, $customMessages );

       $topic = topic::create([
        'subject_id' => $request->subject_id,
        'topic_name' => $request->topic_name
        ]);
    return redirect()->route('getAllTopics')->with('success','Topic Added Successfully');


        }



        /**
         * @name getAllTopics
         * @role view all topic into datatable
         * @param Request $request
         * @return  view
         *
         */
        public function getAllTopics(Request $request)
        {
    
            if ($request->ajax()) {
                $datas = topic::with('getSubjectInfo')->get();
                $i=1;
                    foreach($datas as $data)
                    {
                        $checked = $data->active_status=='1'?'checked':'';
                        $data['sl_no'] = $i++;
                        $data['checked'] =$checked;
    
                    }
    
                return Datatables::of($datas)
                        ->addIndexColumn()
                        ->addColumn('status', function($datas){
    
                               $switch = "<label class='switch'> <input onclick='topic_active_status(".$datas->id.")' type='checkbox'".$datas->checked."  /> <span class='slider round'></span> </label>";
    
                                return $switch;
                        })

                        ->addColumn('subject_name', function ($datas) {
                            return $datas->getSubjectInfo->subject_name;
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
    
            return view('admin.topic.topics');
        }



              /**
         * @name topicActiveStatus
         * @role change topic active status
         * @param Request $request
         * @return  view
         *
         */

        public function topicActiveStatus($id){
       
            $status = topic::where('id',$id)->first()->active_status;
    
            if($status == 1)
            {
                topic::where('id',$id)->update([
                    'active_status'   => 0
                ]);
            }
    
            else
            {
                topic::where('id',$id)->update([
                    'active_status'   => 1
                ]);
            }
    
           
        }


               /**
         * @name editTopic
         * @role view topic edit page
         * @param Request $request
         * @return  view
         *
         */
            
        public function editTopic($id){

            $topics = topic::where('id',$id)->with('getSubjectInfo')->first();

            return view('admin.topic.edit-topic',compact('topics'));
        }


                /**
         * @name updateSubject
         * @role update existing topic
         * @param Request $request
         * @return  view
         *
         */

        public function updateTopic(Request $request)
        {
            $id = $request->id;

            topic::where('id',$id)->update([
                'topic_name'          =>   $request->topic_name   ,
            ]);
            return view('admin.topic.topics');

        }


            /**
         * @name deleteTopic
         * @role delete a topic
         * @param Request $request
         * @return  view
         *
         */
        public function deleteTopic($id){

            $id = topic:: find($id);
    
            $id->delete();
            return redirect()->back();
        }



}
