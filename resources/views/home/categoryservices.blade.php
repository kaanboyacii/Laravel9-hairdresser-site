@extends('layouts.home')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/categories.css">
@section('title', $category->title)
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
                        <div class="product_image">
                            <img style="width:600px ;height:360px;border-radius:5px;" src="{{ Storage::url($rs->image)}}" alt="">
                        </div>
                        @php
                        $average = $rs->comment->average('rate');
                        @endphp

                        <div class="
                            @if ($average==0) -o rating rating_0 @endif
							@if ($average>1 or $average==1) -o rating rating_1 @endif
							@if ($average>2 or $average==2) -o rating rating_2 @endif
							@if ($average>3 or $average==3) -o rating rating_3 @endif
							@if ($average>4 or $average==4) -o rating rating_4 @endif
							@if ($average>5 or $average==5) -o rating rating_5 @endif
						    review_rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            ({{$rs->comment->count('id')}})
                        </div>
                        <div class="product_content clearfix">
                            <div class="product_info">
                                <div class="product_name"><a href="{{route('service',['id'=>$rs->id])}}">{{$rs->title}}</a></div>
                                <div class="product_price">{{$rs->price}}.00$</div>
                            </div>
                            <div class="product_options">
                                <div class="product_fav product_option"><a style="color: black;" href="{{route('service',['id'=>$rs->id])}}">Book</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="newsletter_content">
            <div class="newsletter_image" style="background-image:url({{asset('assets')}}/images/newsletter.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">only the best</div>
                            <div class="section_title">subscribe for more campaigns</div>
                        </div>
                    </div>
                </div>
                <div class="row newsletter_container">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="newsletter_form_container">
                            <form action="{{route('registeruser')}}">
                                <button type="submit" style="width: 500px;" class="newsletter_button">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
