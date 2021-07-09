<?php

namespace App\Http\Controllers\subject;

use App\Http\Controllers\Controller;
use App\Models\subject;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Database\Eloquent\SoftDeletes;


use DB;

class subjectController extends Controller
{

     /**
     * @name viewAllSubjects
     * @role all Subjects view
     * @param
     * @return  view with compact array
     *
     */

    // public function viewAllSubjects()
    // {
    //     return view('admin.subject.subjects');
    // }



    public function viewInsertSubject()
    {
        return view('admin.subject.add-subject');

    }



    public function subjectInsert(Request $request)
    {
        $insertRules = ['subject_name'=>'required',
                 'subject_name_bangla'=>'required',
                 'subject_image'=>'required',
            ];

        $customMessages = [
                'subject_name.required' => 'Subject Name field is required.',
                'subject_name_bangla.required' => 'Subject Bangla Name field is required.',
                'subject_image.required' => ' Subject Image  field is required.',
            ];

            $validator = Validator::make( $request->all(), $insertRules, $customMessages );

            if($validator->fails())
            {
                return redirect()->back()->withInput()->with('errors',collect($validator->errors()->all()));
            }

            $image = time() . '.' . request()->subject_image->getClientOriginalExtension();
            $request->subject_image->move(public_path('../image/subject_image') , $image);
            $image = "image/subject_image/" . $image;

        // dd($request->subject_image);
            $subject = subject::create([
                'subject_name' => $request->subject_name,
                'subject_name_bangla' => $request->subject_name_bangla,
                'subject_image' => $image,
            ]);
            return redirect()->route('getAllSubjects')->with('success','Subject Added Successfully');

    }



     /**
         * @name getAllSubjects
         * @role view all subject into datatable
         * @param Request $request
         * @return  view
         *
         */
        public function getAllSubjects(Request $request)
        {

            if ($request->ajax()) {
                $datas = subject::where('deleted_at',null)->get();
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

                            $switch = "<label class='switch'> <input onclick='subject_active_status(".$datas->id.")' type='checkbox'".$datas->checked."  /> <span class='slider round'></span> </label>";

                                return $switch;
                        })



                    ->addColumn('action', function($data){

                        $button = '';

                        $button .= ' <a href="edit-subject/'.$data->id.'" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>';


                        $button .= ' <a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="subject_delete('.$data->id.')"><i class="la la-trash-o"></i></a>';

                        return $button;
                })

                        ->rawColumns(['status','subject_name','subject_bangla_name','subject_image','action'])
                        ->make(true);
            }

            return view('admin.subject.subjects');
        }


    public function editSubject($id){
        $subject = subject::findorfail($id);



        return view('admin.subject.edit-subject',compact('subject'));
    }




        public function updateSubject(Request $request)
        {
            $id = $request->id;

            subject::where('id',$id)->update([
                'subject_name'          =>   $request->subject_name   ,
                'subject_name_bangla'   =>    $request->subject_name_bangla
            ]);
            return view('admin.subject.subjects');

        }



        /**
         * @name subjectActiveStatus
         * @role change subject active status
         * @param Request $request
         * @return  view
         *
         */
    public function subjectActiveStatus($id){
       
        $status = subject::where('id',$id)->first()->active_status;

        if($status == 1)
        {
            subject::where('id',$id)->update([
                'active_status'   => 0
            ]);
        }

        else
        {
            subject::where('id',$id)->update([
                'active_status'   => 1
            ]);
        }

       
    }



      /**
         * @name deleteSubject
         * @role delete a subject
         * @param Request $request
         * @return  view
         *
         */

    public function deleteSubject($id){

        $id = subject:: find($id);

        $id->delete();
        return redirect()->back();
    }

}
