@extends('layouts.home')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/categories.css">
@section('title', 'Saloon Hairdresser')
@section('description')
Türkiye'nin bir numaralı erkek kuaför hizmeti
@endsection
@section('keywords','kuaför,berber,saç,sakal,bakım,erkek')

@section('description')
Türkiye'nin bir numaralı erkek kuaför hizmeti
@endsection
@section('content')
@include('home._menu')


<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_sorting clearfix">
                    <div class="view">
                        <div class="current_page">
                            <ul>
                                <li><a href="categories.html">Home</a></li>
                                <li><a href="categories.html">Services</a></li>
                                <li><a href="categories.html">{{$data->category->title}}</a></li>
                            </ul>
                        </div>
                        <br>
                        <div class="view_box box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
                        <div class="view_box detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                    <div class="sorting">
                        <br>
                        <br>
                        <ul class="item_sorting">
                            <li>
                                <span class="sorting_text">Show all</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <ul>
                                    <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
                                    <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                    <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Stars</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">Show</span>
                                <span class="num_sorting_text">12</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <ul>
                                    <li class="num_sorting_btn"><span>3</span></li>
                                    <li class="num_sorting_btn"><span>6</span></li>
                                    <li class="num_sorting_btn"><span>12</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row products_container">
            <div class="col">

                <!-- Products -->

                <div class="product_grid">

                    <!-- Product -->
                    @foreach($services as $rs)
                    <div class="product">
                        <div class="product_image"><img style="width:600px ;height:360px;border-radius:5px;" src="{{ Storage::url($rs->image)}}" alt=""></div>
                        <div class="rating rating_4" data-rating="4">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product_content clearfix">
                            <div class="product_info">
                                <div class="product_name"><a href="{{route('service',['id'=>$rs->id])}}">{{$rs->title}}</a></div>
                                <div class="product_price">{{$rs->price}}.00$</div>
                            </div>
                            <div class="product_options">
                                <div class="product_buy product_option"><img src="{{asset('assets')}}/images/shopping-bag-white.svg" alt=""></div>
                                <div class="product_fav product_option">+</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="row page_num_container">
            <div class="col text-right">
                <ul class="page_nums">
                    <li><a href="#">01</a></li>
                    <li class="active"><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#">04</a></li>
                    <li><a href="#">05</a></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Sidebar Right -->

    <div class="sidebar_right clearfix">

        <!-- Promo 1 -->
        <div class="sidebar_promo_1 sidebar_promo d-flex flex-column align-items-center justify-content-center">
            <div class="sidebar_promo_image" style="background-image: url({{asset('assets')}}/images/sidebar_promo_1.jpg)"></div>
            <div class="sidebar_promo_content text-center">
                <div class="sidebar_promo_title">30%<span>off</span></div>
                <div class="sidebar_promo_subtitle">On all shoes</div>
                <div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
            </div>
        </div>

        <!-- Promo 2 -->
        <div class="sidebar_promo_2 sidebar_promo">
            <div class="sidebar_promo_image" style="background-image: url({{asset('assets')}}/images/sidebar_promo_2.jpg)"></div>
            <div class="sidebar_promo_content text-center">
                <div class="sidebar_promo_title">30%<span>off</span></div>
                <div class="sidebar_promo_subtitle">On all shoes</div>
                <div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
            </div>
        </div>
    </div>

</div>

<!-- Extra -->



<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_content">
        <div class="newsletter_image" style="background-image:url({{asset('assets')}}/images/newsletter.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_subtitle">only the best</div>
                        <div class="section_title">subscribe for a 20% discount</div>
                    </div>
                </div>
            </div>
            <div class="row newsletter_container">
                <div class="col-lg-10 offset-lg-1">
                    <div class="newsletter_form_container">
                        <form action="#">
                            <input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>
                    <div class="newsletter_text">Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla. Aliquam egestas tempor leo.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
