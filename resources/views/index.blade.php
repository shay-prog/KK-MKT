<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
@extends('layout.app')
<style>
.banner1{
  width:100%;
  height:100vh;
  position: relative;
  overflow: hidden;
}
.slider1{
  width: 100%;
  height: 80vh;
  position: absolute;
  top: inherit;

}
#slideImg{
  width: 100%;
  height: 80vh;
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
  text-align: center;
}
.menu-icons img{
  width: 20px;
  margin-left: 40px;
  cursor: pointer;;
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
  if(i>len-1){
    i=0;
  }
  slideImg.src = images[i]
  i++;
  setTimeout('slider()',3000);
}
</script>
@section('content')
<body onload="picture_slider();">

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">AlphaTech</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Home</h4>
                    </div>
                </div>
            </div>

<!-- end row-->

<div class="banner1">
<div class="slider1">
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="../assets/images/products/product-2.png" id="slideImg" alt="product-pic" class="img-fluid" />
            </div>
            <div class="overlay">

              <div class="content1">
                <h1>Welcome to Alpha Poultry Farm</h1>
                <h3> we care much about the qaulity of service we give to our clients</h3>
              </div>
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Biblio Plastic Armchair</a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 23 pcs</span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            $98
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->





<br></br>


    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>
            <div class="banner">
            <div class="slider">
            <div class="bg-light">
                <img src="../assets/images/products/product-3.png" alt="product-pic" class="img-fluid" />
            </div>
          </div>
        </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Alpha Eggs:Kenbro,Kruilures,Broilures,Pure kienyeji</a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted">
                          <form method="get" action="{{route('eggsOrder')}}">
                          <span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="chicks">Make Order</button></span>
                          </form>
                        </span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            Ksh 20
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="banner">
              <div class="slider">
            <div class="bg-light">
                <img id="bild" class="card-image-center" src="poultry/chicks.jpg" />
            </div>
          </div>
        </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Alpha Chicks: One Day, Two weeks, one Month, Two months, Three months and four Months old </a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted">
                          <form method="get" action="{{route('eggsOrder')}}">
                          <span data-plugin="counterup"><button type="submit" name="action" class="btn btn-success btn-rounded waves-effect waves-light" value="chicks">Make Order</button></span>
                          </form>
                        </span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            Ksh 100
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
<!-- end row-->


<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="../assets/images/products/product-5.png" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">The butterfly chair</a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 25 pcs</span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            $49
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="../assets/images/products/product-6.png" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Dining Chairs</a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 39 pcs</span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            $19
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="../assets/images/products/product-7.png" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Plastic Armchair</a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 36 pcs</span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            $99
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="../assets/images/products/product-8.png" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Wing Chairs</a> </h5>
                        <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 128 pcs</span></h5>
                    </div>
                    <div class="col-auto">
                        <div class="product-price-tag">
                            $29
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <ul class="pagination pagination-rounded justify-content-end mb-3">
            <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
            <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div> <!-- end col-->
</div>
<!-- end row-->

</div> <!-- container -->

</div> <!-- content -->
    <!-- end row -->


    <!-- Footer -->
    <footer class="footer text-right">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    © 2020. All rights reserved.Developed by Alpha Tech ltd
                </div>
                <div class="col-xs-6">
                    <ul class="pull-right list-inline m-b-0">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

</body>

@endsection
