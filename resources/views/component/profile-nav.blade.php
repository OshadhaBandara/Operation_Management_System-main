{{-- @dd(session('cprofile_image')) --}}

<!-- top navigation -->

<div class="top_nav ">
    <div class="nav_menu">

        <nav class="nav navbar-nav">
        <ul class=" navbar-right">

          <li class="nav-item dropdown open" style="padding-left: 15px;" >
            
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false" style="margin-left: 10px">
              
              <img src="{{ !$documents->profile_image == null ? asset('storage/'.session('cnic').'/'.$documents->profile_image) : asset('storage/citizen/profile_image.png') }}" 
              alt="Profile Image">

              
              {{ !empty(session('cfname')) ? session('cfname') . '     ' .  session('clname') : 'welcome' }}

             
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

              <a class="dropdown-item"  href="logout_citizen"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
            </div>


          </li>

          @include('component.notification')

          <li style="padding-right: 15px"><a href="./">Home</a></li> 

        </ul>
      </nav>
    </div>
  </div>
<!-- /top navigation -->