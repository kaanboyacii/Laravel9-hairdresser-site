<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Comment</title>
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
    @include('admin._header')
    @include('admin._sidebar')
    @yield('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Comment List</h4>
                            <p class="card-description">
                                Comment List
                            </p>
                            <div class="table-responsive pt-3">
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
                                                Show
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->service->title}}</td>
                                            <td>{{$rs->user->name}}</td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->comment}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>
                                                <a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-block btn-warning btn-sm" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting, Are you sure ?')">Delete</a>
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
        @include('admin._footer')
    </div>
</body>

</html>
