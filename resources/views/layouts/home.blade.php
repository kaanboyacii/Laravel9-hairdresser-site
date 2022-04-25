<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="John Doe">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{asset('assets')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="{{asset('assets')}}/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{asset('assets')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/product.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/product_responsive.css">
    <link href="{{asset('assets')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/categories.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/categories_responsive.css">

</head>

<body>
    <div class="super_container">
        @include('home._header')

        @section('content')
        @show

        @include('home._footer')
        @yield('foot')

</body>

</html>
