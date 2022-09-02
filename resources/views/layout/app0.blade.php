
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

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
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="alpha/alpha/assets/images/users/login.jpg" alt="user-img" class="img-circle"> </a>
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
                                <li><a href="{{route('computers')}}">Computers</a></li>
                                <li><a href="{{route('stationaries')}}">Stationaries</a></li>
                                <li><a href="{{route('cameras')}}">CCTV Cameras</a></li>
                                <li><a href="{{route('mobiles')}}">Mobile Phones</a></li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"><i class="md md-layers"></i>Services</a>
                            <ul class="submenu megamenu">
                              <li>
                                  <ul>
                                      <li>
                                          <span>Cyber Services</span>
                                      </li>
                                      <li><a href="components-grid.html">Browsing</a></li>
                                      <li><a href="components-widgets.html">Lamination</a></li>
                                      <li><a href="components-nestable-list.html">Photocopy and Printing</a></li>
                                      <li><a href="components-range-sliders.html">Binding</a></li>
                                      <li><a href="components-masonry.html">Type Setting</a></li>
                                      <li><a href="components-animation.html">Animation</a></li>
                                      <li><a href="components-animation.html">Software installation</a></li>

                                  </ul>
                              </li>

                                <li>
                                    <ul>
                                        <li>
                                            <span>Software Development</span>
                                        </li>
                                        <li><a href="components-grid.html">Wep Programming</a></li>
                                        <li><a href="components-widgets.html">Java Programming</a></li>
                                        <li><a href="components-nestable-list.html">Android Programming</a></li>

                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <span>Computer Repairs</span>
                                        </li>
                                        <li><a href="form-elements.html">Screen</a></li>
                                        <li><a href="form-advanced.html">MotherBoard</a></li>
                                        <li><a href="form-validation.html">Power sytm</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <span>CCTV installation</span>
                                        </li>
                                        <li><a href="form-mask.html">Fresh installation</a></li>
                                        <li><a href="form-summernote.html">Maintenance</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="md md-class"></i>Alpha Tech Academy</a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Programming</a>
                                    <ul class="submenu">
                                        <li><a href="tables-basic.html">Web Programming</a></li>
                                        <li><a href="tables-datatable.html">Desktop programming</a></li>
                                        <li><a href="tables-editable.html">Android Programming</a></li>

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Computer Packages</a>
                                    <ul class="submenu">
                                        <li><a href="chart-flot.html">Word Processor</a></li>
                                        <li><a href="chart-morris.html">Spreadsheet</a></li>
                                        <li><a href="chart-chartjs.html">Presentation S/w</a></li>
                                        <li><a href="chart-peity.html">Publication S/W</a></li>
                                        <li><a href="chart-chartist.html">Internet & communication</a></li>
                                        <li><a href="chart-c3.html">Data Base</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Computer Repairs</a>
                                    <ul class="submenu">
                                        <li><a href="icons-glyphicons.html">Screen</a></li>
                                        <li><a href="icons-materialdesign.html">MotherBoard</a></li>
                                        <li><a href="icons-ionicons.html">Power system</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="md md-pages"></i>Projects</a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="page-starter.html">Youth Techy Empowerment</a></li>
                                        <li><a href="page-login.html">Environment Conservation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"><i class="md md-folder-special"></i>Alpha Paultry</a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="{{route('kuku')}}">Alpha Kuku</a></li>
                                        <li><a href="{{route('turkeys')}}">Turkeys</a></li>
                                        <li><a href="{{route('geese')}}">Geese</a></li>
                                        <li><a href="{{route('ducks')}}">Ducks</a></li>
                                        <li><a href="{{route('guinea')}}">Guinea Fowl</a></li>
                                        <li><a href="{{route('quils')}}">Quils</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="has-submenu">
                            <a href="#"><i class="md md-shopping-cart"></i>Career Point</a>
                            <ul class="submenu">
                                <li><a href="ecommerce-dashboard.html">Alpha Tech Staffs</a></li>
                                <li><a href="ecommerce-products.html">Vacant position</a></li>

                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu        -->
                </div>
            </div>
            </div>
        </header>
        <!-- End Navigation Bar-->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>


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
