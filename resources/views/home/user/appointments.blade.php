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
                    <hr><hr>
                    @include('home.user.usermenu')
                    <br>
                    <div class="contact_info_content">
                    </div>
                </div>
            </div>
            <!-- FAQ -->
            <div class="col-lg-7">
                <div class="faq">
                    <div class="contact_title">User Appointments</div>
                    <br>
                    <hr><hr>
                    <br>
                    <div class="faq_content">
                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Id
                                            </th>
                                            <th>
                                                Service
                                            </th>
                                            <th>
                                                Date & Time
                                            </th>
                                            <th>
                                                Price & Payment
                                            </th>
                                            <th>
                                                Detail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('service',['id'=>$rs->service_id])}}">{{$rs->service->title}}</a></td>
                                            <td>{{$rs->date}},{{$rs->time}}</td>
                                            <td>{{$rs->price}}$,{{$rs->payment}}</td>
                                            <td>
                                                <a href="{{route('userpanel.showappointments',['id'=>$rs->id])}}" class="btn btn-block btn-warning btn-sm">Show</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
