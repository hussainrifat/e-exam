@extends('admin.layout.master')
@section('content')

@section('page_css')
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2.min.css?{{time()}}" />
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2_custom.css?{{time()}}" />
@endsection
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

                <form action="{{route('view-question')}}" method="post">
                    @csrf
                
                <div class="form-group">
                    <label>Subject Name</label>
                    <select class="form-control select2" id="subject_name"  name="subject_name">
                    </select>
                    
                </div>

                <div class="form-group">
                        <label>Topic Name</label>
                        <select class="form-control select2" id="topic_name" name="topic_name">

                        </select>
                    </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Submit <span class="btn-icon-right"><i
                        class="fa fa-check"></i></span>
            </button>
                </div>
                </form>
            </div>
          
        </div>
    </div>
</div>
</div>

        @endsection

        @section("page_js")
        <script src="{{asset('assets')}}/admin/js/select2.full.js?{{ time() }}"></script>
        <script src="{{asset('assets')}}/admin/js/advanced-form-element.js?{{ time() }}"></script>
		<script src="{{asset('assets')}}/admin/js/admin.js?{{ time() }}"></script>
        @endsection

		
     

