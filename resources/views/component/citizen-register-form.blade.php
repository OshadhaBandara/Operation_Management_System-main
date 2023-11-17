<div id="register" class="animate form registration_form"  style="width: 100%;">

  <section class="login_content">
    <form action="register_Citizen" method="POST" >
      @csrf

      <h1>Sign Up</h1>
      <div>
        <input type="text" class="form-control" placeholder="First Name" name="fname" value="{{old('fname')}}" required="" />
      </div>
      <div>
        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="{{old('lname')}}" required="" />
      </div>
      <div>
        <input type="text" class="form-control" placeholder="NIC Number" name="nic" value="{{old('nic')}}" required="" />
      </div>
      <div>
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" required="" />
      </div>
      <div>
        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" value="{{old('phone')}}" required=""/>
      </div>
      <br/>
       <div >
            <select class="form-control" name="district">
                <option disabled>Choose District</option>
                @foreach(config('districts') as $ds)
                                        <option value="{{$ds}}">{{$ds}}</option>
                                        @endforeach
            </select>
        </div>
        <br/>
        <div >
          <select class="form-control" name="division">
              <option disabled>Choose Divition</option>
              @foreach(config('gn_divisions') as $gn)
                                        <option value="{{$gn['name']}}">{{$gn['name']}}</option>
                                        @endforeach
              
          </select>
      </div>
      <br/>
      <div>
        <input type="password" class="form-control" placeholder="Password" name="password" required="" />
      </div>

      <div>
        <button class="btn btn-default submit"  style="color: aliceblue">Submit</button>
      </div>

      <div class="clearfix"></div>

      <div class="separator">
        <p class="change_link">Already a member ?
          <a href="#signin" class="to_register"> Log in </a>
        </p>

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