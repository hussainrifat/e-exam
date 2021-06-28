<?php

namespace App\Http\Controllers\subject;

use App\Http\Controllers\Controller;
use App\Models\subject;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;


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



     /**
     * @name medicineInsertAjax
     * @role insert a medicine record into database
     * @param Request $request
     * @return  Json response
     *
     * @throws Illuminate\Validation\ValidationException
     */
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
            $request->subject_image->move(public_path('../image/product_image') , $image);
            $image = "image/product_image/" . $image;
        
        // dd($request->subject_image);
            $subject = subject::create([
                'subject_name' => $request->subject_name,
                'subject_name_bangla' => $request->subject_name_bangla,
                'subject_image' => $request->subject_image,
            ]);
            return redirect()->route('subjects')->with('success','Subject Added Successfully');

    }



    // public function viewAllSubjects()
    // {
        
    //     return view('admin.subject.subjects');

    // }

    public function getAllSubjects(Request $request)
    {
       
        if ($request->ajax()) {
            $datas = subject::where('deleted_at',null)->get();
            $i=1;
                foreach($datas as $data)
                {
                    $checked = $data->status=='1'?'checked':'';
                    $data['sl_no'] = $i++;
                    $data['checked'] =$checked;

                }
                
            return Datatables::of($datas)
                    ->addIndexColumn()
                    ->addColumn('status', function($datas){

                           $switch = "<label class='switch'> <input onclick='category_active_status(".$datas->id.")' type='checkbox'".$datas->checked."  /> <span class='slider round'></span> </label>";

                            return $switch;
                    })

                    ->addColumn('subject_name', function($datas){
                        $permission = $this->permission();
    
                        if(in_array('product_edit',$permission))
                        $column = '<p onclick='.'edit('. $datas->id.',"subject_name")'.'>'. $datas->subject_name .'</p>';
                        else
                        $column = '<p>'. $datas->subject_name .'</p>';
    
                         return $column;
                     })


                     ->addColumn('subject_bangla_name', function($datas){
                        $permission = $this->permission();
    
                        if(in_array('product_edit',$permission))
                        $column = '<p onclick='.'edit('. $datas->id.',"subject_bangla_name")'.'>'. $datas->subject_bangla_name .'</p>';
                        else
                        $column = '<p>'. $datas->subject_bangla_name .'</p>';
    
                         return $column;
                     })

                 
                 ->addColumn('subject_image', function($datas){
                    $permission = $this->permission();
              
                    if(in_array('product_edit',$permission))
                    {
                    $column = '<img onclick='.'edit('. $datas->id.',"subject_image")'.'  src="../'.$datas->subject_image.'"  width="100px" class="img-thumbnail product-image" />';
                    }
                    else
                    $column = '<img   src="../'.$datas->subject_image.'" width="100px" class="img-thumbnail" />';
                     return $column;
                 })


             
                 ->addColumn('action', function($data){

                    $permission = $this->permission();
                    $button = '';

                    if(in_array('category_delete',$permission))
                    $button .= ' <a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="product_content_delete('.$data->id.')"><i class="la la-trash-o"></i></a>';
                    else
                    $button .= ' <a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="access_alert()"><i class="la la-trash-o"></i></a>';
                    return $button;
             })
                    ->rawColumns(['status','subject_name','subject_bangla_name','subject_image','action'])
                    ->make(true);
        }

        return view('admin.subject.subjects');
    }

}
