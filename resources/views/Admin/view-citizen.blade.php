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
                                            <div class="col-md-6 col-sm-6">
                                                <h2>Citizen Infomation</h2>
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
                                            <div class="row" style="padding-top: 13px">
                                                <div class="col-md-6 col-sm-6 mb-2">
                                                    <!-- User Image -->
                                                    <img src="{{asset('assets/images/person_3-min.jpg')}}" alt="user-image" style="max-width: 250px;">
                                                </div>
                                                <div class="col-md-6 col-sm-6 mb-2">
                                                    
                                                </div>
                                            </div>
                                            <!-- User Info -->
                                            <div class="row" style="padding-top: 50px">
                                              <div class="col-md-6 col-12"><h6>Example <span class="label label-default">New</span></h6></div>
                                              <div class="col-md-6 col-12"><h6>Example <span class="label label-default">New</span></h6></div>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9 col-sm-9  offset-md-5" style="padding-top: 50px">
                                     
                                      <button type="button" class="btn btn-primary">Back</button>
                                     
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
