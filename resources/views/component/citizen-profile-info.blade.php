                          <!-- start Profile info -->


                          <div class="x_panel" style="background-color: rgb(240, 240, 240)">
                            <div class="x_title">
                                <h2>Update Your Info </h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="profile-store" method="POST" class="form-horizontal form-label-left">

                                    @csrf

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" required="required" class="form-control " value="{{session('cfname')}}" name="fname">
                                            
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('fname') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name"  required="required" value="{{session('clname')}}" name="lname" class="form-control">
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('lname') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nic">NIC 
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="nic" name="nic" class="form-control" value="{{session('cnic')}}" disabled>
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('nic') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                                                        
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="birthday" value="{{session('cdob')}}" name="dob" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                            <script>
                                                function timeFunctionLong(input) {
                                                    setTimeout(function() {
                                                        input.type = 'text';
                                                    }, 60000);
                                                }
                                            </script>
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('dob') {{ $message }} @enderror</span>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                        <div class="col-md-6 col-sm-6 " style="padding-top: 10px;">
                                            <p>
                                                Male:
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M"  /> Femal:
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" /> Other:
                                                <input type="radio" class="flat" name="gender" id="genderF" value="O" />
                                            </p>
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('gender') {{ $message }} @enderror</span>
                                        </div>
                                    </div>




                                    <div class="item form-group">
                                        <label for="address" class="col-form-label col-md-3 col-sm-3 label-align">Address ( 100 max)</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea id="Address" required="required" class="form-control" name="address" data-parsley-trigger="keyup" data-parsley-maxlength="100">{{ session('caddress') }}</textarea>
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('address') {{ $message }} @enderror</span>
                                        </div>
                                    </div>



                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone-number">Phone Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="phone-number" value="{{session('cphone')}}" name="phone" required="required" class="form-control">
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('phone') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="email" name="email" value="{{session('cemail')}}" required="required" class="form-control">
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('email') {{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nic">District 
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="nic" name="district" class="form-control" value="{{session('cdistrict')}}" disabled>
                                        </div>
                                        
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nic">Division 
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="nic" name="division" class="form-control" value="{{session('cdivision')}}" disabled>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Password">Password <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="Password" id="Password" name="password" required="required" class="form-control">
                                        </div>
                                        <div class="text-danger">
                                            <span>@error('password') {{ $message }} @enderror</span>
                                        </div>
                                    </div>



                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                           
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>


                          <!-- Profile info -->
