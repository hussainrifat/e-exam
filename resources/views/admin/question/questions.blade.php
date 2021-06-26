@extends('admin.layout.master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
         <!-- row -->
    <div class="col-xl-4 col-xxl-8 col-lg-12 col-sm-12 m-5 ">
        <div class="card text-white p-3" style="background-color: #143B64 ;">
            <div class="card-header">
                <h5 class="card-title text-white">Questions</h5>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">

              
                
                <div class="form-group">
                    <label>Subject Name</label>
                    <select class="form-control select2"  name="product_id">
                        <option disabled selected>Select Subject</option>
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                            <option value="">E</option>
                            <option value="">F</option>

                    </select>
                </div>

                <div class="form-group">
                        <label>Topic Name</label>
                        <select class="form-control select2" id="sub_category" name="sub_category_id">
                            <option>Select Category First</option>
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                            <option value="">E</option>
                            <option value="">F</option>
                        </select>
                    </div>


                <div class="form-group">
                    <button type="button" class="btn btn-danger">Submit <span class="btn-icon-right"><i
                        class="fa fa-check"></i></span>
            </button>
                </div>
            </div>
          
        </div>
    </div>
</div>
</div>

        @endsection
		
     

