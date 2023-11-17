@extends('Layouts/admin-layout')

@section('Content')



<body class="login" style=" text-shadow: none; color: aliceblue">

        <style>

          h1,p,a,body{

            background-color: #005555
          }
          .login_content form div a {

            background-color:#005555
          }

          .login_content form div a:hover {
          background-color: #3e9e9e; /* Change background color on hover */
          color: azure;
          }
          .login_content form div button:hover {
          background-color: #3e9e9e; /* Change background color on hover */
          color: azure;
          }
          .separator{
            background-color: #005555
          }
          
          
        </style>

  
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
      

        <div class="container">
          <div class="row ">

            @include('component.error-message')     

          </div>
          <div class="row align-self-center">

            @include('component.citizen-login-form')

            @include('component.citizen-register-form')
            
          </div>
        </div>


        


      </div>
    </div>
  </body>



@endsection