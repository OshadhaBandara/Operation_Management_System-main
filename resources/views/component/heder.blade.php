


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>



<nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="/" class="logo m-0 float-start">
            
            <img src="{{asset('assets/images/Dice_Bridge_logo.png')}}" alt="Image" class="img-fluid" />

            DiviBidge
          </a>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
            <li class="active"><a href="/">Home</a></li>
            <li class="has-children">
              <a href="service">Services</a>
              <ul class="dropdown">
                <li><a href="certificates">Certificates Requast</a></li>
                <li>
                  <a href="nic">NIC</a>
                </li>
                <li>
                  <a href="passport">Passport</a>
                </li>
                <li>
                  <a href="vehicle-revenue">Vehicle Licence</a>
                </li>
                <li>
                  <a href="appointment">Appointment</a>
                </li>
              </ul>
            </li>
            <li><a href="Download">Downloads</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact-us">Contact Us</a></li>
            <li class="has-children">
              <a href="#">Account</a>
              <ul class="dropdown" style="width: 100%">
                
                @if (session('is_clogin') == true)
                  <li><a href="profile" style="display: inline; padding-bottom: 5px;">Profile</a></li>
                  <li><a href="logout_citizen" style="display: inline;padding-bottom: 5px;">Logout</a></li>
                @else
                  <li><a href="citizen-login#signin" style="display: inline;padding-bottom: 5px;">Sing In</a></li>
                  <li><a href="citizen-login#signup" style="display: inline;padding-bottom: 5px;">Sing Up</a></li>
                @endif
     
              </ul>
            </li>
          </ul>

          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
  
