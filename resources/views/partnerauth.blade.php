@extends('layout.app')
<style>
.form-2{
  width: 340px;
  margin: 60px auto 30px;
  padding: 15px;
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
.form-2 h1 .log-in{
  color: #6c6763;
  padding-right: 2px;
}
.form-2 h1 .sign-up{
  color: #ffb347;
  padding-left: 2px;
}
.form-2 .float{
  width: 50%;
  float: left;
  padding-top: 15px;
  border-top: 1px solid rgba(255,255,255,1);
}
.form-2 float:first-of-type{
  padding-right: 5px;
}
.form-2:last-of-type{
  padding-left: 5px;
}
.form-2 label{
  display: block;
  padding: 0 0 5px 2px;
  cursor: pointer;
  text-transform: uppercase;
  font-weight: 400;
  text-shadow: 0 1px 0 rgba(255,255,255,0.8);
  font-size:11px;
}
.form-2 label i{
  margin-right: :5px;
  display: inline-block;
  width: 10px;
}
.form-2 input[type=email],
.form-2 input[type=password]{
  font-family: 'lato', Calibri, Arial, sans-serif;
  font-size: 13px;
  font-weight: 400;
  width: 100%;
  padding: 5px;
  margin-bottom: 5px;
  border: 3px solid #ebe6e2;
  border-radius:5px;
  transition: all 0.3s ease-out;
}
.form-2 input[type=email]:hover,
.form-2 input[type=password]:hover{
  border-color: #CCC;
}
.form-2 label:hover ~ input{
  border-color: #CCC;
}
.form-2 input[type=email]:focus,
.form-2 input[type=password]:focus{
  border-color: #BBB;
  outline: none;
}
.clearfix:after{
  content: "";
  display: table;
  clear: both;
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
.form-2 p:last-of-type{
  clear: both;
}
.form-2 .opt{
  text-align: right;
  margin-right: 3px;
}
.form-2 label[for=showpassward]{
  display: inline-block;
  margin-bottom: 10px;
  font-size: 11px;
  font-weight: 400;
  text-transform: capitalize;
}
.form-2 input[type=checkbox]{
  vertical-align: middle;
  margin: -1px 5px 0 1px;
}
</style>
<script type="text/javascript">
</script>
@section('content')
  <form action="{{route('authenticatePartner')}}" class="form-2" method="post" align="center" enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <h1><a href="{{route('loginpartner')}}"><span class="log-in">login</span></a> or<a href="{{route('signuppartner')}}" <span class="sign-up">sign up</span></a></h1>
    <p class="float">
    <label for="login"><i class="icon-user"></i>Username</label>
      <input id="email" type="email" placeholder="Username or mail" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
</p>
<p class="float">
      <label for="password"><i class="icon-lock"></i>Password</label>
        <input id="password" type="password" placeholder="Enter password" name="password"  class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"><br></br>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</p>
<p class="clearfix">
  <a href="#" class="log-facebook">Log in with Facebook</a>
        <input type="submit" name="submit" value="Log in">
      </p>
      </form>


@endsection
