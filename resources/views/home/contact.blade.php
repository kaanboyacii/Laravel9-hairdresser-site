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
                        @include('home.messages')
                        <form action="{{route('storemessage')}}" id="review_form" class="review_form" method="POST">
                            @csrf
                            <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                <input type="text" class="review_form_input" name="name" placeholder="Name" required="required">
                                <input type="email" class="review_form_input" name="email" placeholder="E-mail" required="required">
                                <input type="phone" class="review_form_input" name="phone" placeholder="Phone" required="required">
                                <input type="text" class="review_form_input" name="subject" placeholder="Subject">
                            </div>
                            <textarea class="review_form_text" name="message" name="review_form_text" placeholder="Message"></textarea>
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
                                <div class="accordion_panel">
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
</div>

@endsection
