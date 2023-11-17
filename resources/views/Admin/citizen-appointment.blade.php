
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
                          <h2> Citizen Appoinments </h2>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                          <div class="input-group">
                            <input type="text" class="form-control" id="search-data" placeholder="Search for...">
                            <span class="input-group-btn">
                              <a class="btn btn-secondary search-btn" href="{{url('citizen-appointment')}}" type="button">Go!</a>
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
                                    <p class="text-muted font-13 m-b-30" style="padding-top: 15px">
                                     
                                    </p>
                                  </div>


                                </div>
                                 
                              

                                  <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%; padding-bottom: 30px">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>NIC No</th>
                                        <th>Service</th>
                                        <th>Details</th>
                                        <th>Submitted Date</th>
                                        <th>Total</th>
                                        <th>Payments</th>
                                        <th>Status</th>
                                        <th></th>
                                      </tr>
                                    </thead>
              
              

                                  



                                  
                                    <tbody>


                                      @foreach($appoinments as $ap)

                                        <tr>
                                          <td>{{$ap->id}}</td>
                                          <td>{{$ap->fname}} {{$ap->lname}}</td>
                                          <td>{{$ap->nic}}</td>
                                          <td>{{$ap->service_type}}</td>
                                          <td>
                                          @if($ap->service_type=='Certificate Services')
                                            {{$ap->certificate_type}}
                                          @elseif($ap->service_type=='Passports Service')
                                            {{$ap->passport_type}}
                                          @elseif($ap->service_type=='Appointment')
                                            {{$ap->appointment_type}}
                                          @elseif($ap->service_type=='NIC Services')
                                            {{$ap->nic_service_type}}
                                          @elseif($ap->service_type=='Vehicle Revenue Service')
                                            {{$ap->v_emission_type}}
                                          @endif
                                          </td>
                                          <td>{{date('Y-m-d',strtotime($ap->created_at))}}</td>
                                          <td>{{$ap->total}}</td>
                                          <td>{{$ap->service_payment==1?'Paid':'Unpaid'}}</td>
                                          <td>{{$ap->service_status==0?'Pending':($ap->service_status==1?'Cancelled':($ap->service_status==2?($ap->service_type=='Appointment'?'Rescheduled':'Rejected'):'Completed'))}}</td>
                                          <td>          
                                            
                                            <!-- Split button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown"
                                                  aria-haspopup="true" aria-expanded="false">
                                                  Actions
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" href="{{route('appoinments.view',$ap->id)}}">View</a>
                                                  <a class="dropdown-item complete-modal {{$ap->service_status>1?'disabled':''}}"  attr-id="{{$ap->id}}" attr-url="{{route('appoinments.complete',$ap->id)}}" data-toggle="modal" data-target="#completeModal">Complete</a>
                                                  
                                                  @if($ap->service_type=='Appointment')
                                                  <a class="dropdown-item reschedule-modal {{$ap->service_status>1?'disabled':''}}"  attr-id="{{$ap->id}}" attr-url="{{route('appoinments.reschedule',$ap->id)}}" data-toggle="modal" data-target="#rescheduleModal">Reschedule</a>
                                                  @else
                                                  <a class="dropdown-item reject-modal {{$ap->service_status>1?'disabled':''}}"  attr-id="{{$ap->id}}" attr-url="{{route('appoinments.reject',$ap->id)}}" data-toggle="modal" data-target="#rejectModal">Reject</a>
                                                  @endif
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item cancel-modal"  attr-id="{{$ap->id}}" attr-url="{{route('appoinments.cancelation',$ap->id)}}" data-toggle="modal" data-target="#cancelModal">Cancelation</a>
                                                </div>
                                              </div>

                                            <!-- Split button -->
                                          </td>
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
                        <form class="reservation-form" > 
                          <fieldset>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Appontment Date </label>
                              <div class="col-md-6 col-sm-6">
                                  <input id="NIC" class="form-control" required="required" type="Date">
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Appointment Time</label>
                              <div class="col-md-6 col-sm-6">
                                  <select id="appointment-time" class="form-control" required>
                                      @for ($hour = 8; $hour < 17; $hour++)
                                          @for ($minute = 0; $minute < 60; $minute += 15)
                                              @php
                                                  $time = sprintf("%02d:%02d", $hour, $minute);
                                              @endphp
                                              <option value="{{ $time }}">{{ $time }}</option>
                                          @endfor
                                      @endfor
                                  </select>
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




<!-- Complete Modal: start -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Complete Service</h5>
                
            </div>
            <div class="modal-body">
                <i class="fa fa-exclamation-circle me-2"></i> Do you want to Complete <span class="text-dark fe-600">Service .No <span id="service-id"></span> </span> ?
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Close</button>
                <form action="" class="complete-form" method="post">
                  @csrf
                    <button class="btn btn-primary" type="submit">Yes, Complete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end complete Model -->



<!-- Reject Modal: start -->
<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="" class="reject-form" method="post">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Reject Service</h5>
                
            </div>
            <div class="modal-body">
                <i class="fa fa-exclamation-circle me-2"></i> Do you want to Reject <span class="text-dark fe-600">Service .No <span id="service-id-rjct"></span> </span> ?
                <p>Please add reject note to complete the process..</p>
                <textarea class="form-control" required name="note" cols="1" rows="3" placeholder="Reject Note"></textarea>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Close</button>
                
                  @csrf
                    <button class="btn btn-primary" type="submit">Confirm</button>
                
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end reject Model -->


<!-- reschedule Modal: start -->
<div class="modal fade" id="rescheduleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="" class="reschedule-form" method="post">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Reschedule Appointment</h5>
                
            </div>
            <div class="modal-body">
                <i class="fa fa-exclamation-circle me-2"></i> Are you sure to Reschedule <span class="text-dark fe-600">Appointment .No <span id="service-id-rsch"></span> </span> ?
                <p>Please add new date to reschedule the appointment..</p>
                <input type="datetime-local" name="date" class="form-control" required>                
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Close</button>
                
                  @csrf
                    <button class="btn btn-primary" type="submit">Confirm</button>
                
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end reschedule Model -->


<!-- cancelation Modal: start -->
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="" class="cancelation-form" method="post">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Service Cancelation</h5>
                
            </div>
            <div class="modal-body">
                <i class="fa fa-exclamation-circle me-2"></i> Do you want to Cancel <span class="text-dark fe-600">Service .No <span id="service-id-cncl"></span> </span> ?
                <p>Please add cancelation note to complete the process..</p>
                <textarea class="form-control" required name="note" cols="1" rows="3" placeholder="Cancelation Note"></textarea>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Close</button>
                
                  @csrf
                    <button class="btn btn-primary" type="submit">Confirm</button>
                
            </div>
            </form>
        </div>
    </div>
</div>
<!-- end cancelation Model -->


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
   <script src="{{asset('assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>

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
    $(document).ready(function(){
      // complete
         $('.complete-modal').click(function(){
            var uid = $(this).attr('attr-id');
            var url = $(this).attr('attr-url');
           $('.complete-form').attr('action',url)
           $('#service-id').html(uid);
          
        });

        // reject
        $('.reject-modal').click(function(){
            var uid = $(this).attr('attr-id');
            var url = $(this).attr('attr-url');
           $('.reject-form').attr('action',url)
           $('#service-id-rjct').html(uid);
          
        });

        // reschedule
        $('.reschedule-modal').click(function(){
            var uid = $(this).attr('attr-id');
            var url = $(this).attr('attr-url');
           $('.reschedule-form').attr('action',url)
           $('#service-id-rsch').html(uid);
          
        });

        // cancelation
        $('.cancel-modal').click(function(){
            var uid = $(this).attr('attr-id');
            var url = $(this).attr('attr-url');
           $('.cancelation-form').attr('action',url)
           $('#service-id-cncl').html(uid);
          
        });

        $('.search-btn').on('click',function(event){
          $('.search-btn').attr('href', function(index, attr) {
            var data = $('#search-data').val();
            return attr + '?data=' + data;
          });
        });
         
    });
</script>

       

    </body>
</html> 