
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
       <!-- iCheck -->
       <link href="{{asset('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
       <!-- bootstrap-wysiwyg -->
       <link href="{{asset('assets/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">      
       <!-- Select2 -->
       <link href="{{asset('assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
       <!-- Switchery -->
       <link href="{{asset('assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
       <!-- starrr -->
       <link href="{{asset('assets/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
       <!-- bootstrap-progressbar -->
       <link href="{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
       
       <!-- Custom Theme Style   -->
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




                <div class="col-md-12 col-sm-12 "  style="padding-top: 30px">
                  <div class="x_panel" >
                    <div class="x_title">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <h2>Users Access Management</h2>
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
                        <div class="row">
                            <div class="col-sm-12">
                              
                              <div class="card-box table-responsive">
                                <div >
                                  <div  >
                                    <p style="padding-top: 15px">
                                      You can change user access
                                    </p>
                                  </div>
                                </div>
                                
                                


                                
                                <div class="col-md-12 col-sm-12">
                                  <div class="x_panel">

                                      <div class="row " style="padding-top: 30px">
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Edit
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Delete
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked />Access Management                                              
                                            </label>
                                          </div>
                                        </div>

                                      </div>




                                      <div class="row " style="padding-top: 30px">
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> Add Users
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Edit
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked /> User Delete
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                          <div class="">
                                            <label>
                                              <input type="checkbox" class="js-switch" checked />Access Management                                              
                                            </label>
                                          </div>
                                        </div>

                                      </div>

                                      



                                  </div>
                                </div>

                               </div>

                            </div>
                          </div>
                      </div>
                  </div>
                </div>


              </div>

            
           

          </div>
        </div>
      </div>
    </div>

    @include('Admin.Components.admin-footer')




       
    <<!-- jQuery -->
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{asset('assets/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{asset('assets/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{asset('assets/vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{asset('assets/vendors/starrr/dist/starrr.js')}}"></script>
    


        <!-- Custom Theme Scripts -->
        <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>

    </body>
</html>
