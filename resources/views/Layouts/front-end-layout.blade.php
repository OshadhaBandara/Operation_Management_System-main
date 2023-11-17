

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
          <!-- Bootstrap -->
          <link href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
          <!-- Font Awesome -->
          <link href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
          <!-- NProgress -->
          <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
          <!-- Dropzone.js -->
          <link href="{{asset('assets/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">

          
          <!-- Custom Theme Style   -->
          <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet">

          <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}" />
          <link rel="stylesheet" href=" {{asset('assets/fonts/flaticon/font/flaticon.css')}}" />

          <link href="{{asset('assets/css/tiny-slider.css')}}" rel="stylesheet"/>
          <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet" />
          <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>

          <style>


            .site-nav .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              color: #000000;
              background-color:#1e7777;
              width: 100%;
            }
            
          </style>
          

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title>
  </head>
  <body>
    


    @include('component/heder')


    @yield('Content')


    @include('component/footer')



    <!-- /.site-footer -->
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

        <!-- ----------------------------------------------------- -->

            <!-- jQuery -->
        <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{asset('assets/vendors/nprogress/nprogress.js')}}"></script>
        <!-- jQuery Smart Wizard -->
        <script src="{{asset('assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>

        <!-- jQuery autocomplete -->
	      <script src="{{asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>

       

          <!-- bootstrap-wysiwyg -->
          <script src="{{asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
          <script src="{{asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
          <script src="{{asset('assets/vendors/google-code-prettify/src/prettify.js')}}"></script>

          <!-- Select2 -->
          <script src="{{asset('assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
          <!-- Parsley -->
          <script src="{{asset('assets/vendors/parsleyjs/dist/parsley.min.js')}}"></script>



              <!-- Dropzone.js -->
            <script src="{{asset('assets/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>


            <!-- Custom Theme Scripts -->
            <script src="{{asset('assets/js/gen-master/custom.min.js')}}"></script>

          

  </body>
</html>

