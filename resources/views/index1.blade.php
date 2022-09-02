@extends('layout.app')
<style>
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
#slideImg{
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

@section('content')
<body onload="slider();">
  <div class="banner">
    <div class="slider">
      <img id="slideImg" src="../assets/images/products/product-2.png" >
    </div>
    <div class="overlay">
      <div class="navbar">
        <div class="logo">
          <img src="../assets/images/products/mmust logo.jpg">
        </div>
        <div class="menu-icons">
          <img src="../assets/images/products/mmust logo.jpg">
          <img src="../assets/images/products/mmust logo.jpg">
          <img src="../assets/images/products/mmust logo.jpg">
        </div>
      </div>
      <div class="content1">
        <h1>Welcome to Alpha Poultry Farm</h1>
        <h3>we care much about the qaulity of service we give to our clients</h3>
      </div>
    </div>
  </div>
  <script>
  var slideImg = document.getElementById("slideImg");
  var images = new array(
    "../assets/images/products/product-3.png",
    "../assets/images/products/product-1.png",
    "../assets/images/products/product-4.png",
    "../assets/images/products/product-5.png"
  );
  var len = images.length;
  var i = 0;
  function slider(){
    if(i> len-1){
      i=0;
    }
    slideImg.src = images[i]
    i++;
    setTimeout('slider()',3000);
  }
  </script>
</body>

@endsection
