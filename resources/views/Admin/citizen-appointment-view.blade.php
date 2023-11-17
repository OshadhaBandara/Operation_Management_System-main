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
                        <div class="col-md-12 col-sm-12" style="padding-top: 30px">
                            <div class="x_panel">
                                <form class="form-label-left input_mask">
                                    <div class="x_title">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 d-flex justify-content-between">
                                                <h2>Citizen Appointment Infomation #{{$service->id}}</h2>
                                                <p class="text-white badge {{$service->delivary_method=='deliver'?'bg-primary':'bg-secondary'}} my-auto" style="font-size: 15px;">{{$service->delivary_method=='deliver'?'Delivery':'Collection'}}</p>
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

                                            <!-- User Info -->
                                            <div class="row" style="padding-top: 50px">
                                                <div class="col-md-6 col-12">
                                                    <h6>Service : <span class="label label-default text-dark">{{$service->service_type}}</span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Service Type : <span class="label label-default text-dark">
                                                            @if($service->service_type=='Certificate Services')
                                                            {{$service->certificate_type}}
                                                            @elseif($service->service_type=='Passports Service')
                                                            {{$service->passport_type}}
                                                            @elseif($service->service_type=='Appointment')
                                                            {{$service->appointment_type}}
                                                            @elseif($service->service_type=='NIC Services')
                                                            {{$service->nic_service_type}}
                                                            @elseif($service->service_type=='Vehicle Revenue Service')
                                                            {{$service->v_emission_type}}
                                                            @endif
                                                        </span></h6>
                                                </div>

                                                @if($service->service_type=='Appointment')
                                                <div class="col-md-6 col-12">
                                                    <h6>Appoinment Date : <span class="label label-default text-dark">{{date('Y-m-d',strtotime($service->appointment_date))}} {{date('H:i A',strtotime($service->appointment_time))}}</span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Appointment Note : <span class="label label-default text-dark">{{$service->appointment_description}}</span></h6>
                                                </div>
                                                @endif
                                                <div class="col-md-6 col-12">
                                                    <h6>District : <span class="label label-default text-dark">{{$citizen->district}} </span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Division : <span class="label label-default text-dark">{{$citizen->division}}</span></h6>
                                                </div>
                                                <div class="col-md-12 col-12 my-2">&nbsp;</div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Citizen : <span class="label label-default text-dark">{{$citizen->fname}} {{$citizen->lname}}</span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>NIC No : <span class="label label-default text-dark">{{$citizen->nic}}</span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Gender : <span class="label label-default text-dark">{{$citizen->gender}}</span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Date of Birth : <span class="label label-default text-dark">{{$citizen->dob}}</span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Contact No : <span class="label label-default text-dark">{{$citizen->phone}} </span></h6>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <h6>Address : <span class="label label-default text-dark">{{$citizen->address}}</span></h6>
                                                </div>
                                                <div class="col-md-12 col-12 my-2">
                                                    <h6>Attachments</h6>
                                                </div>
                                                <div class="col-md-12 col-12 my-2">
                                                @if($service->service_type=='NIC Services' || $service->service_type=='Passports Service')
                                                <h6>{{$citizen->documents->grama_niladari_certificate}} <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->grama_niladari_certificate)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a></h6>
                                                @endif
                                                @if($service->service_type=='NIC Services' || $service->service_type=='Passports Service')
                                                <h6>{{$citizen->documents->birth_certificate}} <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->birth_certificate)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a></h6>
                                                @endif
                                                @if($service->service_type=='Passports Service')
                                                <h6>{{$citizen->documents->nic}} <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->nic)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a></h6>
                                                @endif
                                                @if($service->service_type=='Vehicle Revenue Service')
                                                <h6>{{$citizen->documents->vehicle_license}} <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->vehicle_license)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a></h6>
                                                <h6>{{$citizen->documents->v_emission_certificate}} <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->v_emission_certificate)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a></h6>
                                                @endif
                                                @if($service->service_type=='Appointment')
                                                <h6>{{$citizen->documents->appointment_attachment}} <a class="text-primary" href="{{asset('storage/'.$citizen->nic.'/'.$citizen->documents->appointment_attachment)}}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            View</a></h6>
                                                @endif
                                                
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-sm-9  offset-md-5" style="padding-top: 50px">

                                        <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>

                                        <!-- <button type="submit" class="btn btn-success">Edit</button> -->
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