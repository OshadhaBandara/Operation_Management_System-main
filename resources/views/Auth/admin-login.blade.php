@extends('Layouts/admin-layout')

@section('Content')

  <style>
        .login_content form div button
        {
              background-color:#2a3f54; /* Change background color on hover */
              color: white;
        }  
        .login_content form div button:hover 
        {
              background-color: #48525c; /* Change background color on hover */
              color: white;
        }  
        .login_content div .reset_pass {
          margin-top: 13px !important;
          margin-right: 39px;
          float: initial;
        }
  </style>

  <body class="login" style=" text-shadow: none; color: aliceblue">
      <div>
          <div class="animate form login_form" >
            <section class="login_content">

              <div class="login_wrapper">
                <div style="margin-bottom:  20px">
                {{-- custom error messages --}}
                @include('component.error-message') 
              </div>

              <form action="admin-auth" method="POST">
                @csrf
                <h1>Admin Login</h1>
                <div>
                  <input type="text" class="form-control" name="email" placeholder="Email" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" name="password" placeholder="password" required="" />
                </div>
                <div>
                  <button class="btn btn-default submit">Log in</button>
                  <a class="reset_pass" href="#">Lost your password?</a>
                </div>


                <div class="text-danger" style="text-align: left;margin-top: 20px;text-shadow: none;">

                  @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><span>{{ $error }}</span></li>
                        @endforeach
                    </ul>
                  @endif
                  
                </div>

                <div class="clearfix"></div>

                <div class="separator" style="padding-top: 15px">

                  <div class="clearfix"></div>
                  <br />

                  <div>
                    <h1>
                      <img src="{{asset('assets/images/Dice_Bridge_logo.png')}}"  style="padding-right: 15px">

                      DiviBredge</h1>
                    <p>©2016 All Rights Reserved by Heshan. Privacy and Terms</p>
                  </div>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
  </body>



@endsection