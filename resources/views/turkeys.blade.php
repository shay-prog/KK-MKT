@extends('layout.app')
<style>
.card{
  margin-left: 18%;
  margin-right: 18%;
  width:auto;
}

.banner{
  width:100%;
  height:100vh;
  position: relative;
  overflow: hidden;
}
.slider{
  width: 100%;
  height: 100vh;
  position: absolute;
  top: inherit;

}
#bild{
  width: 100%;
  height: 100%;
  animation: zoom 3s linear infinite;
}
@@keyframes zoom {
  0%{
    transform:scale(1.3);
  } 15%{
    transform: scale(1);
  }85%{
    transform: scale(1);
  }100%{
    transform: scale(1.3);
  }
}
.overlay{
  width: 100%
  height:100av;
  position: absolute;
  top: 0;
}
.navbar{
  width: 85%;
  display: flex;
  align-items: center;
  margin: 35px auto;
}
.logo{
  flex-basis: 15%;
}
.logo img{
  width: 120px;
  cursor: pointer;
}
.menu-icons{
  flex: 1;
  align-items: center;
  text-align: right;
}
.menu-icons img{
  width: 20px;
  margin-left: 40px;
  cursor: pointer;
}
.content1{
  width: 60%;
  margin: 160px auto 0;
  text-align: center;
  color: #fff;
}
.content1 h1{
  font-size: 60px;
}
.content1 h3{
  width: 80%;
  margin: 20px auto 100px;
  font-weight: 100px;
  line-height: 25px;
}
</style>
<script type="text/javascript">
var i=0;
var images=["chicks","chicks1","chicks2","chicks3","chicks4","chicks5","chicks6"]
function picture_slider(){
  setInterval(switch_picture,3000);
}
function switch_picture(){
  i++;
  if(i>=images.length){
    i=0;
  };
  var bild = document.getElementById("bild");
  bild.src ="poultry/"+images[i]+".jpg";
}
</script>
@section('content')
<body onload="picture_slider();">

<div class="col d-flex justify-content-center">
<div class="card">
    <div class="card-box" style="width:90rem;">
      <h4 class="text-dark header-title m-t-0" align="center">Alpha Kuku</h4>
      <div class="banner">
        <div class="slider">
      <img id="bild" class="card-image-center" src=""  width=800 height=450 align="center"/>
    </div>
      <div class="card-body">
        <p class="card-text">welcome to Alpha Poultry Farm<p>
          <form method="get" action="{{route('eggsOrder')}}">
          <span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="chicks">Make Order</button></span>
          </form>
          </div>

    </div>
  </div>
</div>
</body>

@endsection
