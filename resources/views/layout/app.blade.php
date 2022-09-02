
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel = "stylesheet" href="style.css">

        <link rel="shortcut icon" href="{{asset('alpha/alpha/assets/images/favicon_1.ico')}}">

        <title>Alpha Tech ltd</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{asset('alpha/alpha/assets/plugins/morris/morris.css')}}">

        <link href="{{asset('alpha/alpha/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('alpha/alpha/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('alpha/alpha/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('alpha/alpha/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('alpha/alpha/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('alpha/alpha/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('alpha/alpha/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>



    </head>
    <style>
    .card{
      margin-left: 18%;
      margin-right: 18%;
      width:auto;
    }

    .banner{
      width:100%;
      height:50vh;
      position: relative;
      overflow: hidden;
    }
    .slider{
      width: 100%;
      height: 50vh;
      position: absolute;
      top: inherit;

    }
    #bild{
      width: 100%;
      height: 100%;
      animation: zoom 4s linear infinite;
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


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="{{route('alphatech')}}" class="logo"><span>Alpha Tech<i
                                class="md md-album">Enterprises</i></span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown navbar-c-items">
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu active">
                            <a href="{{route('alphatech')}}"><i class="md md-dashboard"></i>Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="md md-color-lens"></i>Products</a>
                            <ul class="submenu">
                                <li><a href="{{route('eggs')}}">eggs</a></li>
                                <li><a href="{{route('turkeys')}}">chicks</a></li>
                                <li><a href="{{route('kienyeji')}}">kienyeji chicken(meat)</a></li>
                                <li><a href="{{route('broilors')}}">broilors</a></li>
                                <li><a href="{{route('manure')}}">manure</a></li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"><i class="md md-layers"></i>Services</a>
                            <ul class="submenu megamenu">
                              <li>
                                  <ul>
                                      <li>
                                          <span>Alpha Services</span>
                                      </li>
                                      <li><a href="{{route('incubation')}}">Eggs Incubation</a></li>
                                      <li><a href="components-widgets.html">poultry consultancy</a></li>
                                  </ul>
                              </li>

                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="md md-class"></i>Alpha poultry Academy</a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Poultry Health</a>
                                    <ul class="submenu">
                                        <li><a href="tables-basic.html">Vaccination</a></li>
                                        <li><a href="tables-datatable.html">Biosecurity</a></li>
                                        <li><a href="tables-editable.html"></a></li>

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Poultry Housing</a>
                                    <ul class="submenu">
                                        <li><a href="chart-flot.html">brooding</a></li>
                                        <li><a href="chart-morris.html">poultry cages</a></li>

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Veternary officer</a>
                                    <ul class="submenu">
                                        <li><a href="icons-glyphicons.html"></a></li>
                                        <li><a href="icons-materialdesign.html"></a></li>
                                        <li><a href="icons-ionicons.html"></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="md md-pages"></i>Projects</a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="page-starter.html">going Organic</a></li>
                                        <li><a href="page-login.html"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"><i class="md md-folder-special"></i>Alpha Paultry</a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                      <li><a href="{{route('turkeys')}}">Alpha Kuku</a></li>
                                        <li><a href="{{route('kuku')}}">Turkeys</a></li>
                                        <li><a href="{{route('geese')}}">Geese</a></li>
                                        <li><a href="{{route('ducks')}}">Ducks</a></li>
                                        <li><a href="{{route('guinea')}}">Guinea Fowl</a></li>
                                        <li><a href="{{route('quils')}}">Quils</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        @php
                        $in ="investor"
                        @endphp
                        @php
                        $pa = "partner"
                        @endphp
                        @php
                        $emp ="employee"
                        @endphp
                        <li class="has-submenu">
                            <a href="#"><i class="md md-shopping-cart"></i>Career Point</a>

                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Work with US</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('investors',$in)}}">Investor</a></li>
                                        <li><a href="{{route('partners',$pa)}}">Partner</a></li>
                                        <li><a href="{{route('employees',$emp)}}">Employee</a></li>

                                    </ul>
                                </li>
                                <li><a href="ecommerce-products.html">Alpha newsletter</a></li>
                              </ul>

                        </li>

                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
          @yield('content')
        </div>



        <!-- jQuery  -->
        <script src="{{asset('alpha/alpha/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/detect.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/fastclick.js')}}"></script>

        <script src="{{asset('alpha/alpha/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/waves.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('alpha/alpha/assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- jQuery  -->
        <script src="{{asset('alpha/alpha/assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

        <script src="{{asset('alpha/alpha/assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('alpha/alpha/assets/plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{asset('alpha/alpha/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

        <script src="{{asset('alpha/alpha/assets/pages/jquery.dashboard.js')}}"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="{{asset('alpha/alpha/assets/js/jquery.app.js')}}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>



    </body>
</html>
