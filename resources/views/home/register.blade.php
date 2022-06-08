@extends('layouts.home')

@section('title', 'User Register')
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
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">User Registration</a></li>
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
                        @include('auth.register')
                    </div>
                </div>
            </div>
        </div>
        @endsection
