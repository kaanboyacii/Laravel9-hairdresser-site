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
                    @include('home.user.usermenu')
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
