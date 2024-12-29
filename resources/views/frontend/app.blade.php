<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta name="description" content="HEAT TRANSFER LABELS, Reflective Heat Transfer Label">
    <meta name="keywords" content="HEAT TRANSFER LABELS, Reflective Heat Transfer Label">
    <meta name="author" content="Theme Garbage">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('front') }}/img/favicon.png">
    <!-- Apple Touch Icons -->


    <!-- Stylesheets Start -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('front') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('front') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front') }}/css/animate.css">
    <link rel="stylesheet" href="{{asset('front') }}/css/main.css">
    <link rel="stylesheet" href="{{asset('front') }}/style.css">
    <link rel="stylesheet" href="{{asset('front') }}/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{asset('front') }}/css/icofont.min.css">
    <link rel="stylesheet" href="{{asset('front') }}/css/responsive.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Live Chat Start -->

<header>
    <!-- Header Topbar Start -->

    <!-- Main Bar Start -->
    <div class="hd-sec">
        <div class="container">
            <div class="row">
                <!-- Logo Start -->
                <div class="col-md-3 col-sm-12 col-xs-8">
                    <div class="logo">
                        <a href="{{asset('/') }}" class="site-logo"><img src="{{asset('front') }}/img/logo.png" alt=""/></a>
                        <a href="{{asset('/') }}" class="sticky-logo"><img src="{{asset('front') }}/img/logo.png" alt=""/></a>
                    </div>
                </div>
                <!-- Logo End -->


                <!-- Main Menu Start -->
                <div class="mobile-nav-menu"></div>
                <div class="col-md-9 col-sm-9 nav-menu">
                    <div class="menu">
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li class="active"><a href="{{ asset('/') }}">Home</a></li>
                                @foreach($main as $main_menu)
                                    <?php
                                    $submenus = App\Menu::where('root_id',$main_menu->id)->orderBy('sequence','ASC')
                                        ->where('sroot_id',NULL);
                                    if($submenus->count() > 0){
                                        $class='<i class="fa fa-chevron-down" aria-hidden="true"></i>';
                                        $class1='class="has dropdown-toggle"';
                                    }
                                    else{
                                        $class='';
                                        $class1='';

                                    }

                                    ?>
                                <li><a href="@if($main_menu->page_type =='url') {{$main_menu->external_link}} @else {{route('page.details',$main_menu->slug)}} @endif">{{$main_menu->menu_name}}</a>
                                    @if($submenus->count() > 0)
                                    <ul>
                                        @foreach($submenus->get() as $smenus)
                                            <?php $thirdmenus = App\Menu::where('sroot_id',$smenus->id)
                                                ->where('troot_id',NULL);?>
                                        <li><a href="@if($smenus->page_type =='url') {{$smenus->external_link}} @else {{route('page.details',$smenus->slug)}} @endif">{{ $smenus->menu_name }} </a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach


                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Main Menu End -->
            </div>
        </div>
    </div>
    <!-- Main Bar End -->
</header>
<!-- Header End -->

@yield('main')

<!-- Footer Section Start -->
<footer class="footer1">
    <!-- Footer Top Section Start -->
    <div class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 footer-widget-inner">
                    <div class="footer-wedget-one">
                        @foreach($objects2 as $object2)
                        <a href="{{ asset('/') }}"><img src="{{asset('/') }}uploads/object/{{ $object2->image }}" alt=""/></a>
                            {!! $object2->short !!}
                        @endforeach
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget-inner">
                    <div class="footer-widget-menu">
                        <h2>Useful Links</h2>
                        <ul>
                            @foreach(\App\Menu::orderBy('sequence','ASC')
                            ->where('footer1',1)->get() as $footer1)
                                <li><a href="@if($footer1->page_type =='url') {{$footer1->external_link}} @else {{route('page.details',$footer1->slug)}} @endif">{{$footer1->menu_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget-inner">
                    <div class="footer-widget-menu">
                        <h2>Our services</h2>
                        <ul>
                            @foreach(\App\Menu::orderBy('sequence','ASC')
                            ->where('footer2',1)->get() as $footer2)
                            <li><a href="@if($footer2->page_type =='url') {{$footer2->external_link}} @else {{route('page.details',$footer2->slug)}} @endif">{{$footer2->menu_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-sec">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="copy-right">
                            <p>&copy; coyright 2024 All right reserve by, Carnival Offset Printers Ltd</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copy-right text-right">
                            <p class="footer-copytext"> <a href="https://www.esoft.com.bd/" target="_blank"> Web Design Company :</a> <span style="font-family:cursive">e-<span style="color:red">S</span>oft</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section End -->
    </div>
    <!-- Footer Top Section End -->
</footer>
<!-- Footer Section End -->
<!-- Scripts Js Start -->
<script src="{{asset('front') }}/js/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="{{asset('front') }}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('front') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('front') }}/js/owl.carousel.min.js"></script>
<script src="{{asset('front') }}/js/owl.animate.js"></script>
<script src="{{asset('front') }}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('front') }}/js/jquery.counterup.min.js"></script>
<script src="{{asset('front') }}/js/modernizr.min.js"></script>
<script src="{{asset('front') }}/js/waypoints.min.js"></script>
<script src="{{asset('front') }}/js/jquery.meanmenu.min.js"></script>
<script src="{{asset('front') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('front') }}/js/custom.js"></script>
<!-- Scripts Js End -->
</body>

<!-- https://themeearth.com/tf/html/fincox/ -->
</html>