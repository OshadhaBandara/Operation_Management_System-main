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
                                                <h2> Appointment Complete Form</h2>
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
                                            
                                            <!-- Appointment fields -->



                                                
                                                <div style="padding-top: 50px">

                                                  
                            
                                                    <div class="x_content">


                            
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Note</label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <textarea id="Address" class="form-control" name="Address" data-parsley-trigger="keyup" data-parsley-maxlength="200"  ></textarea>
                                                            </div>
                                                        </div>
                            
                                                       
                            
                                                        <div class="form-group row">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Document<span >*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="grama-niladari-certificate" name="grama_niladari_certificate" accept=".pdf, .doc, .docx" required="required">
                                                                    <label class="custom-file-label" for="grama-niladari-certificate">Choose file</label>
                                                                </div>
                                                                <small class="form-text text-muted">Drag and drop your Vehicle License in PDF or image format here, or click to select a file.</small>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Document type<span >*</span></label>
                                                            <div class="col-md-6 col-sm-6">
                                                                <select class="form-control" name="document_type">
                                                                    <option value="" disabled selected>Select document type</option>
                                                                    <option value="pdf">NIC</option>
                                                                    <option value="doc">Grama Niladari Certificate</option>
                                                                    <option value="docx">Birth Certificate</option>
                                                                </select>
                                                                <small class="form-text text-muted">Select the document type for your Attachment.</small>
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                       


                                                    </div>

                            
                                                    <div class="col-md-9 col-sm-9  offset-md-5" style="padding-top: 50px">
                                                    
                                                    <button type="button" class="btn btn-primary">Back</button>
                                                   
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                  </div>





                                                    <!-- Appointment fields -->
                                            





                                                </div>
                                    </div>

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
