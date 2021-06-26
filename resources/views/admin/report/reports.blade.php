@extends('admin.layout.master')
@section('content')

<style>
    
</style>
     
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
            
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Reports</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">All Reports</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
          
            <div class="col-lg-12 ">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card m-5">
                            <div class="card-header">
                                <h4 class="card-title">Reports </h4>
                                <a href="{{url('admin/add-report')}}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>SL No</th>
                                                <th>Subject Name</th>
                                                <th>Topic</th>
                                                <th>Question</th>
                                                <th>Option 1</th>
                                                <th>Option 2</th>
                                                <th>Option 3</th>
                                                <th>Option 4</th>
                                                <th>Correct Ans</th>
                                                <th>Active Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>01</strong></td>
                                                <td>This is Subject Name</td>
                                                <td>Topic Name</td>
                                                <td>This Is Question</td>
                                                <td>A) Dhaka</td>
                                                <td>B) Chattogram</td>
                                                <td>C) Khulna</td>
                                                <td>D) Rajshahi</td>
                                                <td>B) Chattogram</td>

                                                <td> <label class="switch">
                                                    <input type="checkbox"  onclick="">
                                                        <span class="slider round"></span>
                                                    </label></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>												
                                            </tr>
                                     

                                       
                                    
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
    </div>
</div>

    

     

@endsection
		
     

