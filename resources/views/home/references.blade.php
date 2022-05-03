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
<div class="product">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="current_page">
                    <ul>
                        <li><a href="#">Settings</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! $setting->references !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 promo_col">
            <div class="promo_item">
                <div class="promo_image">
                    <img src="{{asset('assets')}}/images/home_slider_1.jpg" alt="">
                </div>
                <div class="promo_link"><a href="{{route('home')}}">View Now</a></div>
            </div>
        </div>


        @endsection
