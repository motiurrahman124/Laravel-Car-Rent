@extends('master')
@section('content')
<div class="" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  role="form" action={{ route('registration') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
                </div>
                      
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                
                
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="{{url('/login')}}" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
@endsection