<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">

    <style>
        .file_manager .file a:hover .hover,
        .file_manager .file .file-name small {
            display: block
        }

        .file_manager .file {
            padding: 0 !important
        }

        .file_manager .file .icon {
            text-align: center
        }


        .file_manager .file {
            position: relative;
            border-radius: .55rem;
            overflow: hidden
        }

        .file_manager .file .image,
        .file_manager .file .icon {
            max-height: 180px;
            overflow: hidden;
            background-size: cover;
            background-position: top
        }

        .file_manager .file .hover {
            position: absolute;
            right: 10px;
            top: 10px;
            display: none;
            transition: all 0.2s ease-in-out
        }

        .file_manager .file a:hover .hover {
            transition: all 0.2s ease-in-out
        }

        .file_manager .file .icon {
            padding: 15px 10px;
            display: table;
            width: 100%
        }

        .file_manager .file .icon i {
            display: table-cell;
            font-size: 30px;
            vertical-align: middle;
            color: #777;
            line-height: 100px
        }

        .file_manager .file .file-name {
            padding: 10px;
            border-top: 1px solid #f7f7f7
        }

        .file_manager .file .file-name small .date {
            float: right
        }

        .folder {
            padding: 20px;
            display: block;
            color: #777
        }

        @media only screen and (max-width: 992px) {
            .file_manager .nav-tabs {
                padding-left: 0;
                padding-right: 0
            }

            .file_manager .nav-tabs .nav-item {
                display: inline-block
            }
        }

        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }

        a:hover {
            text-decoration: none;
        }
    </style>


</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    @include('Admin.Components.admin-sidebar')

                    @include('Admin.Components.admin-topbar')

                    <div class="right_col" role="main">
                    @include('component.error-message') 
                        <div class="col-md-12 col-sm-12" style="padding-top: 30px">
                            <div class="x_panel">
                                <form class="form-label-left input_mask">
                                    <div class="x_title">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <h2>Citizen File Manager - {{$citizen->fname}} {{$citizen->lname}}</h2>
                                            </div>
                                            <!-- shearch -->
                                            <div class="col-md-6 col-sm-6 text-right" style="display: none">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-secondary" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- shearch -->
                                        </div>
                                        <div class="x_content">

                                            <br>

                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <p class="text-muted font-13 m-b-30" style="padding-top: 15px">
                                                        You can Add & Delete files
                                                    </p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="color: #f7f7f7">Add New Files
                                                        <!-- link trigger modal -->
                                                        <i class="fa fa-plus" style="padding-left: 6px"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <br>

                                            <!-- File Manager -->


                                            <div id="main-content" class="file_manager border border-dark">
                                                <div class="container">
                                                    <div class="row clearfix" style="padding: 10px">



                                                        @if($citizen->documents->grama_niladari_certificate!=null)
                                                        <div class="col-lg-3 col-md-4 col-sm-12 ">
                                                            <div class="card border btn-outline-light">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                        <button type="button" class="btn btn-icon btn-danger delete-modal" attr-name="{{$citizen->documents->grama_niladari_certificate}}" attr-url="{{route('delete-media',['grama_niladari_certificate',$citizen->documents->grama_niladari_certificate,$citizen->id])}}"  data-toggle="modal" data-target="#deleteModal">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-file text-info"></i>
                                                                        </div>
                                                                        <a href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->grama_niladari_certificate)}}" target="_blank">
                                                                            <div class="file-name">
                                                                                <p class="m-b-5 text-muted">{{$citizen->documents->grama_niladari_certificate}}</p>
                                                                                <!-- <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small> -->
                                                                            </div>
                                                                        </a>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($citizen->documents->birth_certificate!=null)
                                                        <div class="col-lg-3 col-md-4 col-sm-12 ">
                                                            <div class="card border btn-outline-light">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                        <button type="button" class="btn btn-icon btn-danger delete-modal" attr-name="{{$citizen->documents->birth_certificate}}" attr-url="{{route('delete-media',['birth_certificate',$citizen->documents->birth_certificate,$citizen->id])}}"  data-toggle="modal" data-target="#deleteModal">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-file text-info"></i>
                                                                        </div>
                                                                        <a href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->birth_certificate)}}" target="_blank">
                                                                            <div class="file-name">
                                                                                <p class="m-b-5 text-muted">{{$citizen->documents->birth_certificate}}</p>
                                                                                <!-- <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small> -->
                                                                            </div>
                                                                        </a>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($citizen->documents->nic!=null)
                                                        <div class="col-lg-3 col-md-4 col-sm-12 ">
                                                            <div class="card border btn-outline-light">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                        <button type="button" class="btn btn-icon btn-danger delete-modal" attr-name="{{$citizen->documents->nic}}" attr-url="{{route('delete-media',['nic',$citizen->documents->nic,$citizen->id])}}"  data-toggle="modal" data-target="#deleteModal">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-file text-info"></i>
                                                                        </div>
                                                                        <a href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->nic)}}" target="_blank">
                                                                            <div class="file-name">
                                                                                <p class="m-b-5 text-muted">{{$citizen->documents->nic}}</p>
                                                                                <!-- <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small> -->
                                                                            </div>
                                                                        </a>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($citizen->documents->vehicle_license!=null)
                                                        <div class="col-lg-3 col-md-4 col-sm-12 ">
                                                            <div class="card border btn-outline-light">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                        <button type="button" class="btn btn-icon btn-danger delete-modal" attr-name="{{$citizen->documents->vehicle_license}}" attr-url="{{route('delete-media',['vehicle_license',$citizen->documents->vehicle_license,$citizen->id])}}"  data-toggle="modal" data-target="#deleteModal">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-file text-info"></i>
                                                                        </div>
                                                                        <a href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->vehicle_license)}}" target="_blank">
                                                                            <div class="file-name">
                                                                                <p class="m-b-5 text-muted">{{$citizen->documents->vehicle_license}}</p>
                                                                                <!-- <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small> -->
                                                                            </div>
                                                                        </a>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($citizen->documents->v_emission_certificate!=null)
                                                        <div class="col-lg-3 col-md-4 col-sm-12 ">
                                                            <div class="card border btn-outline-light">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                        <button type="button" class="btn btn-icon btn-danger delete-modal" attr-name="{{$citizen->documents->v_emission_certificate}}" attr-url="{{route('delete-media',['v_emission_certificate',$citizen->documents->v_emission_certificate,$citizen->id])}}"  data-toggle="modal" data-target="#deleteModal">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-file text-info"></i>
                                                                        </div>
                                                                        <a href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->v_emission_certificate)}}" target="_blank">
                                                                            <div class="file-name">
                                                                                <p class="m-b-5 text-muted">{{$citizen->documents->v_emission_certificate}}</p>
                                                                                <!-- <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small> -->
                                                                            </div>
                                                                        </a>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        @if($citizen->documents->appointment_attachment!=null)
                                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                                            <div class="card border btn-outline-light">
                                                                <div class="file">
                                                                    <a href="javascript:void(0);">
                                                                        <div class="hover">
                                                                            <button type="button" class="btn btn-icon btn-danger delete-modal" attr-name="{{$citizen->documents->appointment_attachment}}" attr-url="{{route('delete-media',['appointment_attachment',$citizen->documents->appointment_attachment,$citizen->id])}}"  data-toggle="modal" data-target="#deleteModal">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="fa fa-file text-info"></i>
                                                                        </div>
                                                                        <a href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->appointment_attachment)}}" target="_blank">
                                                                            <div class="file-name">
                                                                                <p class="m-b-5 text-muted">{{$citizen->documents->appointment_attachment}}</p>
                                                                                <!-- <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small> -->
                                                                            </div>
                                                                        </a>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif



                                                    </div>

                                                </div>
                                            </div>


                                            <!-- File Manager -->






                                        </div>
                                    </div>

                                    <div class="col-md-9 col-sm-9  offset-md-5" style="padding-top: 50px">

                                        <button type="button" class="btn btn-primary">Back</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- delete Modal: start -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Delete File</h5>
                
            </div>
            <div class="modal-body">
                <i class="fa fa-exclamation-circle me-2"></i> Do you want to Delete <span class="text-dark fe-600">File <span id="f-id"></span> </span> ?
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Close</button>
                <form action="" class="delete-form" method="post">
                  @csrf
                    <button class="btn btn-primary" type="submit">Yes, Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end delete Model -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 600px;">
                <div class="modal-content" style="margin-top: -200px">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- File Uploader -->

                        <div class="col-md-12 col-sm-12 form-group has-feedback">
                            <select class="form-control has-feedback-left" id="inputSuccess4" placeholder="">
                                <option value="">Select category</option>
                                <option>NIC</option>
                                <option>Grama Niladari Certificate</option>
                                <option>Birth Certificate</option>

                            </select>
                            <span class="fa fa-child form-control-feedback left" aria-hidden="true"></span>
                        </div>


                        <div class="col-md-12 col-sm-12 form-group has-feedback">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control has-feedback-left" id="inputSuccess4" placeholder="Date of Birth" accept=".pdf, .doc, .docx">
                                <label class="custom-file-label" for="grama-niladari-certificate">Choose file</label>
                            </div>
                            <span class="fa fa-child form-control-feedback left" aria-hidden="true"></span>
                        </div>








                        <!-- File Uploader -->


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        @include('Admin.Components.admin-footer')

    </div>
    <!-- jQuery -->
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.delete-modal').click(function(){
                url = $(this).attr('attr-url');
                name = $(this).attr('attr-name');
                $('.delete-form').attr('action',url)
                $('#f-id').html(name);
          
        });
           


        });
    </script>
</body>

</html>