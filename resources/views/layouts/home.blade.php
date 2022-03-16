<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('title') ">
    <meta name="keywords" content=" @yield('title') ">
    <meta name="author" content=" @yield('title') ">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/owl.carousel.min.css" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
</body>
@include('home._header')
<div class="slider_section banner_bg">
                <img src="{{ asset('assets')}}/images/banner.jpg">
                <div class="container">
                    <div class="text_box">
                        <span>Stylish Hair</span>
                        <h1>Cutting<br>
                for New Look</h1>
                        <a href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>

@include('home._About')
@include('home._service')
@include('home._pricing')
@include('home._ourbarbers')
@include('home._contact')
@include('home._footer')

</html>
