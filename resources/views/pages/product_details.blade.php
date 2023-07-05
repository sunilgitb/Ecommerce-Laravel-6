@extends('frontend.master')
@section('content')


@php
                $featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(12)->get();
 @endphp


<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                <li class="breadcrumb-item active" aria-current="page">Headsets</li>
            </ol>
        </div><!-- End .container -->
    </nav>
    <div class="container">
        <!-- Modal -->
<div class="modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <form action="{{ url('/add-rating') }}" method="POST">
            @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rate : {{ $product->product_name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

        <div class="row">
            <div class="col-lg-9">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 product-single-gallery">
                            <div class="pin-wrapper" style="height: 500.5px;">
                                <div class="sticky-slider sticky-active sticky-absolute sticky-transition" style="border-bottom: 0px none rgb(118, 127, 132); position: absolute; top: 141.7px;">
                            <div class="product-slider-container product-item">

                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{ asset( $product->image_one ) }}" data-zoom-image="{{ asset( $product->image_one ) }}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{ asset( $product->image_two ) }}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{ asset( $product->image_three) }}"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{ asset( $product->image_one ) }}"/>
                                    </div>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img src="{{ asset( $product->image_one ) }}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{ asset( $product->image_three) }}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{ asset( $product->image_one ) }}"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="{{ asset( $product->image_three) }}"/>
                                </div>
                            </div>
                        </div></div>
                        </div><!-- End .col-lg-7 -->

                        <div class="col-lg-5 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">{{ $product->product_name }}</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->

                                    <a href="#" class="rating-link">( 6 Reviews )</a>
                                </div><!-- End .product-container -->

                                <div class="price-box">

                                    <span class="old-price">&#8377;{{ $product->selling_price }}</span>
                                    <span class="product-price">&#8377;{{ $product->discount_price }}</span>
                                    <span style="color: #000;">Inclusive of all taxes</span>
                                </div><!-- End .price-box -->
                                 <div class="product-desc product-single-filter1">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><label>Save Extra</label> with 3 offers</td>
                                            </tr>
                                            <tr>
                                                <td> <div class="product-action product-all-icons">
                                                    <div class="product-single-qty">
                                                        <input class="horizontal-quantity form-control" type="text">
                                                    </div><!-- End .product-single-qty -->

                                                    <a href="{{ route('show.cart') }}" class="paction add-cart" title="Add to Cart" style="background-color: red; color:white;">
                                                        <span >Add to Cart</span>
                                                    </a>
                                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                                        <span>Add to Compare</span>
                                                    </a>
                                                </div><!-- End .product-action --></td>
                                            </tr>
                                            <tr>
                                                <td><label>Cashback (2):</label> 5% back with <a class="offer-links" href="">ICICI Bank Credit card</a> for Prime-members. 3% back for everybody else | <a class="offer-links" href="">See All</a></td>
                                            </tr>
                                            <tr>
                                                <td><label>Bank Offer:</label> 5% Instant discount with HSBC Cashback card | <a class="offer-links" href="">Details</a></td>
                                            </tr>
                                            <tr>
                                                <td><label>Partner Offers (2):</label> Buy 2 or more and get 20% off on Qualifying items offered by <a class="offer-links" href="">BAD COMPANY</a> | <a class="offer-links" href="">See All</a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><label style="color: green;">In Stock</label></td>
                                            </tr>
                                            <tr>
                                                <td>Sold and fulfilled by <label>R Nail Lounge</label></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div><!-- End .product-desc -->

                                <div class="product-filters-container">
                                    <div class="product-single-filter">
                                        <label>Colors:</label>
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #b19970;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #11426b;"></a>
                                            </li>
                                        </ul>
                                    </div><!-- End .product-single-filter -->
                                </div><!-- End .product-filters-container -->

                                <div class="product-desc product-single-filter1">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label>Brand:</label>
                                                </td>
                                                <td>GLAM - India's #1 Nails Brand</td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    <label>Color Category:</label>
                                                </td>
                                                <td>Maroon</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Color Family:</label>
                                                </td>
                                                <td>Radish Maroon</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Color Shade:</label>
                                                </td>
                                                <td>Radish Maroon</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Finish Type:</label>
                                                </td>
                                                <td>Glossy</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Item Weight:</label>
                                                </td>
                                                <td>55 Grams</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Liquid Volumn:</label>
                                                </td>
                                                <td>15 Millilitres</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End .product-desc -->
                                  <div class="product-desc product-single-filter1">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label>USP:</label>
                                                </td>
                                                <td>Gel polish shine, No UV/LED Lamp required, no chipping, long lasting</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End .product-desc -->



                                <div class="product-single-share">
                                    <label>Share:</label>
                                    <!-- www.addthis.com share plugin-->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div><!-- End .product single-share -->
                            </div><!-- End .product-single-details -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p style="font-size:13px;">{{ $product->product_details }}</p>
                                {{-- <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> --}}
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <div class="product-tags-content">
                                <form action="#">
                                    <h4>Add Your Tags:</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" required>
                                        <input type="submit" class="btn btn-primary" value="Add Tags">
                                    </div><!-- End .form-group -->
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div><!-- End .product-tags-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <div class="collateral-box">
                                    <ul>
                                        <li>Be the first to review this product</li>
                                    </ul>
                                </div><!-- End .collateral-box -->

                                <div class="add-product-review">
                                    <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                    <p>How do you rate this product? *</p>
                                    <!-- Button trigger modal -->

                                   <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button>
                                    <form action="#">

                                        <div class="form-group">
                                            <label>Nickname <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label>Summary of Your Review <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group mb-2">
                                            <label>Review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div><!-- End .form-group -->

                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                    </form>
                                </div><!-- End .add-product-review -->
                            </div><!-- End .product-reviews-content -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->
            </div><!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
            <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                <div class="sidebar-wrapper">
                    <div class="widget widget-brand">
                        <a href="#">
                            <img src="assets/images/product-brand.png" alt="brand name">
                        </a>
                    </div><!-- End .widget -->

                    <div class="widget widget-info">
                        <ul>
                            <li>
                                <i class="icon-shipping"></i>
                                <h4>FREE<br>SHIPPING</h4>
                            </li>
                            <li>
                                <i class="icon-us-dollar"></i>
                                <h4>100% MONEY<br>BACK GUARANTEE</h4>
                            </li>
                            <li>
                                <i class="icon-online-support"></i>
                                <h4>ONLINE<br>SUPPORT 24/7</h4>
                            </li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="widget widget-banner">
                        <div class="banner banner-image">
                            <a href="#">
                                <img src="assets/images/banners/banner-sidebar.jpg" alt="Banner Desc">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .widget -->
                    <div class="widget widget-featured">
                        <h3 class="widget-title">Featured Products</h3>

                        <div class="widget-body">
                            <div class="owl-carousel widget-featured-products" data-toggle="owl" data-owl-options="{
                                'lazyLoad': true,
                                'nav': true,
                                'dots': false,
                                'autoHeight': true
                            }">
                            {{-- @php
                                $featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(6)->get();
                            @endphp --}}
                                <div class="featured-col">
                                    @foreach($featured as $ft)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ $ft->image_one }}">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">{{ $ft->product_name }}</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">{{ $ft->selling_price }}</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                    @endforeach

                                </div><!-- End .featured-col -->
                                @php
                                $featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(12)->get();
                            @endphp
                                <div class="featured-col">
                                    @foreach($featured as $ft)
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="product.html">
                                                <img src="{{ $ft->image_one }}">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">{{ $ft->product_name }}</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">{{ $ft->selling_price }}</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                    @endforeach
                                    {{-- <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="product.html">
                                                <img src="assets/images/products/product-5.jpg">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Luxury bag</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="product-price">$350.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div>
                                    <div class="product-default left-details product-widget">
                                        <figure>
                                            <a href="product.html">
                                                <img src="assets/images/products/product-6.jpg">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h2 class="product-title">
                                                <a href="product.html">Patient Ninja</a>
                                            </h2>
                                            <div class="ratings-container">
                                                <div class="product-ratings">
                                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div><!-- End .product-ratings -->
                                            </div><!-- End .product-container -->
                                            <div class="price-box">
                                                <span class="old-price">$35.00</span>
                                                <span class="product-price">$30.00</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                    </div> --}}
                                </div><!-- End .featured-col -->
                            </div><!-- End .widget-featured-slider -->
                        </div><!-- End .widget-body -->
                    </div><!-- End .widget -->
                </div>
            </aside><!-- End .col-md-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="featured-section">
        <div class="container">
            <h2 class="carousel-title">Featured Products</h2>

            <div class="featured-products owl-carousel owl-theme mb-2">
                @foreach($featured as $ft)
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{ $ft->image_one }}">
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
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                @endforeach
                {{-- <div class="product-default inner-quickview inner-icon">
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
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
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
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
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
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
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
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$49.00</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div> --}}
                </div>
            </div><!-- End .product-single-tabs -->
        </div><!-- End .container -->
    </div><!-- End .featured-section -->
</main><!-- End .main -->


@endsection


