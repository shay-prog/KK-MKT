@extends('layout.app')
<script type="text/javascript">
  function picture_slider(){
    setInterval(switch_picture,2000);
  }
    var bild = document.getElementById("bild")
    var i = 0;
    function switch_pictures(){
      bild.src = "poultry/"+(i++ % 7)+".jpg";
    }

</script>
@section('content')
<body onload="picture_slider();">

<div class="col d-flex justify-content-center">
    <div class="card-box" style="width: 25rem;" align="center">
        <h4 class="text-dark header-title m-t-0" align="center">Alpha Kuku</h4>

<img id="bild" class="card-image-center" src="poultry/chicks.jpg" alt="card image cap"> </a>
<div class="card-body">
  <p class="card-text">welcome to Alpha Poultry Farm<p>
    <a href="#" class= "btn btn-primary">Make Order</a>
    </div>
</div>
</div>
</body>
@endsection
