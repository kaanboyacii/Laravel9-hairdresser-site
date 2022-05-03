@extends('layouts.home')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/contact.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/styles/contact_responsive.css">
<script src="{{asset('assets')}}/js/contact_custom.js"></script>

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

<!-- Contact Form -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="current_page">
                    <ul>
                        <br><br><br>
                        <li><a href="#">Settings</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="review_form_container">
                    <div class="review_form_title">get in touch</div>
                    <div class="review_form_content">
                        <form action="#" id="review_form" class="review_form">
                            <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                <input type="text" class="review_form_input" placeholder="Name" required="required">
                                <input type="email" class="review_form_input" placeholder="E-mail" required="required">
                                <input type="text" class="review_form_input" placeholder="Subject">
                            </div>
                            <textarea class="review_form_text" name="review_form_text" placeholder="Message"></textarea>
                            <button type="submit" class="review_form_button">send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Text -->

<div class="contact_text">
    <div class="container">
        <div class="row">

            <!-- Contact Info -->
            <div class="col-lg-5">

                <div class="contact_info">
                    <div class="contact_title">contact info</div>
                    <div class="contact_info_content">
                        {!! $setting->contact !!}
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div class="col-lg-7">
                <div class="faq">
                    <div class="contact_title">faq</div>
                    <div class="faq_content">
                        <!-- Accordions -->
                        <div class="accordions">

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center">
                                    <div>Lorem ipsum dolor sit amet, consectetur?</div>
                                </div>
                                <div class="accordion_panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center">
                                    <div>Ipsum dolor sit amet, consectetur?</div>
                                </div>
                                <div class="accordion_panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center active">
                                    <div>Proin eu dui porta, pretium metus vitae?</div>
                                </div>
                                <div class="accordion_panel" style="max-height: 112px;">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo.</p>
                                </div>
                            </div>

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
        <div class="newsletter_image" style="background-image:url({{asset('assets')}}/images/newsletter.jpg)""></div>
			<div class=" container">
            <div class="row newsletter_row">
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
</div>

@endsection
