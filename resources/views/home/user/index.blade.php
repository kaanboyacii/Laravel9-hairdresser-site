@extends('layouts.home')


@section('title', 'User Panel')
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

            <!-- Contact Info -->
            <div class="col-lg-4">

                <div style="padding-left: 50px;" class="contact_info">
                    <div class="contact_title">User Menu</div>
                    <br>
                    <hr><hr>
                    <br>
                    <ul class="menu_mm">
                        <li><a style="color:black;" href="{{route('home')}}">My Profile</a></li>
                        <li><a style="color:black;" href="{{route('about')}}">My Appointments</a></li>
                        <li><a style="color:black;" href="{{route('contact')}}">My Reviews</a></li>
                        <li><a style="color:black;" href="{{route('references')}}">Checkout</a></li>
                        <li><a style="color:black;" href="{{route('faq')}}">My Services</a></li>
                        <li><a style="color:black;" href="{{route('faq')}}">Logout</a></li>
                        <!-- <li class="btn btn-secondary"><a href="contact.html">Login</a></li> -->
		        	</ul>
                    <div class="contact_info_content">
                    </div>
                </div>
            </div>
            <!-- FAQ -->
            <div class="col-lg-7">
                <div class="faq">
                    <div class="contact_title">User Profile</div>
                    <br>
                    <hr><hr>
                    <br>
                    <div class="faq_content">
                    @include('profile.show')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
