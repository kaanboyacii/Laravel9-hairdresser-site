<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$data->name}} Show</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/base/vendor.bundle.base.css">
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
                <h4 class="card-title">{{$data->name}} Detail</h4>
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
                            <th style="width: 30px">Service</th>
                            <td>{{$data->service->title}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Name</th>
                            <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Comment</th>
                            <td>{{$data->comment}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Rate</th>
                            <td>{{$data->rate}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">IP Number</th>
                            <td>{{$data->IP}}</td>
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
                            <th style="width: 30px">Admin Note:</th>
                            <td>
                                <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="POST" class="forms-sample">
                                    @csrf
                                    <select name="status" id="">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    </textarea>
                                    <div class="card-footer">
                                        <button type="submit" class="btn-primary">Update Data</button>
                                    </div>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <a class="btn btn-danger" style="color: white;" href="{{route('admin.comment.destroy',['id'=>$data->id])}}" , onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
