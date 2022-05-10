@extends('layouts.home')


@section('title', 'Saloon Hairdresser')
@section('description')
Türkiye'nin bir numaralı erkek kuaför hizmeti
@endsection
@section('keywords','kuaför,berber,saç,sakal,bakım,erkek')
@section('description')
Türkiye'nin bir numaralı erkek kuaför hizmeti
@endsection
@include('home._menu')

@section('content')
<br>
<br>
<br>
<div class="contact_text">
    <div class="container">
        <div class="row">
            <div class="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <div class="section_subtitle">Frequently Asked Questions</div>
                                <div class="section_title">FAQ</div>
                            </div>
                        </div>
                    </div>
                    <div class="row test_slider_container">
                        <div class="col">

                            <!-- Testimonials Slider -->
                            <div class="owl-carousel owl-theme test_slider text-center">
                                @foreach($datalist as $rs)
                                <!-- Testimonial Item -->
                                <div class="owl-item">
                                    <div class="test_text">{{$rs->question}}</div>
                                    <div class="test_content">
                                        <div class="test_name">Answer:</div>
                                        <div class="test_title">{!!$rs->answer!!}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
