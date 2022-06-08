<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta chadataet="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Show</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendodata/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
    @yield('css')
    @yield('javascript')
</head>

<body>
    @extends('layouts.adminwindow')
    @yield('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Appointment Detail</h4>
                <br><br>
                <p class="card-description">
                    Details
                </p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 30px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Service & Service id</th>
                            <td>{{$data->service->title}} - {{$data->service_id}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Worker id</th>
                            <td>{{$data->worker_id}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Date & Time</th>
                            <td>{{$data->date}}, {{$data->time}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Price & Payment</th>
                            <td>{{$data->price}}$, {{$data->payment}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">IP</th>
                            <td>{{$data->IP}}</td>
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
                            <th style="width: 30px">Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Update Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Status</th>
                            <td>
                                <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="POST" class="forms-sample">
                                    @csrf
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>Accepted</option>
                                        <option>Completed</option>
                                        <option>Rejected</option>
                                    </select>
                                    </textarea>
                                    <div class="card-footer">
                                        <button type="submit" class="btn-primary">Update Data</button>
                                    </div>
                            </td>
                        </tr>
                    </table>
                    <!-- <button class="btn btn-secondary" type="button" onclick="window.location='{{ URL::previous() }}'">Cancel</button> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
