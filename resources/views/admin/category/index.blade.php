<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
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
                  <h4 class="card-title">Category List</h4>
                  <p class="card-description">
                    Category List
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered"  style="width: 88%;">
                      <thead>
                        <tr>
                          <th style="width: 12px;">
                            #
                          </th>
                          <th style="width: 50px;">
                            Title
                          </th>
                          <th style="width: 50px;">
                            Keywords
                          </th>
                          <th style="width: 30px;">
                            Description
                          </th>
                          <th style="width: 20px;">
                            Image
                          </th>
                          <th style="width: 20px;">
                            Status
                          </th>
                          <th style="width: 20px;">
                            Edit
                          </th>
                          <th style="width: 20px;">
                            Delete
                          </th>
                          <th style="width: 20px;">
                            Show
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $rs)
                        <tr>
                          <td>{{$rs->id}}</td>
                          <td>{{$rs->title}}</td>
                          <td>{{$rs->keywords}}</td>
                          <td>{{$rs->description}}</td>
                          <td>{{$rs->image}}</td>
                          <td>{{$rs->status}}</td>
                          <td><a class="btn btn-primary" style="color: white;" href="/admin/category/edit/{{$rs->id}}">Edit</a></td>
                          <td><a  class="btn btn-danger" style="color: white;" href="/admin/category/delete/{{$rs->id}}">Delete</a></td>
                          <td><a class="btn btn-warning" style="color: white;" href="/admin/category/show/{{$rs->id}}">Show</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@include('admin._footer')
@yield('footer')
</body>
</html>
