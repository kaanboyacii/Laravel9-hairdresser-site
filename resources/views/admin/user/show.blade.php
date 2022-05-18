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
                            <th style="width: 30px">Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th style="width: 30px">Roles</th>
                            <td>
                            @foreach($data->roles as $role)
                              {{$role->name}}
                              <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" , onclick="return confirm('Delete Are You Sure ?')">[x]</a>
                            @endforeach
                            </td>
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
                            <th style="width: 30px">Add to role user</th>
                            <td>
                                <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="POST" class="forms-sample">
                                    @csrf
                                    <select name="role_id">
                                        @foreach($roles as $role)
                                           <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="card-footer">
                                        <button type="submit" class="btn-primary">Add Role</button>
                                    </div>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
