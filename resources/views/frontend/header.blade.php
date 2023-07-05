<style>
    logo1 img {
        display: none;
        max-width: 100%;
        height: auto;


    }

    .cart-dropdown .dropdown-toggle .minicart-icon {
        width: 25px;
        height: 20px;
        border: 2px solid #000;
        border-radius: 0 0 5px 5px;
        position: relative;
        opacity: .9;
        top: 0.2rem;
        display: block;
    }
</style>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left header-dropdowns">
                <div class="header-dropdown">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->



                <div class="header-dropdown">
                    <a href="#">ENGLISH</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">ENGLISH</a></li>
                            <li><a href="#">FRENCH</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <p class="welcome-msg">Welcom to The Nail Shop! </p>

                <div class="header-dropdown dropdown-expanded">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="my-account.html">MY ACCOUNT </a></li>
                            <li><a href="#">DAILY DEAL</a></li>
                            <li><a href="{{route('user.wishlist')}}">MY WISHLIST </a></li>
                            <li><a href="{{ url('blog/post/') }}">BLOG</a></li>
                            <li><a href="{{ url('admin/all/message') }}">Contact</a></li>
                            <li>@if(Auth::check())
                                <a href="{{ url('/home') }}" class="d-lg-show login sign-in"><i class="w-icon-account"></i>Profile</a>
                                @else

                                <a href="{{route('login')}}">Login/Register</a>

                                @endif
                            </li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="icon-menu"></i>
                </button>
                <a href="{{ '/' }}" class="logo1">
                    <img src="{{ asset('/frontend/assets/images/logo.png') }}" alt="Porto Logo">
                </a>
            </div><!-- End .header-left -->
            @php
            $category = DB::table('categories')->get();
            @endphp

            <div class="header-center">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="{{ route('product.search') }}" method="post">
                        @csrf
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="search" id="q" placeholder="Search for products..." required>
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Categories</option>
                                    @foreach($category as $row)
                                    <option value="4">{{ $row->category_name }}</option>
                                    @endforeach
                                </select>
                            </div><!-- End .select-custom -->
                            <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div><!-- End .headeer-center -->

            <div class="header-right">

                @guest

                @else
                @php
                $wishlist = DB::table('wishlists')->where('user_id',Auth::id())->get();
                @endphp
                <a href="#" class="porto-icon"><i class="icon icon-heart">{{ count($wishlist) }}</i></a>
                @endguest
                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count">{{ count((array) session('cart')) }}</span>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdownmenu-wrapper">
                            <div class="dropdown-cart-header">
                                <span>{{ Cart::count() }}</span>

                                <a href="{{ route('show.cart') }}">View Cart</a>
                            </div><!-- End .dropdown-cart-header -->
                            @php
                            $cart = Cart::content();
                            @endphp
                            <div class="dropdown-cart-products">
                                @foreach($cart as $row)
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="product.html">{{ $row->name  }}</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{ $row->qty  }}</span>
                                            x &#8377;{{ $row->price }}
                                        </span>
                                    </div><!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{ asset($row->options->image) }}" height="40px" width="40px">
                                        </a>

                                        <a href="{{ url('remove/cart/'.$row->rowId ) }}" class="btn-remove" title="Remove Product"><i class="icon-retweet"></i></a>
                                    </figure>
                                </div><!-- End .product -->
                                @endforeach


                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">&#8377;{{ Cart::subtotal() }}</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="{{ route('user.checkout') }}" class="btn btn-block">Checkout</a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdownmenu-wrapper -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header ">
        <div class="container">
            <nav class="main-nav" data-spy="affix" data-offset-top="197">
                <ul class="menu sf-arrows" style="line-height: 1.5 !important;">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="megamenu-container">
                        <a href="product.html" class="sf-with-ul">Products</a>
                        <div class="megamenu" style="width: auto !important;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="menu-title menutitle">
                                                <a href="{{ url('products/id') }}" id="text">Gel System</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-sidebar-left.html">Decor Gel</a></li>
                                                <li><a href="product-sidebar-left.html">Foil Gel</a></li>
                                                <li><a href="product-sidebar-left.html">Fiber Gel</a></li>
                                                <li><a href="product-sidebar-left.html">3D Top Gel</a></li>
                                                <li><a href="product-sticky-tab.html">Spider Gel</a></li>
                                                <li><a href="product-full-width.html">Painting Gel</a></li>
                                                <li><a href="product-full-width.html">Ultra Glitter Gel</a></li>
                                                <li><a href="product-full-width.html">Poly Gel</a></li>
                                                <li><a href="product-full-width.html">Blossom Gel</a></li>
                                                <li><a href="product-full-width.html">Emboss Gel</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-2">
                                            <ul>

                                                <li><a href="product-full-width.html">5D Gel</a></li>
                                                <li><a href="product-full-width.html">Stamping Gel</a></li>
                                            </ul>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Acrylic System</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-simple.html">3D Powder<span class="tip tip-hot">Hot!</span></a></li>
                                            </ul>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">UV/LED Gel Polishes</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-simple.html">Gel Polish<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product-sidebar-left.html">7D Gel Polish</a></li>
                                                <li><a href="product-sidebar-left.html">Cat Eye Gel Polish</a></li>
                                            </ul>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Nail Polishes</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-sidebar-left.html">Gel Effect</a></li>
                                            </ul>

                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-2">
                                            <ul>
                                                <li><a href="product-sidebar-left.html">Shimmer</a></li>
                                                <li><a href="product-sidebar-left.html">Mattelic</a></li>
                                                <li><a href="product-sidebar-left.html">Nail Paints</a></li>
                                                <li><a href="product-sidebar-left.html">Matte</a></li>

                                                <li><a href="product.html">Glitter</a></li>
                                                <li><a href="product-extended-layout.html">Stamping</a></li>
                                                <li><a href="product-full-width.html">French Manicure</a></li>

                                            </ul>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Removers</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Non-Acetone</a></li>
                                                <li><a href="product-extended-layout.html">Acetone</a></li>
                                                <li><a href="product-full-width.html">Nail Wipes</a></li>
                                            </ul>

                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-2">

                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Nail Care</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">11 In 1</a></li>
                                                <li><a href="product-extended-layout.html">Cutical Oil</a></li>
                                                <li><a href="product-full-width.html">Cuticle Removers </a></li>
                                                <li><a href="product-full-width.html">Personal Hygine</a></li>
                                            </ul>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Nail Brushes</a>
                                            </div>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Nail Buffers</a>
                                            </div>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Disposable Nail Products</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Foot Scrapper</a></li>
                                                <li><a href="product-extended-layout.html">Manicure Buffers</a></li>

                                            </ul>

                                        </div><!-- End .col-lg-4 -->

                                        <div class="col-lg-2">


                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Professional Tools Range</a>
                                            </div>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Nail Tips</a>
                                            </div>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Machinary</a>
                                            </div>
                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Essentails</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Glitter Powder</a></li>
                                                <li><a href="product-extended-layout.html">Nail Art Pens</a></li>
                                                <li><a href="product-full-width.html">Mylars </a></li>
                                                <li><a href="product-full-width.html">Nail Jewels</a></li>
                                                <li><a href="product-full-width.html">Swaroski Stone</a></li>
                                                <li><a href="product-full-width.html">Pallets</a></li>
                                            </ul>

                                        </div><!-- End .col-lg-4 -->

                                        <div class="col-lg-2">

                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Accessories</a>
                                            </div>

                                            <ul>
                                                <li><a href="product-full-width.html">Shatter Glass </a></li>
                                                <li><a href="product-full-width.html">Add Ons</a></li>
                                                <li><a href="product-full-width.html">Printing Foil</a></li>
                                            </ul>

                                            <div class="menu-title menutitle">
                                                <a href="#" id="text">Educational Range</a>
                                            </div>

                                        </div><!-- End .col-lg-4 -->

                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-8 -->


                            </div><!-- End .row -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li class="megamenu-container">
                        <a href="product.html" class="sf-with-ul">Categories</a>
                        <div class="megamenu">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Variations</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product.html">Inner Zoom</a></li>
                                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Variations</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                <li><a href="product-simple.html">Simple Product</a></li>
                                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Product Layout Types</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Default Layout</a></li>
                                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-8 -->
                                <div class="col-lg-4">
                                    <div class="banner">
                                        <a href="#">
                                            <img src="assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li class="megamenu-container">
                        <a href="product.html" class="sf-with-ul">Kits</a>
                        <div class="megamenu">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Variations</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product.html">Inner Zoom</a></li>
                                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Variations</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                <li><a href="product-simple.html">Simple Product</a></li>
                                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Product Layout Types</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Default Layout</a></li>
                                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-8 -->
                                <div class="col-lg-4">
                                    <div class="banner">
                                        <a href="#">
                                            <img src="assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li class="megamenu-container">
                        <a href="product.html" class="sf-with-ul">Nail Shop Exclusive</a>
                        <div class="megamenu">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Variations</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product.html">Inner Zoom</a></li>
                                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Variations</a>
                                            </div>
                                            <ul>
                                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                <li><a href="product-simple.html">Simple Product</a></li>
                                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="menu-title">
                                                <a href="#">Product Layout Types</a>
                                            </div>
                                            <ul>
                                                <li><a href="product.html">Default Layout</a></li>
                                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .col-lg-8 -->
                                <div class="col-lg-4">
                                    <div class="banner">
                                        <a href="#">
                                            <img src="assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu -->
                    </li>

                    <li class="float-right special-effect"><a href="#">Special Offer</a></li>
                </ul>
            </nav>
        </div><!-- End .header-bottom -->
    </div><!-- End .header-bottom -->
</header>