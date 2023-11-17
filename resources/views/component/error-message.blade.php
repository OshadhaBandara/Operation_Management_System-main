        {{--  new use success  & fail message --}}
        @if (Session::has('success'))
   
        <div class="alert alert-success" style="width: 100%;text-align: center;">{{Session::get('success')}} </div>
            
        @endif
      
        @if (Session::has('fail'))
        <div class="alert alert-danger" style="width: 100%;text-align: center;">{{Session::get('fail')}} </div>
        @endif
      {{--  new use success  & fail message --}}
        