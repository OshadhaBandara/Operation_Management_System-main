<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                                                <h2>Citizen Infomation #{{$citizen->id}}</h2>
                                            </div>

                                        </div>
                                        <div class="x_content">
                                            <div class="row" style="padding-top: 13px">
                                                <div class="col-md-6 col-sm-6 mb-2">
                                                    <!-- User Image -->
                                                    <img src="{{asset(!empty($docs->profile_image)?'storage/'.$citizen->nic.'/'.$docs->profile_image:'storage/user-no-image.png')}}" alt="user-image" style="max-width: 250px;">
                                                </div>
                                                <div class="col-md-6 col-sm-6 mb-2">
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>Name : <span class="label label-default text-dark">{{$citizen->fname}} {{$citizen->lname}} </span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>District : <span class="label label-default text-dark">{{$citizen->district}} </span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>Division : <span class="label label-default text-dark">{{$citizen->division}}</span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>NIC No : <span class="label label-default text-dark">{{$citizen->nic}}</span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>Gender : <span class="label label-default text-dark">{{!empty($citizen->gender)?$citizen->gender:'N/A'}}</span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>Date of Birth : <span class="label label-default text-dark">{{!empty($citizen->dob)?$citizen->dob:'N/A'}}</span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>Contact No : <span class="label label-default text-dark">{{$citizen->phone}} </span></h6>
                                                    </div>
                                                    <div class="col-md-12 col-12 my-1">
                                                        <h6>Address : <span class="label label-default text-dark">{{!empty($citizen->address)?$citizen->address:'N/A'}}</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 mb-2">
                                            <div class="col-md-12 col-12 my-2">
                                                    <h6>Attachments</h6>
                                                </div>
                                                <div class="col-md-12 col-12 my-2">
                                                
                                                <h6>{{$citizen->documents->grama_niladari_certificate}} 
                                                    @if($citizen->documents->grama_niladari_certificate!=null)
                                                    <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->grama_niladari_certificate)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a>
                                                    @endif
                                                </h6>
                                                
                                                <h6>{{$citizen->documents->birth_certificate}}
                                                    @if($citizen->documents->birth_certificate!=null) 
                                                    <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->birth_certificate)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a>
                                                        </h6>
                                                @endif
                                                <h6>{{$citizen->documents->nic}} 
                                                    @if($citizen->documents->nic!=null)
                                                    <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->nic)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a>
                                                        </h6>
                                                @endif
                                                <h6>{{$citizen->documents->vehicle_license}} 
                                                    @if($citizen->documents->vehicle_license!=null)
                                                    <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->vehicle_license)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a>
                                                        </h6>
                                                <h6>{{$citizen->documents->v_emission_certificate}}@endif
                                                    @if($citizen->documents->v_emission_certificate!=null) 
                                                    <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->v_emission_certificate)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a>
                                                        </h6>
                                                @endif
                                                <h6>{{$citizen->documents->appointment_attachment}}
                                                    @if($citizen->documents->appointment_attachment!=null) 
                                                    <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->appointment_attachment)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a>
                                                        </h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-sm-9  offset-md-5" style="padding-top: 50px">

                                        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

                                        <button type="submit" class="btn btn-success">Edit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
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
</body>

</html>