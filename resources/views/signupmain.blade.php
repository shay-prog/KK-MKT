@extends('layout.app')
<style>
.form-2{
  width: 400px;
  margin: 100px auto 30px;
  padding: 3px;
  position: relative;
  background: #fffaf6;
  border-radius: 4px;
  color: #7e7975;
  box-shadow:
      0 2px 2px rgba(0,0,0,0.2),
      0 1px 5px rgba(0,0,0,0.2),
      0 0 0 12px rgba(255,255,255,0.4);
}
.form-2 h1{
  font-size: 15px;
  font-weight: bold;
  color: #bdb5aa;
  padding-bottom: 8px;
  border-bottom: 1px solid #EBE6E2;
  text-shadow: 0 2px 0 rgba(255,255,255,0.8);
  box-shadow: 0 1px rgba(255,255,255,0.8)
}
.form-2 h1 .log-in,
.form-2 h1 .sign-up{
  display: inline-block;
  text-transform: uppercase;
}
.form-2 label i{
  margin-right: :5px;
  display: inline-block;
  width: 15px;
}
.form-2 input[type=text],
.form-2 input[type=email],
.form-2 input[type=password]{
  font-family: 'lato', Calibri, Arial, sans-serif;
  font-size: 13px;
  font-weight: 400;
  width: 80%;
  padding: 5px;
  padding-left: 100px;
  margin-bottom: 5px;
  margin-left: 30px;
  border: 3px solid #ebe6e2;
  border-radius:5px;
  transition: all 0.3s ease-out;
}
.form-2 input[type=submit],
.form-2 .log-facebook{
  width: 49%;
  height: 38px;
  float: left;
  position: relative;
  box-shadow: inset 0 1px rgba(255,255,255,0.3);
  border-radius: 3px;
  cursor: pointer;
  font-family: 'Lato', Calibri, Arial, sans-serif;
  font-size: 14px;
  line-height: 38px;
  font-weight: bold;
}
.form-2 input[type=submit]{
  margin-left: 1px;
  background: linear-gradient(#fbd568, #ffb347);
  border: 1px solid #f4ab4c;
  color: #996319;
  text-shadow: 0px rgba(255,255,255,0.3);
}
.form-2 .log-facebook{
  margin-right: 1px;
  background: linear-gradient(#34a5cf,#2a8ac4);
  border: 1px solid #2b8bc7;
  color: #ffffff;
  text-shadow: 0 -1px rgba(0,0,0,0.3);
  text-decoration: none;
}
.form-2 input[type=submit]:hover,
.form-2 .log-facebook:hover{
  box-shadow:
      inset 0 1px rgba(255,255,255,0.3),
      insert 0 20px 40px rgba(255,255,255,0.15);
}
.form-2 input[type=submit]:active,
.form-2 .log-facebook:active{
  top: 1px;
}
.no-boxshadow .form-2 input[type=submit]:hover{
  background: #ffb347;
}
.no-boxshadow .form-2 .log-facebook:hover{
  background: #2a8ac4;
}
</style>
@section('content')
<form action="{{route('Register')}}"  method="post"class="form-2" align="center" enctype="multipart/form-data" >
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <h1><a href="{{route('loginmain')}}"><span class="log-in">login</span></a> or<a href="{{route('signupmain')}}" <span class="sign-up">sign up</span></a></h1>
  <p class="float">
  <label for="name"><i class="icon-user"></i>Full Name</label><br>
    <input id="fullname" type="text" placeholder="Full Name " class="form-control @error('fullname') is-invalid @enderror" name="fullname" required autocomplete="fullname" autofocus>
    @error('fullname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>
<p class="float">
<label for="email"><i class="icon-user"></i>Email</label><br>
  <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror"name="email" required autocomplete="email">
  @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</p>

<p class="float">
    <label for="password"><i class="icon-lock"></i>Password</label>
      <input id="password" type="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br></br>
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
</p>
<p class="float">
    <label for="confirmpassword"><i class="icon-lock"></i> Confirm Password</label>
      <input id="password-confirm" type="password" placeholder="Confirm password" name="password_confirmation"  class="form-control" required autocomplete="new-password"><br></br>
</p>

<p class="clearfix">
<a href="#" class="log-facebook" name="action" value="facebook">Log in with Facebook</a>
      <input type="submit" name="action" value="Register">
    </p>
    </form>
@endsection
