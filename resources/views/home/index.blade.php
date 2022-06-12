@extends('layouts.home')

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
@include('home._home')
<!-- Promo -->

<div class="promo">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">only the best</div>
                    <div class="section_title">Service categories</div>
                </div>
            </div>
        </div>
        <div class="row promo_container">
            @foreach($categories as $rs)
            <!-- Promo Item -->
            <div class="col-lg-4 promo_col">
                <div class="promo_item">
                    <div class="promo_image">
                        <img src="{{asset('assets')}}/images/promo_1.jpg" alt="">
                        <div class="promo_content promo_content_1">
                            <div class="promo_title">{{$rs->title}}</div>
                            <div class="promo_subtitle"></div>
                        </div>
                    </div>
                </div>
                <div class="promo_link"><a href="{{route('categoryservices',['id'=>$rs->id])}}">View Now</a></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- New Arrivals -->

<div class="arrivals">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">only the best</div>
                    <div class="section_title">Our services</div>
                </div>
            </div>
        </div>
        <div class="row products_container">

            <!-- Product -->
            @foreach($servicelist1 as $rs)
            <div class="col-lg-4 product_col">
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
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Gallery -->

<div class="gallery">
    <div class="gallery_image" style="background-image:url({{asset('assets')}}/images/gallery.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="gallery_title text-center">
                    <ul>
                        <li><a href="#">#wish</a></li>
                        <li><a href="#">#wishinstagram</a></li>
                        <li><a href="#">#wishhair</a></li>
                    </ul>
                </div>
                <div class="gallery_text text-center">Let your self-confidence come with Saloon</div>
                <div class="button gallery_button"><a href="{{route('home')}}">Home</a></div>
            </div>
        </div>
    </div>
    <div class="gallery_slider_container">

        <!-- Gallery Slider -->
        <div class="owl-carousel owl-theme gallery_slider">

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="{{asset('assets')}}/images/gallery_1.jpg">
                    <img style="height: 150px;" src="{{asset('assets')}}/images/gallery_1.jpg" alt="">
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="{{asset('assets')}}/images/gallery_2.jpg">
                    <img style="height: 150px;" src="{{asset('assets')}}/images/gallery_2.jpg" alt="">
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="{{asset('assets')}}/images/gallery_3.jpg">
                    <img style="height: 150px;" src="{{asset('assets')}}/images/gallery_3.jpg" alt="">
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="{{asset('assets')}}/images/gallery_4.jpg">
                    <img style="height: 150px;" src="{{asset('assets')}}/images/gallery_4.jpg" alt="">
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="{{asset('assets')}}/images/gallery_5.jpg">
                    <img style="height: 150px;" src="{{asset('assets')}}/images/gallery_5.jpg" alt="">
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a class="colorbox" href="{{asset('assets')}}/images/gallery_6.jpg">
                    <img style="height: 150px;" src="{{asset('assets')}}/images/gallery_6.jpg" alt="">
                </a>
            </div>

        </div>
    </div>
</div>
<br>
<br>
<!-- Barbers -->

<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">only the best</div>
                    <div class="section_title">OUR STAFF</div>
                </div>
            </div>
        </div>
        <div class="row test_slider_container">
            <div class="col">

                <!-- Testimonials Slider -->
                <div class="owl-carousel owl-theme test_slider text-center">

                    <!-- Testimonial Item -->
                    <div class="owl-item">
                        <div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
                        <div class="test_content">
                            <div class="test_image"><img src="{{asset('assets')}}/images/staff_1.jpg" alt=""></div>
                            <div class="test_name">Jack Smith</div>
                            <div class="test_title">Barber</div>
                        </div>
                    </div>

                    <!-- Testimonial Item -->
                    <div class="owl-item">
                        <div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
                        <div class="test_content">
                            <div class="test_image"><img src="{{asset('assets')}}/images/staff_2.jpg" alt=""></div>
                            <div class="test_name">Davie Jones</div>
                            <div class="test_title">Barber</div>
                        </div>
                    </div>

                    <!-- Testimonial Item -->
                    <div class="owl-item">
                        <div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
                        <div class="test_content">
                            <div class="test_image"><img src="{{asset('assets')}}/images/staff_3.jpg" alt=""></div>
                            <div class="test_name">Christinne Sail</div>
                            <div class="test_title">Hair specialist</div>
                        </div>
                    </div>

                </div>

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
<br>
<br>

</div>
<br>
<br>
@endsection
