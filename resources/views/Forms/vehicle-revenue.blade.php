@extends('Layouts/front-end-layout')

@section('Content')



    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">


            
                    <!-- Smart Wizard -->

                    <h1 style="text-align: center; padding-bottom: 15px ">Vehicle Revenue License Form</h1>
                    <div >

                      
                        <form class="form-label-left" action="vh_revenue_store" method="POST" enctype="multipart/form-data">
                            @csrf


                            <input type="text" hidden name="cid" value="{{session('cid')}}">
                            <input type="text" hidden name="service_type" value="Vehicle Revenue Service">

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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Service Type<span >*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="revenue_license_type">
                                        <option disabled selected>Choose option</option>
                                        <option>New Vehicle Revenue License</option>
                                        <option>Vehicle Revenue License Renewal</option>
                                        
                                    </select>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('revenue_license_type') {{ $message }} @enderror</span>
                                    </div> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">>Vehicle License<span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="vehicle_license" name="vehicle_license" accept=".jpeg, .png, .jpg" required="required">
                                        <label class="custom-file-label" for="vehicle_license">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Drag and drop your Vehicle License image format here, or click to select a file.</small>
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('vehicle_license') {{ $message }} @enderror</span>
                                    </div>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">>Vehicle Emission Testing Certificate <span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="birth-certificate" name="vehicle_emission" accept=".jpeg, .png, .jpg" required="required">
                                        <label class="custom-file-label" for="vehicle_emission">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Drag and drop your Vehicle Emission Testing Certificate in PDF or image format here, or click to select a file.</small>
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('vehicle_emission') {{ $message }} @enderror</span>
                                    </div>

                                </div>

                            </div>




{{-- 
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Expire Date </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="NIC" class="form-control" required="required" type="Date">
                                </div>
                            </div> --}}



                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="radio iradio_flat-green" >
                                        <label>
                                            <input type="radio" checked="" value="Deliver" id="optionsRadios1" name="delivary_method"> Deliver the Certificate
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="Collect" id="optionsRadios2" name="delivary_method"> Collect from Devitional Secretariat
                                        </label>
                                    </div>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('delivary_method') {{ $message }} @enderror</span>
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

        


        
    </div>

@endsection