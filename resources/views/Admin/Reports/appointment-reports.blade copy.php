
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
        <!-- bootstrap-daterangepicker -->
        <link href="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <!-- bootstrap-datetimepicker -->
        <link href="{{asset('assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
        <!-- Ion.RangeSlider -->
        <link href="{{asset('assets/vendors/normalize-css/normalize.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
        <!-- Bootstrap Colorpicker -->
        <link href="{{asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/cropper/dist/cropper.min.css')}}" rel="stylesheet">

        
        <!-- Custom Theme Style   -->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">



        
  </head>


<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

                @include('component/admin-sidebar')
                @include('component/admin-topbar')


              <div class="right_col" role="main">




                <div class="col-md-12 col-sm-12 "  style="padding-top: 30px">
                  <div class="x_panel" >
                    <form class="form-label-left input_mask">
                            <div class="x_title">
                              <div class="row">
                                <div class="col-md-6 col-sm-6">
                                  <h2>Create User</h2>
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

                              <div class="col-sm-12">
                                      
                                <div class="card-box table-responsive">

                                  <div class="col-md-12 col-sm-12" style="padding-top: 30px">
                                    <div class="x_panel">


                                              
                                        <div class="well" style="overflow: auto">
                                              


                                          

                                        </div>

                                        
                                    </div>

                                </div>

                              </div>



                        </div>

                        <div class="col-md-9 col-sm-9  offset-md-5">
                                            
                          <button type="button" class="btn btn-primary">Back</button>
                        
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>


                      </div>

                    </form>
           

                  </div>

        
                </div>

              </div>
            </div>

                @include('component/admin-footer')


          </div>

          </div>
        </div>




                  
                <!-- jQuery -->
                <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
                <!-- Bootstrap -->
                <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
                <!-- FastClick -->
                <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
                <!-- NProgress -->
                <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
              <!-- bootstrap-daterangepicker -->
              <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
              <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
                <!-- bootstrap-datetimepicker -->    
                <script src="{{asset('assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
                <!-- Ion.RangeSlider -->
                <script src="{{asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
                <!-- Bootstrap Colorpicker -->
                <script src="{{asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
                <!-- jquery.inputmask -->
                <script src="{{asset('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
                <!-- jQuery Knob -->
                <script src="{{asset('assets/vendors/jquery-knob/dist/jquery.knob.min.js')}}"></script>
                <!-- Cropper -->
                <script src="{{asset('assets/')}}"></script>

                

                    <!-- Custom Theme Scripts -->
                    <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>


                

    </body>
</html>

