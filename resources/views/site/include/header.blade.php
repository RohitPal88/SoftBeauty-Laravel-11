<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="./index.html"><img src=" {{asset('img/logo-bg.png')}}" width="140px" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        {{-- <li class="active"><a href="./index.html">Shop</a></li> --}}
                        <li><a href="shop.html">Clothing</a>
                            <ul class="dropdown">
                                <li><a href="shop.html">Saree</a></li>
                                <li><a href="shop.html">Lehenga</a></li>
                                <li><a href="shop.html">Kurti</a></li>
                                <li><a href="shop.html">Anarkali</a></li>
                                <li><a href="shop.html">Gown</a></li>
                                <li><a href="shop.html">Lehenga Choli</a></li>
                                <li><a href="shop.html">Jacket</a></li>
                                <li><a href="shop.html">Western Special</a></li>
                                <li><a href="shop.html">All</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Accessories</a>
                            <ul class="dropdown">
                                <li><a href="shop.html">Sunglasses</a></li>
                                <li><a href="shop.html">Belts</a></li>
                                <li><a href="shop.html">Purse/Bag</a></li>
                                <li><a href="shop.html">All</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shoes</a>
                            <ul class="dropdown">
                                <li><a href="shop.html">Loafers</a></li>
                                <li><a href="shop.html">Pumps</a></li>
                                <li><a href="shop.html">Heels</a></li>
                                <li><a href="shop.html">Flats</a></li>
                                <li><a href="shop.html">All</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Stores</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a>
                    <a href="cart.html"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>3</span></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>