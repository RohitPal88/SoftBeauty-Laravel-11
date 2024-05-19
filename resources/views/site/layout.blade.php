<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">
        

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/elegant-icons.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/magnific-popup.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/nice-select.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/slicknav.min.css")}}" type="text/css">
        <link rel="stylesheet" href="{{ asset("css/style.css")}}" type="text/css">
</head>

    <body>

        <div id="preloder" style="display: none;">
            <div class="loader" style="display: none;">
                <img src="img/logo-bg.png" alt="SoftBeauty Logo" class="loader-logo">
                <div class="loader-circle"></div>
            </div>
        </div>
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__option">
                <div class="offcanvas__links">
                    <a href="#">Sign in</a>
                    <a href="#">FAQs</a>
                </div>
                <div class="offcanvas__top__hover">
                    <span>Profile <i class="arrow_carrot-down"></i></span>
                    <ul>
                        <li>Setting</li>
                        <li>Order</li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__nav__option">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="price">$0.00</div>
            </div>
            <div id="mobile-menu-wrap"><div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a><nav class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                        <ul>
                            <li class="active"><a href="./index.html" role="menuitem">Shop</a></li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="shop.html">Clothing</a>
                                <span class="slicknav_arrow">►</span></a><ul class="dropdown slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Saree</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Lehenga</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Kurti</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Anarkali</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Gown</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Lehenga Choli</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Jacket</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Western Special</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">All</a></li>
                                </ul>
                            </li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="shop.html">Accessories</a>
                                <span class="slicknav_arrow">►</span></a><ul class="dropdown slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Sunglasses</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Belts</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Purse/Bag</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">All</a></li>
                                </ul>
                            </li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="shop.html">Shoes</a>
                                <span class="slicknav_arrow">►</span></a><ul class="dropdown slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Loafers</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Pumps</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Heels</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">Flats</a></li>
                                    <li><a href="shop.html" role="menuitem" tabindex="-1">All</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html" role="menuitem">Stores</a></li>
                        </ul>
                    </nav></div></div>
            <div class="offcanvas__text">
                <p>Find Out New Trending just <a href="#">click here</a> .</p>
            </div>
        </div>
        @include('site.include.header')
        @yield('content')

        @include('site.include.footer')
   
        <div class="search-model" style="display: none;">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Js Plugins -->
        <script src="{{ asset("js/jquery-3.3.1.min.js")}}"></script>
        <script src="{{ asset("js/bootstrap.min.js")}}"></script>
        <script src="{{ asset("js/jquery.nice-select.min.js")}}"></script>
        <script src="{{ asset("js/jquery.nicescroll.min.js")}}"></script>
        <script src="{{ asset("js/jquery.magnific-popup.min.js")}}"></script>
        <script src="{{ asset("js/jquery.countdown.min.js")}}"></script>
        <script src="{{ asset("js/jquery.slicknav.js")}}"></script>
        <script src="{{ asset("js/mixitup.min.js")}}"></script>
        <script src="{{ asset("js/owl.carousel.min.js")}}"></script>
        <script src="{{ asset("js/main.js")}}"></script>
    </body>

</html>