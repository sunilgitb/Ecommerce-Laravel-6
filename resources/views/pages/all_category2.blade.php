@extends('layouts.app')
@section('content')
<div class="header-bottom sticky-header">
    <div class="container">
        <nav class="main-nav">
            <ul class="menu sf-arrows">
                <li class="active"><a href="index.html">Home</a></li>
                <li>
                    <a href="category.html" class="sf-with-ul">Categories</a>
                    <div class="megamenu megamenu-fixed-width">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="menu-title">
                                            <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                        </div>
                                        <ul>
                                            <li><a href="category.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="menu-title">
                                            <a href="#">Variations 2</a>
                                        </div>
                                        <ul>
                                            <li><a href="#">Product List Item Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category-3col.html">3 Columns Products</a></li>
                                            <li><a href="category.html">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .col-lg-8 -->
                            <div class="col-lg-4">
                                <div class="banner">
                                    <a href="#">
                                        <img src="assets/images/menu-banner-2.jpg" alt="Menu banner">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->
                        </div>
                    </div><!-- End .megamenu -->
                </li>
                <li class="megamenu-container">
                    <a href="product.html" class="sf-with-ul">Products</a>
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
                <li>
                    <a href="#" class="sf-with-ul">Pages</a>

                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dashboard</a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="#" class="sf-with-ul">Features</a>
                    <ul>
                        <li><a href="#">Header Types</a></li>
                        <li><a href="#">Footer Types</a></li>
                    </ul>
                </li>
                <li class="float-right buy-effect"><a href="https://1.envato.market/DdLk5" target="_blank"><span>buy Porto</span></a></li>
                <li class="float-right special-effect"><a href="#">Special Offer</a></li>
            </ul>
        </nav>
    </div><!-- End .header-bottom -->
</div><!-- End .header-bottom -->
</header><!-- End .header -->

<main class="main">
<div class="banner banner-cat" style="background-image: url('assets/images/banners/banner.jpg');">
    <div class="container">
        <div class="banner-content">
            <h2 class="banner-subtitle text-left">start the revolution</h2>
            <h1 class="banner-title text-left">
                drone pro 4
            </h1>
            <h2 class="banner-foot text-left">from <span>$499</span></h2>
        </div><!-- End .banner-content -->
    </div>
</div><!-- End .banner -->

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Men</a></li>
            <li class="breadcrumb-item active" aria-current="page">Accessories</li>
        </ol>
    </div><!-- End .container -->
</nav>

<div class="container">
    <div class="mt-4"></div>
    <div class="row">
        <div class="col-lg-9">
            <nav class="toolbox">
                <div class="toolbox-left">
                    <div class="toolbox-item toolbox-sort">
                        <div class="select-custom">
                            <select name="orderby" class="form-control">
                                <option value="menu_order" selected="selected">Default Sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div><!-- End .select-custom -->

                        <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                    </div><!-- End .toolbox-item -->
                </div><!-- End .toolbox-left -->

                <div class="toolbox-item toolbox-show">
                    <label>Showing 1–9 of 60 results</label>
                </div><!-- End .toolbox-item -->

                <div class="layout-modes">
                    <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                        <i class="icon-mode-grid"></i>
                    </a>
                    <a href="category-list.html" class="layout-btn btn-list" title="List">
                        <i class="icon-mode-list"></i>
                    </a>
                </div><!-- End .layout-modes -->
            </nav>

            <div class="row row-sm">
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-1.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-2.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-3.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-4.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-5.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-6.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-7.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-8.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-9.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-10.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-11.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-12.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h2 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top">0</span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
            </div>

            <nav class="toolbox toolbox-pagination">
                <div class="toolbox-item toolbox-show">
                    <label>Showing 1–9 of 60 results</label>
                </div><!-- End .toolbox-item -->

                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><span>...</span></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                        <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div><!-- End .col-lg-9 -->

        <aside class="sidebar-shop col-lg-3 order-lg-first">
            <div class="sidebar-wrapper">
                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="false" aria-controls="widget-body-1" class="collapsed">Women</a>
                    </h3>

                    <div class="collapse hide" id="widget-body-1">
                        <div class="widget-body">
                            <ul class="cat-list">
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Watch Fashion</a></li>
                                <li><a href="#">Tees, Knits & Polos</a></li>
                                <li><a href="#">Pants & Denim</a></li>
                            </ul>
                        </div><!-- End .widget-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Men</a>
                    </h3>

                    <div class="collapse show" id="widget-body-2">
                        <div class="widget-body">
                            <ul class="cat-list">
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Watch Fashion</a></li>
                                <li><a href="#">Tees, Knits & Polos</a></li>
                                <li><a href="#">Pants & Denim</a></li>
                            </ul>
                        </div><!-- End .widget-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                    </h3>

                    <div class="collapse show" id="widget-body-3">
                        <div class="widget-body">
                            <form action="#">
                                <div class="price-slider-wrapper">
                                    <div id="price-slider"></div><!-- End #price-slider -->
                                </div><!-- End .price-slider-wrapper -->

                                <div class="filter-price-action">
                                    <div class="filter-price-text">
                                        Price:
                                        <span id="filter-price-range"></span>
                                    </div><!-- End .filter-price-text -->

                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div><!-- End .filter-price-action -->
                            </form>
                        </div><!-- End .widget-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Size</a>
                    </h3>

                    <div class="collapse show" id="widget-body-4">
                        <div class="widget-body">
                            <ul class="cat-list">
                                <li><a href="#">Small</a></li>
                                <li><a href="#">Medium</a></li>
                                <li><a href="#">Large</a></li>
                                <li><a href="#">Extra Large</a></li>
                            </ul>
                        </div><!-- End .widget-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Brand</a>
                    </h3>

                    <div class="collapse show" id="widget-body-5">
                        <div class="widget-body">
                            <ul class="cat-list">
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Calvin Klein (26)</a></li>
                                <li><a href="#">Diesel (3)</a></li>
                                <li><a href="#">Lacoste (8)</a></li>
                            </ul>
                        </div><!-- End .widget-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .widget -->

                <div class="widget">
                    <h3 class="widget-title">
                        <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
                    </h3>

                    <div class="collapse show" id="widget-body-6">
                        <div class="widget-body">
                            <ul class="config-swatch-list">
                                <li class="active">
                                    <a href="#">
                                        <span class="color-panel" style="background-color: #1645f3;"></span>
                                        <span>Blue</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="color-panel" style="background-color: #f11010;"></span>
                                        <span>Red</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="color-panel" style="background-color: #fe8504;"></span>
                                        <span>Orange</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="color-panel" style="background-color: #2da819;"></span>
                                        <span>Green</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- End .widget-body -->
                    </div><!-- End .collapse -->
                </div><!-- End .widget -->
            </div><!-- End .sidebar-wrapper -->
        </aside><!-- End .col-lg-3 -->
    </div><!-- End .row -->
</div><!-- End .container -->

<div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->

@endsection
