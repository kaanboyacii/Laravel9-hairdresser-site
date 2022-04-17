<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Category</title>
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
                  <h4 class="card-title">{{$service->title}}</h4>
                  <form role="form" action="{{route('admin.image.store',['sid'=>$service->id])}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title">
                    <div class="form-group">
                      <label>File upload</label>
                      <div class="input-group col-xs-12">
                         <label for="formFile" class="form-label"></label>
                         <input class="form-control" type="file" name="image" id="image">
                      </div>
                      <div class="input-group-append">
                          <input class="input-group-text" type="submit" value="Upload">
                      </div>
                    </div>
                  </form>
                  <div class="table-responsive pt-4">
                    <table class="table table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Title
                          <th>
                            Image
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($images as $rs)
                        <tr>
                          <td>{{$rs->id}}</td>
                          <td>{{$rs->title}}</td>
                          <td>
                              @if ($rs->image)
                              <img src="{{Storage::url($rs->image)}}" style="height:250px ;width:250px; border-radius:2px">
                              @endif
                          </td>
                          <td><a  class="btn btn-danger" style="color: white;" href="{{route('admin.image.delete',['sid'=>$service->id,'id'=>$rs->id])}}", onclick="return confirm('Delete Are You Sure ?')">Delete</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</body>
</html>
