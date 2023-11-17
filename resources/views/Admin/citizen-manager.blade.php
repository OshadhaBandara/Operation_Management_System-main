
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

              @include('component.error-message') 


                <div class="col-md-12 col-sm-12 "  style="padding-top: 30px">
                  <div class="x_panel" >
                    <div class="x_title">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <h2>Manage Citizens  </h2>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>

                    
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="card-box table-responsive">
                                <div class="row" style="padding: 15px">
                                  <div  class="col-md-6 col-sm-6 col-xs-6">
                                    
                                    <a href="{{url('add-citizen-id')}}" class="btn btn-primary">Add New Citizen</a>
                                  </div>


                                </div>
                                 
                              

                                  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%; padding-bottom: 30px">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>NIC</th>
                                        <th>email</th>
                                        <th>Contact</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th></th>
                                      </tr>
                                    </thead>
              
                                    <tbody>


                                      @foreach($citizen as $c)

                                        <tr>
                                          <td>{{$c->fname}} {{$c->lname}}</td>
                                          <td>{{$c->nic}}</td>
                                          <td>{{$c->email}}</td>
                                          <td>{{$c->phone}}</td>
                                          <td>{{$c->gender}}</td>
                                          <td>{{$c->address}}</td>
                                          <td>          
                                            
                                            <!-- Split button -->
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-danger">Actions</button>
                                              <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                              </button>
                                              <div class="dropdown-menu">
                                              <a class="dropdown-item" href="{{route('view-citizen',$c->id)}}">View</a>
                                                <a class="dropdown-item" href="{{route('edit-citizen',$c->id)}}">Edit</a>
                                                <a class="dropdown-item" href="{{route('view-citizen-appoinments',$c->id)}}">View Appointments</a>
                                                <a class="dropdown-item" href="{{route('citizen-file-manage',$c->id)}}">Documents</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item delete-modal"  attr-id="{{$c->id}}" attr-url="{{route('delete-citizen',$c->id)}}" data-toggle="modal" data-target="#deleteModal">Delete</a>
                                              </div>
                                            </div>
                          
                                            <!-- Split button -->
                                          </td>
                                        </tr>
                                      
                                      @endforeach
                                      <a  class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Availability for Service</a>       <!-- link trigger modal -->                           

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
      </div>
    </div>


    

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
                    <div class="modal-body"  >
                      <!-- Date and Time Picker -->
                      <div>
                        Date and Time
                        <form class="reservation-form" > 
                          <fieldset>
                            <div class="control-group">
                              <div class="controls">
                                <div class="input-prepend input-group">
                                  <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                  <input type="text" name="reservation-time" id="reservation-time" class="form-control" value="01/01/2016 - 01/25/2016" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                      <!-- End of Date and Time Picker -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

<!-- delete Modal: start -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Delete Citizen</h5>
                
            </div>
            <div class="modal-body">
                <i class="fa fa-exclamation-circle me-2"></i> Do you want to Delete <span class="text-dark fe-600">Citizen .No <span id="c-id"></span> </span> ?
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


              @include('Admin.Components.admin-footer')


       
    <!-- jQuery -->
    <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
   <script src="{{asset('assets/vendors/moment/min/moment.min.js')}}"></script>
   <script src="{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


        <!-- Custom Theme Scripts -->
        <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>



        <style>
          @media (max-width: 768px) {
            /* Adjust the date range picker's style for smaller screens */
            .daterangepicker {
              font-size: 14px; /* Adjust font size */
              overflow-y: auto;
             
            }
          }
        </style>

        <script>


          
          // Attach an event listener to the input field
          $('#reservation-time').on('apply.daterangepicker', function (ev, picker) {
              // Get the selected start and end dates
              var startDate = picker.startDate.format('MM/DD/YYYY h:mm A');
              var endDate = picker.endDate.format('MM/DD/YYYY h:mm A');
  
              // You can now use startDate and endDate as needed
              console.log('Start Date:', startDate);
              console.log('End Date:', endDate);
          });
  

  // cancelation
  $('.delete-modal').click(function(){
            var uid = $(this).attr('attr-id');
            var url = $(this).attr('attr-url');
           $('.delete-form').attr('action',url)
           $('#c-id').html(uid);
          
        });
  
          </script>

    </body>
</html>