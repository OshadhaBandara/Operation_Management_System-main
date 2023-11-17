@extends('Layouts/front-end-layout')

@section('Content')

    <div class="content" style="margin-top: 80px; padding-top: 20px;">
        
        <div class="container" style="margin-top: 80px; padding-top: 20px;">

            @include('component.error-message') 
            
                    <!-- Smart Wizard -->

                    <h1 style="text-align: center; padding-bottom: 15px ">Certificates Requast</h1>
                    <div >

                      
                        <form class=" form-label-left" action="certificates-store" method="POST">
                            @csrf

                            <input type="text" hidden name="cid" value="{{session('cid')}}">
                            <input type="text" hidden name="service_type" value="certificate Services">

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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Address<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea readonly id="Address" required="required" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-maxlength="100"  > {{session('caddress')}}</textarea>
                                    
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Address') {{ $message }} @enderror</span>
                                    </div>
                                
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Certificate Type<span >*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="Certificate">
                                        <option disabled selected>Choose option</option>
                                        <option>Birth Certificates</option>
                                        <option>Marriag Certificates</option>
                                        <option>Grama Niladari Certificates</option>
                                    </select>
                                    <div class="text-danger">
                                        <span  style="text-align: center">@error('Certificate') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                <div class="col-md-6 col-sm-6">
                                    <div class="radio iradio_flat-green" >
                                        <label>
                                            <input type="radio" checked="" value="deliver" id="optionsRadios1" name="delivary-method"> Deliver the Certificate
                                        </label>
                                        
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="collect" id="optionsRadios2" name="delivary-method"> Collect from Devitional Secretariat
                                        </label>
                                        <div class="text-danger">
                                            <span  style="text-align: center">@error('Collection') {{ $message }} @enderror</span>
                                        </div>
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