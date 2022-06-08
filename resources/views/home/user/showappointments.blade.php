@extends('layouts.home')


@section('title', 'User Appointments')
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
                    <hr>
                    <hr>
                    @include('home.user.usermenu')
                    <br>
                    <div class="contact_info_content">
                    </div>
                </div>
            </div>
            <!-- FAQ -->
            <div class="col-lg-7">
                <div class="faq">
                    <div class="contact_title">User Appointment Detail</div>
                    <br>
                    <hr>
                    <hr>
                    <br>
                    <div class="faq_content">
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 30px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Service</th>
                                    <td>
                                        <a href="{{route('service',['id'=>$data->service_id])}}">{{$data->service->title}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Date & Time</th>
                                    <td>{{$data->date}},{{$data->time}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Price</th>
                                    <td>{{$data->price}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Payment</th>
                                    <td>{{$data->payment}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Note</th>
                                    <td>{{$data->note}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Created Time</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                            </table>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
