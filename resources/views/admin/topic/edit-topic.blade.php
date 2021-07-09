
@extends('admin.layout.master')
@section('content')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/admin/css/image_preview.css')}}">
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

				@if (count($errors)>0)
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger" >
        <ul>
            @foreach($errors->all() as $error)
                <li style="display: list-item;list-style-type:disc">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Topics</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Topic</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Topic</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                         
							<div class="card-body">
                                <form action="{{route('update-topic')}}"  method="post" enctype="multipart/form-data">
									@csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Subject Name</label>
												<input type="text" name="subject_name" value="{{$topics->getSubjectInfo->subject_name}}" class="form-control" disabled>
                                                <input type="hidden" name="id" value="{{$topics->id}}" class="form-control">

											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Topic Name</label>
												<input type="text" name="topic_name" value="{{$topics->topic_name}}" class="form-control">
											</div>
										</div>
									

										<div class="col-lg-12 col-md-12 col-sm-12">
											
											<button id="btn-subject-insert" type="submit" class="btn btn-primary save__btn"
											data-loading-text="<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Saving..."
											data-normal-text="Add Subject">
											<span class="ui-button-text">Update Topic</span>
										</button>

										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
                
            </div>
        </div>



    <script src="{{asset('assets/admin/js/image_preview.js')}}"></script>

        @endsection
		