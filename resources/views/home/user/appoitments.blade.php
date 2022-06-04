@extends('layouts.home')


@section('title', 'User Comments & Reviews')
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
                    <div class="contact_title">User Comments & Reviews</div>
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
                                                Name
                                            </th>
                                            <th>
                                                Subject
                                            </th>
                                            <th>
                                                Comment
                                            </th>
                                            <th>
                                                Rate
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td><a href="{{route('service',['id'=>$rs->service_id])}}">{{$rs->service->title}}</a></td>
                                            <td>{{$rs->user->name}}</td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->comment}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>
                                                <a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting, Are you sure ?')">Delete</a>
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
