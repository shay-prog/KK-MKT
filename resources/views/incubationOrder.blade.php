@extends('layout.login')
<style>
.form-2{
  width: 500px;
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
.form-2 input[type=cancel]{
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
.form-2 input[type=cancel]{
  margin-left: 1px;
  background: linear-gradient(#fbd568, #ffb347);
  border: 1px solid #f4ab4c;
  color: #996319;
  text-shadow: 0px rgba(255,255,255,0.3);
}
.form-2 input[type=submit]:hover,
.form-2 input[type=cancel]:hover{
  box-shadow:
      inset 0 1px rgba(255,255,255,0.3),
      insert 0 20px 40px rgba(255,255,255,0.15);
}
.form-2 input[type=submit]:active,
.form-2 input[type=cancel]:active{
  top: 1px;
}
.no-boxshadow .form-2 input[type=submit]:hover{
  background: #ffb347;
}
.no-boxshadow .form-2 input[type=cancel]:hover{
  background: #2a8ac4;
}

</style>
@section('content')
<form action="{{route('eggsOrderStore',$n)}}"  method="post" class="form-2" align="center" enctype="multipart/form-data" >
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <h4><span class="welcome">Dear<b> {{Auth::user()->fullname}}</b> <br> Kindly feed us with your information<br> for us to Organize for <b>{{$n}}</b> eggs</span></h4>

  <label for="title"> County:</label>
      <select style="width: 150px;height:30px"  class="countyName"name="county" id="county_id">
        <option value="0" disabled="true" selected="true">Select county</option>
        @foreach ($counties as $county)
            <option value="{{$county->countyName}}">{{ $county->countyName }}</option>
        @endforeach
    </select>

    &nbsp &nbsp<label for="title"> Constituency:</label>
    <select style="width: 150px; height:30px"  class="constituencyName" name="constituency">
    <option value="0" disabled="true" selected="true">Selected Constituency</option>
  </select><br></br>

<p class="float">
<label for="IdNumber"><i class=""></i>ID Number</label><br>
  <input id="idNumber" type="text" placeholder="ID Number" class="form-control @error('idNumber') is-invalid @enderror"name="idNumber" required>
  @error('idNumber')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</p>

<p class="float">
  <label for="contact"><i class=""></i>Contact</label><br>
    <input id="contact" type="text" placeholder="Phone Number" class="form-control @error('contact') is-invalid @enderror"name="contact" required>
    @error('contact')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>
<p class="float">
  <label for="numberOfEggs"><i class=""></i>Number of Eggs</label><br>
    <input type="text" id="NumberOfEggs" placeholder="Number of Eggs" class="form-control @error('numberOfEggs') is-invalid @enderror"name="numberOfEggs" required>
    @error('numberOfEggs')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>

<p class="float">
  <label for="date"><i class="icon-Date"></i>Booking Date</label><br>
    <input id="datepicker" type="text" placeholder="DD/MM/YYY" class="form-control @error('Date') is-invalid @enderror"name="Date" required>
    @error('Date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</p>

  <p class="clearfix">
    <button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="submit">Submit</button>
    <button type="submit" name="action" class="btn btn-warning btn-rounded waves-effect waves-light" value="cancel">Cancel</button>
      </p>
      </form>
</p>

    </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
  $(document).on('change','.countyName',function(){
   //console.log('its dynamic');
   var county_id = $(this).val();
   //console.log(count_id);
   var div = $(this).parent();
   var op=" ";
   $.ajax({
     url:'{!!URL::to('findConstituency')!!}',
     type: "GET",
    dataType: "json",
     data:{'id':county_id},
     success:function(data){
       //console.log('success');
       //console.log(data);
       //console.log(data.length);
       op+='<option value="0" selected disabled>Choose Constituency</option>';
       for(var i=0;i<data.length;i++){
         op+='<option value="'+data[i].id+'">'+data[i].constituencyName+'</option>';
       }
       div.find('.constituencyName').html(" ");
       div.find('.constituencyName').append(op);
     },
     error:function(){

     }

   });


  });

});

    </script>

    <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      startDate:'01/01/1920',
      format: 'dd-mm-yyyy',
      autoclose:true,
      endDate:'today',
      maxDate:'today',
      changeMonth: true,
     changeYear: true
    });
  });
  </script>

    <script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+".php";
}
</script>
@endsection
