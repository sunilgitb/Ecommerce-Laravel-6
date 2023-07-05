@extends('frontend.master')

@section('content')
@php
    $posts = DB::table('posts')->get();
@endphp
@endphp
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="page-header">
        <div class="container">
            <h1>Blog</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @foreach($posts as $row)
                <article class="entry">
                    <div class="entry-media">
                        <a href="single.html">
                            <img src="assets/images/blog/post-1.jpg" alt="Post">
                        </a>
                    </div><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">{{ $row->created_at }}</span>
                            <span class="month">Jun</span>
                        </div><!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="single.html">@if(Session()->get('lang') == 'hindi')
								{{ $row->post_title_in }}
								@else
								{{ $row->post_title_en }}
								@endif</a>
                        </h2>

                        <div class="entry-content">
                            <p> @if(Session()->get('lang') == 'hindi')
							
                                {!! Str::limit($row->details_in, 200)  !!}
								@else
								{!! Str::limit($row->details_en, 200)  !!}
                               
								@endif </p>

                            <a href="single.html" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                        </div><!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>{{$row->created_at}}</span>
                            <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                            <span><i class="icon-folder-open"></i>
                                <a href="#">Haircuts & hairstyles</a>,
                                <a href="#">Fashion trends</a>,
                                <a href="#">Accessories</a>
                            </span>
                        </div><!-- End .entry-meta -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
                @endforeach

                

                <nav class="toolbox toolbox-pagination">
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

            <aside class="sidebar col-lg-3">
                <div class="sidebar-wrapper">
                    <div class="widget widget-search">
                        <form role="search" method="get" class="search-form" action="#">
                            <input type="search" class="form-control" placeholder="Search posts here..." name="s" required>
                            <button type="submit" class="search-submit" title="Search">
                                <i class="icon-search"></i>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div><!-- End .widget -->

                    <div class="widget widget-categories">
                        <h4 class="widget-title">Blog Categories</h4>

                        <ul class="list">
                            <li><a href="#">All about clothing</a></li>
                            <li><a href="#">Make-up &amp; beauty</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Fashion trends</a></li>
                            <li><a href="#">Haircuts &amp; hairstyles</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h4 class="widget-title">Recent Posts</h4>

                        <ul class="simple-entry-list">
                            <li>
                                <div class="entry-media">
                                    <a href="single.html">
                                        <img src="assets/images/blog/widget/post-1.jpg" alt="Post">
                                    </a>
                                </div><!-- End .entry-media -->
                                <div class="entry-info">
                                    <a href="single.html">Post Format - Video</a>
                                    <div class="entry-meta">
                                        April 08, 2018
                                    </div><!-- End .entry-meta -->
                                </div><!-- End .entry-info -->
                            </li>

                            <li>
                                <div class="entry-media">
                                    <a href="single.html">
                                        <img src="assets/images/blog/widget/post-2.jpg" alt="Post">
                                    </a>
                                </div><!-- End .entry-media -->
                                <div class="entry-info">
                                    <a href="single.html">Post Format - Image</a>
                                    <div class="entry-meta">
                                        March 23, 2016
                                    </div><!-- End .entry-meta -->
                                </div><!-- End .entry-info -->
                            </li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h4 class="widget-title">Tagcloud</h4>

                        <div class="tagcloud">
                            <a href="#">Fashion</a>
                            <a href="#">Shoes</a>
                            <a href="#">Skirts</a>
                            <a href="#">Dresses</a>
                            <a href="#">Bag</a>
                        </div><!-- End .tagcloud -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h4 class="widget-title">Archive</h4>

                        <ul class="list">
                            <li><a href="#">April 2018</a></li>
                            <li><a href="#">March 2018</a></li>
                            <li><a href="#">February 2018</a></li>
                        </ul>
                    </div><!-- End .widget -->


                    <div class="widget widget_compare">
                        <h4 class="widget-title">Compare Products</h4>

                        <p>You have no items to compare.</p>
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main><!-- End .main -->
@endsection
