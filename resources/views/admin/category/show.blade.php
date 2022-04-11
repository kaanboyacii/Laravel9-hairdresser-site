<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{$data->title}} Show</title>
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
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$data->title}} Detail</h4>
                  <br><br>
                  <p class="card-description">
                    Details
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <tr>
                          <th style="width: 30px">Title</th>
                          <td>{{$data->title}}</td>
                      </tr>
                      <tr>
                          <th style="width: 30px">Keywords</th>
                          <td>{{$data->keywords}}</td>
                      </tr>
                      <tr>
                          <th style="width: 30px">Description</th>
                          <td>{{$data->description}}</td>
                      </tr>
                      <tr>
                          <th style="width: 30px">Image</th>
                          <td>{{$data->image}}</td>
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
                    </table>
                    <br><br>
                    <a class="btn btn-primary" style="color: white;" href="/admin/category/edit/{{$data->id}}">Edit</a>
                    <a  class="btn btn-danger" style="color: white;" href="/admin/category/delete/{{$data->id}}", onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                  </div>
                </div>
              </div>
            </div>
@include('admin._footer')
@yield('footer')
</body>
</html>
