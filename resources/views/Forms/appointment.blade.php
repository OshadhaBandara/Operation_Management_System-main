@extends('Layouts/front-end-layout')

@section('Content')



    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">
            
                    <!-- Smart Wizard -->

                    <h1 style="text-align: center; padding-bottom: 15px "> Appointment Scheduler </h1>
                    <div >

                      
                        <form class="form-label-left" action="appointment_store" method="POST" enctype="multipart/form-data">
                            @csrf


                            <input type="text" hidden name="cid" value="{{session('cid')}}">
                            <input type="text" hidden name="service_type" value="appointment">+

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="first-name" name="First_Name" required="required" class="form-control" readonly value="{{session('cfname')}}">
                                    
                                    <div class="text-danger" style="text-align: center">
                                        <span>@error('First_Name') {{ $message }} @enderror</span>
                                    </div>
                                
                                </div>
                            </div>


                             <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" value="{{session('clname')}}" id="last-name" name="Last_Name" required="required" class="form-control" readonly>
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Last_Name') {{ $message }} @enderror</span>
                                    </div>
                                
                                </div>
                               
                            </div>

                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">NIC<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" value="{{session('cnic')}}" class="form-control" type="text" name="NIC" readonly inputmode="none">
                                
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('NIC') {{ $message }} @enderror</span>
                                    </div>
                                
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Email<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="birthday"  value="{{session('cemail')}}" class="form-control" name="Email" required="required" type="email">
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Email') {{ $message }} @enderror</span>
                                    </div>
                                
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Phone Number<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="birthday" value="{{session('cphone')}}" class="form-control" name="Phone" required="required" type="text">
                               
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Phone') {{ $message }} @enderror</span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Address<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea readonly id="Address" required="required" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-maxlength="100"  > {{session('caddress')}}</textarea>
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Address') {{ $message }} @enderror</span>
                                    </div>
                                
                                </div>
                            </div>


                          <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">District<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" value="{{session('cdistrict')}}" class="form-control" type="text" name="District" readonly inputmode="none">
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('District') {{ $message }} @enderror</span>
                                    </div>
                               
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="nic" class="col-form-label col-md-3 col-sm-3 label-align">Division<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="middle-name" value="{{session('cdivision')}}" class="form-control" type="text" name="Division" readonly inputmode="none">
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Division') {{ $message }} @enderror</span>
                                    </div>                                
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Appointment Type<span >*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="appointment_type">
                                        <option disabled selected>Choose option</option>
                                        <option>Land inquirys office</option>
                                        <option>Appointment with Grama Niladari</option>
                                        <option>Appointment with Samurdi Niladari</option>
                                        <option>Appointment with Sanwardana Niladari</option>
                                        
                                    </select>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('appointment_type') {{ $message }} @enderror</span>
                                    </div> 
                                </div>
                            </div>
                            


                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Appontment Date </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="NIC" class="form-control" required="required" type="Date" name="appointment_date">
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('appointment_date') {{ $message }} @enderror</span>
                                    </div> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Appointment Time</label>
                                <div class="col-md-6 col-sm-6">
                                    <select id="appointment-time" class="form-control" required name="appointment_time">
                                        @for ($hour = 8; $hour < 17; $hour++)
                                            @for ($minute = 0; $minute < 60; $minute += 15)
                                                @php
                                                    $time = sprintf("%02d:%02d", $hour, $minute);
                                                @endphp
                                                <option value="{{ $time }}">{{ $time }}</option>
                                            @endfor
                                        @endfor
                                    </select>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('appointment_time') {{ $message }} @enderror</span>
                                    </div> 
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Description <span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group"> 
                                        <textarea class="resizable_textarea form-control" placeholder="Please add the description" name="appointment_description"></textarea>
                                    </div>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('appointment_description') {{ $message }} @enderror</span>
                                    </div> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Attachment<span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="grama-niladari-certificate" name="appointment_attachment" accept=".pdf, .png, .jpg, .jpeg" required="required">
                                        <label class="custom-file-label" for="grama-niladari-certificate">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Drag and drop yourAttachment in PDF or image format here, or click to select a file.</small>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('appointment_attachment') {{ $message }} @enderror</span>
                                    </div> 
                                
                                </div>
                            </div>
                        
                            <div class="form-group row">
                                <div class="col-md-3 col-sm-3"></div> 
                                <div class="col-md-6 col-sm-6">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- End SmartWizard Content -->




        </div>



@endsection