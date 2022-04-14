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
@include('admin._header')
@include('admin._sidebar')
@yield('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Service List</h4>
                  <p class="card-description">
                    Service List
                  </p>
                  <a class="btn btn-outline-success" href="{{ route('admin.service.create')}}">Add New Service</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered"
                    style=" table-layout:auto;width: 150px;">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Category
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Edit
                          </th>
                          <th>
                            Delete
                          </th>
                          <th>
                            Show
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $rs)
                        <tr>
                          <td>{{$rs->id}}</td>
                          <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                          <td>{{$rs->title}}</td>
                          <td>{{$rs->price}}</td>
                          <td>
                              @if ($rs->image)
                              <img src="{{Storage::url($rs->image)}}" style="height: 40px" >
                              @endif
                          </td>
                          <td>{{$rs->status}}</td>
                          <td><a class="btn btn-primary" style="color: white;" href="{{route('admin.service.edit',['id'=>$rs->id])}}">Edit</a></td>
                          <td><a  class="btn btn-danger" style="color: white;" href="{{route('admin.service.delete',['id'=>$rs->id])}}", onclick="return confirm('Delete Are You Sure ?')">Delete</a></td>
                          <td><a class="btn btn-warning" style="color: white;" href="{{route('admin.service.show',['id'=>$rs->id])}}">Show</a></td>
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
