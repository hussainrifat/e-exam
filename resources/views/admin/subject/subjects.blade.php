@extends('admin.layout.master')
@section('content')

<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2.min.css?{{time()}}" />
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/image_preview.css?{{time()}}">
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2_custom.css?{{time()}}" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap.css" rel="stylesheet">


<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Topics</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">All Topics</a></li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Topic </h4>
                                <a href="{{url('admin/add-topic')}}" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="subject-table" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>SL No</th>
                                                <th>Subject Name</th>
                                                <th>Subject Bangla Name</th>
                                                <th>Subject Bangla Name</th>
                                                <th>Active Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.18/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.js"></script>

<script type="text/javascript">
    $(function () {

        var buttonCommon = {
    //         format: {
    //      body: function(data, column, row) {
    //        data = data.replace(/<div class="flagtext"\">/, '');
    //        data = data.replace(/<.*?>/g, "");
    //        return data;
    //      }
    //    }

    };

      var table = $('#subject-table').DataTable({
        //dom: '<"row"lfB>rtip',
       dom: 'Blfrtip',
        buttons: [
                {
                    extend: 'pdf',
                    text: 'PDF',
                    exportOptions: {
                        columns: ':visible:not(.not-exported)',
                        rows: ':visible',

                    },

                },
                // {
                //     extend: 'csv',
                //     text: 'CSV',
                //     exportOptions: {
                //         columns: ':visible:not(.not-exported)',
                //         rows: ':visible',
                //         stripHtml: true,
                //         format: {
                //             body: function ( data, row, column, node ) {
                //                 if (column === 0 && (data.toString().indexOf('<img src=') !== -1)) {
                //                     var regex = /<img.*?src=['"](.*?)['"]/;
                //                     data = regex.exec(data)[1];
                //                 }
                //                 return data;
                //             }
                //         }
                //     }
                // },
                {
                    extend: 'print',
                    text: 'Print',
                    exportOptions: {
                        columns: ':visible:not(.not-exported)',
                        rows: ':visible',
                        stripHtml: false,
                    },

                },

            ],

          pageLength: 20,
          processing: true,
         language: {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
},
          serverSide: true,

          ajax: "{{ route('getAllSubjects') }}",
          deferRender: true,
          columns: [
              {data: 'sl_no', name: 'sl_no'},

              {data:'subject_name',name:'subject_name'},
              {data:'subject_bangla_name',name:'subject_bangla_name'},
              {data:'subject_image',name:'subject_image'},

            {

                data: 'status',
                name: 'status',


            },

                {

                data: 'action',
                name: 'action',


                },

          ],


      });



    });
  </script>



<script src="{{asset('assets/admin/js/admin.js')}}"></script>

<script src="{{asset('assets/admin/js/advanced-form-element.js')}}"></script>
<script src="{{asset('assets/admin/js/select2.full.js')}}"></script>
<script src="{{asset('assets/admin/js/single_image_preview.js')}}"></script>





@endsection




