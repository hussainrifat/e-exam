
@extends('admin.layout.master')


@section('page_css')
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2.min.css?{{time()}}" />
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2_custom.css?{{time()}}" />
@endsection
@section('content')





        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Question</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Report</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Report</a></li>
                        </ol>
                    </div>
                </div>

				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">

							<div class="card-body">
                                <form action="{{route('add-question')}}" method="post">
									@csrf
									<div class="row">

										<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label>Subject Name</label>
											<select class="form-control select2" id="subject_name"  name="subject_name">

											</select>
										</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Topic Name</label>
												<select class="form-control select2" id="topic_name" name="topic_name">

												</select>
											</div>
											</div>


										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Question</label>
												<input type="text" name="question" class="form-control">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Option 1</label>
												<input type="text" name="option1" class="form-control">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Option 2</label>
												<input type="text" name="option2"  class="form-control">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Option 3</label>
												<input type="text" name="option3"  class="form-control">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Option 4</label>
												<input type="text" name="option4" class="form-control">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Correct Answer</label>
												<select class="form-control select2" id="correct_ans" name="correct_ans">
													<option value="1"> Option 1</option>
													<option value="2"> Option 2</option>
													<option value="3"> Option 3</option>
													<option value="4"> Option 4</option>
												</select>


											</div>
										</div>



										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Add Question</button>
										</div>
									</div>
								</form>
                            </div>
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
