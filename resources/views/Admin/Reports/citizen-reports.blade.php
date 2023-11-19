
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DiviBridge </title>



        
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

        <!-- Datatables -->
    
        <link href="{{asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

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
                                  <h2>Citizen Reports</h2>
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

                                          
                                              
                                        <form action="{{route('generate-citizen-report')}}" method="post" >
                                        @csrf
                                        <div class="well x_content">
                                              
                                          <div class="input-group col-md-3 col-sm-4">
                                            <select class="form-control" name="district">
                                                <option value="0" selected>- All Districts -</option>
                                                  @foreach(config('districts') as $ds)
                                                  <option value="{{$ds}}" {{$ds==old('district')?'selected':''}}>{{$ds}}</option>
                                                  @endforeach
                                            </select>
                                          </div>

                                          <div class="input-group col-md-3 col-sm-4">
                                            <select class="form-control" name="division">
                                                <option value="0" selected>- All Divisions -</option>
                                                @foreach(config('gn_divisions') as $gn)
                                                  <option value="{{$gn['name']}}" {{$gn['name']==old('gn_divisions')?'selected':''}}>{{$gn['name']}}</option>
                                                  @endforeach
                                            </select>
                                          </div>

                                          <div class="input-group col-md-3 col-sm-4">
                                            <select class="form-control" name="gender">
                                                <option value="0" selected>- All Genders -</option>
                                                <option value="Male" {{"Male"==old('gender')?'selected':''}}>Male</option>
                                                <option value="Female" {{"Female"==old('gender')?'selected':''}}>Female</option> 
                                            </select>
                                          </div>

                                          <div class="input-group col-md-3 col-sm-4">
                                            <button class="btn btn-primary" type="submit">Generate</button>
                                            <a class="btn btn-outline-primary" href="{{url('/reports/citizen-reports')}}" >Reset</a>
                                          </div>

                                        </div>
                                        </form>


                                          <!-- Data Table-->
                            
                                          <div class="col-md-12 col-sm-12 {{count($data)==0?'d-none':''}}">
                                            <div class="x_panel">

                                              <div class="x_content">
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                    <div class="card-box table-responsive">

                                                      <table id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                          <tr>
                                                            <th>#</th>
                                                            <th>Citizen Name</th>
                                                            <th>Citizen NIC</th>
                                                            <th>District</th>
                                                            <th>Grama Niladhari Division</th>
                                                            <th>Dath of Birth</th>
                                                            <th>Contact No</th>
                                                            <th>Gender</th>
                                                          </tr>
                                                        </thead>


                                                        <tbody>

                                                          @foreach($data as $d)
                                                          <tr>
                                                            <td>{{$d->id}}</td>
                                                            <td>{{$d->fname}} {{$d->lname}}</td>
                                                            <td>{{$d->nic}}</td>
                                                            <td>{{$d->district}}</td>
                                                            <td>{{$d->division}}</td>
                                                            <td>{{date('Y-m-d', strtotime($d->dob))}}</td>
                                                            <td>{{date('Y-m-d', strtotime($d->created_at))}}</td>
                                                            <td>{{$d->gender}}</td>
                                          
                                                          </tr>
                                                          @endforeach

                                                         
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- Data Table-->


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

                

                <!-- Datatables -->
                <script src="{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
                <script src="{{asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
                <script src="{{asset('assets/vendors/jszip/dist/jszip.min.js')}}"></script>
                <script src="{{asset('assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
                <script src="{{asset('assets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>


                    <!-- Custom Theme Scripts -->
                    <script src="{{asset('assets/js/gen-master/custom.js')}}"></script>

              
                

    </body>
</html>

