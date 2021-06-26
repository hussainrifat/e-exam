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
                    <h4>All Content</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Home Page Content</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
          
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Home Page Content </h4>
                                <a href="add-student.html" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>SL No</th>
                                                <th>Section Name</th>
                                                <th>Image</th>
                                                <th>Active Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>01</strong></td>
                                                <td>Category</td>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt="">Image</td>

                                                <td> <label class="switch">
                                                    <input type="checkbox"  onclick="">
                                                        <span class="slider round"></span>
                                                    </label></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>												
                                            </tr>
                                     

                                            <tr>
                                                <td><strong>02</strong></td>
                                                <td>Exam</td>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt="">Image</td>

                                                <td> <label class="switch">
                                                    <input type="checkbox"  onclick="">
                                                        <span class="slider round"></span>
                                                    </label></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>												
                                            </tr>


                                            <tr>
                                                <td><strong>03</strong></td>
                                                <td>Result</td>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt="">Image</td>

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
		
     

