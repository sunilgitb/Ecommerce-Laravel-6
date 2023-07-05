@extends('frontend.master')
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 40%;
    }

    </style>

@section('content')


@php
 $featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(12)->get();
 $featuredbottom = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(3)->get();
 $hotbottom = DB::table('products')->where('status',1)->orderBy('id','desc')->skip(3)->limit(3)->get();
 $bestseller = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(4)->get();
 $manipedi = DB::table('products')->where('status',1)->orderBy('id','desc')->skip(4)->limit(4)->get();
 $manipedi = DB::table('products')->where('status',1)->orderBy('id','desc')->skip(4)->limit(4)->get();
 $lastingshine = DB::table('products')->where('status',1)->orderBy('id','desc')->skip(8)->limit(4)->get();
 $uvledgel = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(4)->get();
 $dingdong = DB::table('products')->where('status',1)->orderBy('id','desc')->skip(8)->limit(4)->get();
 $mylars = DB::table('products')->where('status',1)->orderBy('id','desc')->skip(2)->limit(4)->get();
 $newarrival = DB::table('products')
                ->join('categories', 'products.category_id', 'categories.id')
                ->select('products.*', 'categories.category_name')
                ->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(6)
                ->get();


 $category = DB::table('categories')->orderBy('id', 'desc')->limit(12)->get();
 $trend = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(8)->get();
 $trendbottom = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->skip(6)->limit(3)->get();
 $trendflash = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->skip(9)->limit(1)->get();

  $best = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(8)->get();
  $hotsale = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(2)->get();
  $specialoffer = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(1)->get();
  $bestrated = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(4)->get();
  $bestrated = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(4)->get();
  $bestrated = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(4)->get();
  $mainslider = DB::table('products')->where('status',1)->where('main_slider',1)->orderBy('id','desc')->limit(1)->get();
  $mainslider2 = DB::table('products')->where('status',1)->where('main_slider',1)->orderBy('id','desc')->skip(1)->limit(1)->get();
  $mainslider3 = DB::table('products')->where('status',1)->where('main_slider',1)->orderBy('id','desc')->skip(2)->limit(1)->get();
  $mainslider4 = DB::table('products')->where('status',1)->where('main_slider',1)->orderBy('id','desc')->skip(3)->limit(1)->get();

  $brand = DB::table('brands')->where('status', 1);
  $brands = DB::table('brands')->orderBy('id','desc')->limit(20)->get();;

 $hot = DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(3)
            ->get();

$productswithcategory = DB::table('products')
                ->join('categories', 'products.category_id', 'categories.id')
                ->select('products.*', 'categories.category_name')
                ->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(12)
                ->get();


@endphp


<main class="main home">
    <div class="home-top-container">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach($mainslider as $slider1)
              <div class="carousel-item active">
                <img src="{{ $slider1->image_one }}" alt="Los Angeles" >
              </div>
              @endforeach
              @foreach($mainslider2 as $slider2)
              <div class="carousel-item">
                <img src="{{ $slider2->image_one }}" alt="Chicago" >
              </div>
              @endforeach
              @foreach($mainslider3 as $slider3)
              <div class="carousel-item">
                <img src="{{ $slider3->image_one }}" alt="New York" >
              </div>
              @endforeach
              @foreach($mainslider4 as $slider4)
              <div class="carousel-item">
                <img src="{{ $slider4->image_one }}" alt="New York" >
              </div>
              @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

    </div><!-- End .home-slider -->

    <section class="product-panel mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Products</h2>
            </div>

            <div class="product-intro divide-line mt-2 mb-8">

                @foreach($productswithcategory as $ft)
                <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                    <figure>
                        <a href="{{ url('product/details/'.$ft->id.'/'.$ft->category_name) }}">
                            <img src="{{ $ft->image_one }}">
                        </a>
                        <div class="label-group">
                            {{-- <span class="product-label label-danger" style="color:red;background-color:rgb(81, 83, 66); font-size:18px">New</span> --}}
                            <span class="product-label label-danger " style="color:white; background-color:red;">
                                @php
                                $amount = $ft->selling_price - $ft->discount_price;
                                $discount = $amount/$ft->selling_price*100;

                                @endphp

                              {{ intval(-$discount) }}%</span>
                        </div>
                        <div class="btn-icon-group">
                            {{-- <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button> --}}

                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="{{ url('all_category2/'.$ft->id.'/'.$ft->category_name) }}" class="product-category">{{ $ft->category_name }}</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="{{ url('product/details/'.$ft->id.'/'.$ft->category_name) }}">{{ $ft->product_name }}</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top">0</span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">&#8377;{{ $ft->selling_price }}</span>
                            <span class="product-price">&#8377;{{ $ft->discount_price }}</span>
                        </div><!-- End .price-box -->
                        {{-- <div>
                            <button id="{{ $ft->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal" onclick="productview(this.id)">Add to Cart</button>
                        </div> --}}
                          <p class="btn-holder"><a href="{{ route('add.to.cart', $ft->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div><!-- End .product-details -->
                </div >
                @endforeach

            </div>

        </div>
    </section>
    <section home-products-intro mt-3 mb->
        <div class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    @foreach($mainslider as $slider1)
              <div class="carousel-item active">
                <a href="" ><img src="{{ $slider1->image_one }}" alt="Los Angeles" width="500" height="250"></a>
              </div>
              @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    @foreach($mainslider3 as $slider3)
              <div class="carousel-item active">
                <a href="" ><img src="{{ $slider3->image_one }}" alt="Los Angeles" width="500" height="250"></a>
              </div>
              @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    @foreach($mainslider4 as $slider4)
              <div class="carousel-item active">
                <a href="" ><img src="{{ $slider4->image_one }}" alt="Los Angeles" width="500" height="250"></a>
              </div>
              @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    @foreach($mainslider2 as $slider2)
              <div class="carousel-item active">
                <a href="" ><img src="{{ $slider2->image_one }}" alt="Los Angeles" width="500" height="250"></a>
              </div>
              @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="categories-container">
        <h2 style="margin:20px;">Top Categories</h2>

        <div class="container categories-carousel owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
            'loop' : false,
            'margin': 30,
            'nav': true,
            'dots': false,
            'autoHeight': true,
            'responsive': {
              '0': {
                'items': 2,
                'margin': 0
              },
              '576': {
                'items': 3
              },
              '768': {
                'items': 4
              },
              '992': {
                'items': 5
              },
              '1200': {
                'items': 6
              }
            }
        }">
        @foreach ($brands as $brand )
            <div class="category">

                {{-- <i class="icon-category-fashion"></i> --}}
                <span><a href="{{ url('product/details/'.$brand->id.'/'.$brand->brand_name) }}"><img src="{{ $brand->brand_logo }}"></a></span>
                <span>{{ $brand->brand_name }}</span>
            </div>

        @endforeach
    </section><!-- End .categories-container -->

    <section class="home-products-intro mt-3 mb-1">
        <div class="container">

            <div class="row row-sm">
                @foreach($hotsale as $ht)
                <div class="col-xl-6">
                    <div class="banner-product bg-grey" style="background-image: url('{{ asset( $ht->image_one )}}');background-position : 54%;">
                        <h2>{{( $ht->product_name )}}</h2>
                        <div class="mr-5">
                            <h4>Starting From<span class="price">&#8377;{{ $ht->discount_price }}</span></h4>
                            <button class="btn btn-primary">SHOP NOW</button>
                        </div>
                    </div>
                </div>

            @endforeach

            </div>



        </div>
    </section>
    <section>

        <div class="home-top-container">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach($mainslider as $slider1)
                  <div class="carousel-item active">
                    <img src="{{ $slider1->image_one }}" alt="Los Angeles" width="1100" height="500">
                  </div>
                  @endforeach
                  @foreach($mainslider2 as $slider2)
                  <div class="carousel-item">
                    <img src="{{ $slider2->image_one }}" alt="Chicago" width="1100" height="500">
                  </div>
                  @endforeach
                  @foreach($mainslider3 as $slider3)
                  <div class="carousel-item">
                    <img src="{{ $slider3->image_one }}" alt="New York" width="1100" height="500">
                  </div>
                  @endforeach
                  @foreach($mainslider4 as $slider4)
                  <div class="carousel-item">
                    <img src="{{ $slider4->image_one }}" alt="New York" width="1100" height="500">
                  </div>
                  @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>

        </div><!-- End .home-slider -->
    </section>
    <section class="product-panel">
        <div class="container">
            <div class="section-title">
                <h2>New Arrivals</h2>
            </div>
            <div class="product-intro divide-line mt-2 mb-8">
                @foreach($newarrival as $narrival)
                <div class="col-6 col-lg-2 col-md-3 col-sm-4 product-default inner-quickview inner-icon">
                    <figure>

                        <a href="product.html">
                            <img src="{{ $narrival->image_one }}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-danger " style="color:white; background-color:red;">
                                @php
                                $amount = $narrival->selling_price - $narrival->discount_price;
                                $discount = $amount/$narrival->selling_price*100;

                                @endphp

                              {{ intval(-$discount) }}%</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="{{ url('product/details/'.$narrival->id.'/'.$narrival->category_name) }}">{{ $narrival->category_name }}</a>
                            </div>
                            {{-- <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a> --}}
                            <button class="addwishlist" data-id="{{ $narrival->id }}" >
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                </button>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">{{ $narrival->product_name }}</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top">0</span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">&#8377;{{ $narrival->selling_price }}</span>
                            <span class="product-price">&#8377;{{ $narrival->discount_price }}</span>
                        </div><!-- End .price-box -->
                        <div>

                            {{-- <button  class="product_cart_button addcart" data-id="{{ $narrival->id }}">Add to Cart</button> --}}
                            <button class="btn btn-primary addcart" data-id="{{ $narrival->id }}" >Add To Cart</button>
                        </div>
                    </div><!-- End .product-details -->
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="home-products-intro bg-grey" id="specialOffer" style="padding: 4.5rem 0 2rem;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="section-title">
                        <h2>Special Offer</h2>
                    </div>
                    @foreach($specialoffer as $offer)
                    <div class="banner-product mt-3" style="background-image: url('{{ $offer->image_one }}');">
                        <div class="banner-content">
                            <h2>Powder Deals</h2>
                            <h4><span class="old-price">&#8377;{{ $offer->selling_price }}</span><span class="price">&#8377;{{ $offer->discount_price }}</span></h4>
                            <button class="btn btn-primary">SHOP NOW</button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-xl-8">
                    <div class="home-product-tabs">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="best-sellers-tab" data-toggle="tab" href="#best-sellers" role="tab" aria-controls="best-sellers" aria-selected="true">Best Sellers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="audio-speakers-tab" data-toggle="tab" href="#audio-speakers" role="tab" aria-controls="audio-speakers" aria-selected="false">Mani - Pedi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cameras-tab" data-toggle="tab" href="#cameras" role="tab" aria-controls="cameras" aria-selected="false">Lasting Shine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="lamps-tab" data-toggle="tab" href="#lamps" role="tab" aria-controls="lamps" aria-selected="false">UV/Led Gels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="computer-tab" data-toggle="tab" href="#computer" role="tab" aria-controls="computer" aria-selected="false">Ding Dong</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-phones-tab" data-toggle="tab" href="#mobile-phones" role="tab" aria-controls="mobile-phones" aria-selected="false">Mylars</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="best-sellers" role="tabpanel" aria-labelledby="best-sellers-tab">
                                <div class="row row-sm">
                                    @foreach ($bestseller as $bs )
                                    <div class="col-6 col-md-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="{{ $bs->image_one }}">
                                                </a>
                                                <div class="label-group">
                                                    <span class="product-label label-danger " style="color:white; background-color:red;">
                                                        @php
                                                        $amount = $bs->selling_price - $bs->discount_price;
                                                        $discount = $amount/$bs->selling_price*100;

                                                        @endphp

                                                      {{ intval(-$discount) }}%</span>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="category.html" class="product-category">{{ $bs->product_name }}</a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                </div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $bs->product_name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8377;{{ $bs->selling_price }}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .col-md-4 -->
                                    @endforeach
                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="audio-speakers" role="tabpanel" aria-labelledby="laudio-speakers-tab">
                                <div class="row row-sm">
                                    @foreach($manipedi as $mp)
                                    <div class="col-6 col-md-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="{{ $mp->image_one }}">
                                                </a>
                                                <div class="label-group">
                                                    <span class="product-label label-danger " style="color:white; background-color:red;">
                                                        @php
                                                        $amount = $mp->selling_price - $mp->discount_price;
                                                        $discount = $amount/$mp->selling_price*100;

                                                        @endphp

                                                      {{ intval(-$discount) }}%</span>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="category.html" class="product-category">{{ $mp->product_name }}</a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                </div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $mp->product_name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8377;{{ $mp->selling_price }}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .col-md-4 -->
                                    @endforeach

                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="cameras" role="tabpanel" aria-labelledby="cameras-tab">
                                <div class="row row-sm">
                                    @foreach($lastingshine as $ls)
                                    <div class="col-6 col-md-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="{{ $ls->image_one }}">
                                                </a>
                                                <div class="label-group">
                                                    <span class="product-label label-danger " style="color:white; background-color:red;">
                                                        @php
                                                        $amount = $ls->selling_price - $ls->discount_price;
                                                        $discount = $amount/$ls->selling_price*100;

                                                        @endphp

                                                      {{ intval(-$discount) }}%</span>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="category.html" class="product-category">{{ $ls->product_name }}</a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                </div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $ls->product_name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8377;{{ $ls->selling_price }}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .col-md-4 -->
                                    @endforeach

                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="lamps" role="tabpanel" aria-labelledby="lamps-tab">
                                <div class="row row-sm">
                                    @foreach($uvledgel as $ug)
                                    <div class="col-6 col-md-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="{{$ug->image_one }}">
                                                </a>
                                                <div class="label-group">
                                                    <span class="product-label label-danger " style="color:white; background-color:red;">
                                                        @php
                                                        $amount = $ug->selling_price - $ug->discount_price;
                                                        $discount = $amount/$ug->selling_price*100;

                                                        @endphp

                                                      {{ intval(-$discount) }}%</span>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="category.html" class="product-category">{{ $ug->product_name }}</a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                </div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $ug->product_name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8377;{{ $ug->selling_price }}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .col-md-4 -->
                                    @endforeach

                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="computer" role="tabpanel" aria-labelledby="computer-tab">
                                <div class="row row-sm">
                                    @foreach($dingdong as $ding)
                                    <div class="col-6 col-md-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="{{ $ding->image_one }}">
                                                </a>
                                                <div class="label-group">
                                                    <span class="product-label label-danger " style="color:white; background-color:red;">
                                                        @php
                                                        $amount = $ding->selling_price - $ding->discount_price;
                                                        $discount = $amount/$ding->selling_price*100;

                                                        @endphp

                                                      {{ intval(-$discount) }}%</span>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="category.html" class="product-category">{{ $ding->product_name }}</a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                </div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $ding->product_name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8377;{{ $ding->selling_price }}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .col-md-4 -->
                                    @endforeach

                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="mobile-phones" role="tabpanel" aria-labelledby="mobile-phones-tab">
                                <div class="row row-sm">
                                    @foreach( $mylars as $ml)
                                    <div class="col-6 col-md-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="{{ $ml->image_one }}">
                                                </a>
                                                <div class="label-group">
                                                    <span class="product-label label-danger " style="color:white; background-color:red;">
                                                        @php
                                                        $amount = $ml->selling_price - $ml->discount_price;
                                                        $discount = $amount/$ml->selling_price*100;

                                                        @endphp

                                                      {{ intval(-$discount) }}%</span>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="category.html" class="product-category">{{ $ml->product_name }}</a>
                                                    </div>
                                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                </div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $ml->product_name }}</a>
                                                </h2>
                                                <div class="price-box">
                                                    <span class="product-price">&#8377;{{ $ml->selling_price }}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .col-md-4 -->
                                    @endforeach

                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .home-product-tabs -->
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 mb-3">
        <div class="container">
            <div class="owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
                'loop' : false,
                'nav': false,
                'dots': true,
                'margin': 20,
                'autoHeight': true,
                'autoplay': true,
                'autoplayTimeout': 5000,
                'responsive': {
                  '0': {
                    'items': 2
                  },
                  '570': {
                    'items': 2
                  },
                  '830': {
                    'items': 3
                  },
                  '1220': {
                    'items': 4
                  }
                }
            }">
                @foreach($bestrated as $brated)
                <div class="home-product-list">
                    <img src="{{ $brated->image_one }}">
                    <div class="product-details">
                        <h4 class="product-title">
                            <a href="product.html">{{ $brated->product_name }}</a>
                        </h4>
                        <button  class="btn btn-dark">SHOP NOW</button>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4 class="info-title">FREE SHIPPING & RETURNS</h4>
                            <h4 class="info-subtitle">All Orders Over &#8377;599</h4>
                            <p>Free shipping and returns anywhere in India, all orders over &#8377;599.00 is always <b>free</b>.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="icon-money"></i>

                        <div class="info-box-content">
                            <h4 class="info-title">MONEY BACK GUARANTEE</h4>
                            <h4 class="info-subtitle">Safe & Fast</h4>
                            <p>An order from The Nail Shop, we provide a <b>money back guarantee</b> and up-to-date security.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4 class="info-title">ONLINE SUPPORT</h4>
                            <h4 class="info-subtitle">Need Assistence?</h4>
                            <p>The Nail Shop offers tones of tools our cusotmer support us superior, providing both <b>live chat and phone</b>.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div>
            </div>
        </div><!-- End .container -->
    </section><!-- End .info-boxes-container -->

    <section class="home-products-intro" id="topProducts" style="padding : 7rem 0 1rem;">
        <div class="container">
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="section-title mb-4">
                        <h4>Featured Products</h4>
                    </div>
                    @foreach($featuredbottom as $ft)
                    <div class="product-default left-details row row-sm mb-0">
                        <figure class="col-4">
                            <a href="product.html">
                                <img src="{{ $ft->image_one }}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-danger " style="color:white; background-color:red;">
                                    @php
                                    $amount = $ft->selling_price - $ft->discount_price;
                                    $discount = $amount/$ft->selling_price*100;

                                    @endphp

                                  {{ intval(-$discount) }}%</span>
                            </div>
                        </figure>
                        <div class="product-details col-8">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">{{ $ft->product_name }}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">&#8377;{{ $ft->selling_price }}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach

                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="section-title mb-4">
                        <h4>Top Selling Products</h4>
                    </div>
                    @foreach($hotbottom as $ht)
                    <div class="product-default left-details row row-sm mb-0">
                        <figure class="col-4">
                            <a href="product.html">
                                <img src="{{ $ht->image_one }}">
                            </a>
                            <div class="label-group">
                                {{-- <span class="product-label label-danger" style="color:red;background-color:rgb(81, 83, 66); font-size:18px">New</span> --}}
                                <span class="product-label label-danger " style="color:white; background-color:red;">
                                    @php
                                    $amount = $ft->selling_price - $ft->discount_price;
                                    $discount = $amount/$ft->selling_price*100;

                                    @endphp

                                  {{ intval(-$discount) }}%</span>
                            </div>
                        </figure>
                        <div class="product-details col-8">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">{{ $ht->product_name }}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">&#8377;{{ $ht->selling_price }}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach

                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="section-title mb-4">
                        <h4>On Sale Products</h4>
                    </div>
                    @foreach($trendbottom as $tb)
                    <div class="product-default left-details row row-sm mb-0">
                        <figure class="col-4">
                            <a href="product.html">
                                <img src="{{ $tb->image_one }}">
                            </a>
                            <div class="label-group">
                                {{-- <span class="product-label label-danger" style="color:red;background-color:rgb(81, 83, 66); font-size:18px">New</span> --}}
                                <span class="product-label label-danger " style="color:white; background-color:red;">
                                    @php
                                    $amount = $ft->selling_price - $ft->discount_price;
                                    $discount = $amount/$ft->selling_price*100;

                                    @endphp

                                  {{ intval(-$discount) }}%</span>
                            </div>

                        </figure>
                        <div class="product-details col-8">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title">
                                <a href="product.html">{{ $tb->product_name }}</a>
                            </h2>
                            <div class="price-box">
                                <span class="product-price">&#8377;{{ $tb->selling_price }}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach

                </div>
                <div class="col-sm-6 col-xl-3">
                    @foreach($trendflash as $tf)
                    <div class="product-default inner-quickview inner-icon center-details count-down">
                        <h2 class="product-name">Flash Deals</h2>
                        <figure>
                            <a href="product.html">
                                <img src="{{ $tf->image_one }}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-primary">SALE</span>
                                <span class="product-label label-dark">  @php
                                    $amount = $tf->selling_price - $tf->discount_price;
                                    $discount = $amount/$tf->selling_price*100;

                                  @endphp

                                  {{ intval($discount) }}%</span>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h2 class="product-title">
                                <a href="product.html">{{ $tf->product_name }}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price">&#8377;{{ $tf->selling_price }}</span>  not
                                <span class="product-price">&#8377;{{ $tf->discount_price }}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                        <div class="count-down-panel">
                            <h4>OFFER ENDS IN:
                                <span class="countdown" data-plugin-countdown data-plugin-options="{'date': '2022/06/10 12:00:00', 'numberClass': 'font-weight-extra-bold'}"></span>
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-3 mb-7" id="topBrands">
        <div class="section-title mb-5">
            <h4>Top Brands</h4>
        </div>
        <div class="partners-carousel owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
            'loop' : true,
            'nav': false,
            'dots': true,
            'autoHeight': true,
            'autoplay': true,
            'autoplayTimeout': 5000,
            'responsive': {
              '0': {
                'items': 2,
                'margin': 0
              },
              '480': {
                'items': 3
              },
              '768': {
                'items': 4
              },
              '992': {
                'items': 5
              }
            }
        }">
            <img src="frontend/images/logos/1.png" alt="logo">
            <img src="frontend/images/logos/2.png" alt="logo">
            <img src="frontend/images/logos/3.png" alt="logo">
            <img src="frontend/images/logos/4.png" alt="logo">
            <img src="frontend/images/logos/5.png" alt="logo">
        </div>
    </section>
</main><!-- End .main -->

<!-- Modal -->
<div class="modal fade" id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLavel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLavel">Product Quick View</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">
         <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <img src="" id="pimage" style="height: 220px; width: 200px;">
                  <div class="card-body">
                      <h5 class="card-title text-center" id="pname">  </h5>

                  </div>

              </div>

          </div>


  <div class="col-md-4">
              <ul class="list-group">
    <li class="list-group-item">Product Code:<span id="pcode"></span> </li>
    <li class="list-group-item">Category: <span id="pcat"></span></li>
    <li class="list-group-item">Subcategory: <span id="psub"></span></li>
    <li class="list-group-item">Brand:<span id="pbrand"></span> </li>
    <li class="list-group-item">Stock: <span class="badge" style="background: green;color: white;" > Available</span> </li>
  </ul>

          </div>

          <div class="col-md-4">

          <form method="post" action="{{ route('insert.into.cart') }}">
          @csrf

      <input type="hidden" name="product_id" id="product_id">

           <div class="form-group">
              <label for="exampleInputcolor">Color</label>
              <select name="color" class="form-control" id="color">

               </select>

           </div>

   <div class="form-group">
              <label for="exampleInputcolor">Size</label>
              <select name="size" class="form-control" id="size">

               </select>

           </div>


           <div class="form-group">
       <label for="exampleInputcolor">Quantity</label>
       <input type="number" class="form-control" name="qty" value="1">
           </div>


  <button type="submit" class="btn btn-primary">Add to Cart </button>

  </form>

          </div>



         </div>
        </div>




        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <script type="text/javascript">
        function productview(id){
            $.ajax({
            url: "{{ url('/cart/product/view/') }}/"+id,
            type: "GET",
            dataType:"json",
            success:function(data){
        $('#pcode').text(data.product.product_code);
        $('#pcat').text(data.product.category_name);
        $('#psub').text(data.product.subcategory_name);
        $('#pbrand').text(data.product.brand_name);
        $('#pname').text(data.product.product_name);
        $('#pimage').attr('src',data.product.image_one);
        $('#product_id').val(data.product.id);

        var d = $('select[name="color"]').empty();
        $.each(data.color,function(key,value){
        $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>');
            });

            var d = $('select[name="size"]').empty();
        $.each(data.size,function(key,value){
        $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>');
            });


            }
            })
        }


    </script>




 <script>
   $(document).ready(function(){
     $('.addcart').on('click', function(){
        var id = $(this).data('id');

        if (id) {
            $.ajax({
                url: " {{ url('/add/to/cart/') }}/"+id,
                type:"GET",
                datType:"json",
                success:function(data){
             const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })

             if ($.isEmptyObject(data.error)) {

                Toast.fire({
                  icon: 'success',
                  title: data.success
                })
             }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                })
             }


                },
            });

        }else{
            // alert('danger');
        }
     });

   });


</script>



<script type="text/javascript">

   $(document).ready(function(){
     $('.addwishlist').on('click', function(){
        var id = $(this).data('id');
        if (id) {
            $.ajax({
                url: " {{ url('add/wishlist/') }}/"+id,
                type:"GET",
                datType:"json",
                success:function(data){
             const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000,
                  timerProgressBar: true,
                  onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }
                })

             if ($.isEmptyObject(data.error)) {

                Toast.fire({
                  icon: 'success',
                  title: data.success
                })
             }else{
                 Toast.fire({
                  icon: 'error',
                  title: data.error
                })
             }


                },
            });

        }else{
            // alert('danger');
        }
     });

   });
</script>

@endsection

