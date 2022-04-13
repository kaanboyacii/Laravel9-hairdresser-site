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
<div style="padding-right: 200px;" class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-description">
                    Add Category
                  </p>
                  <form role="form" action="{{route('admin.category.store')}}" methot="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="">Parent Category</label>
                        <select name="parent_id" class="form-control select2">
                            <option value="0" selected="selected">Main Category</option>
                            @foreach($data as $rs)
                            <option value="{{$rs->id}}"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Keywords</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Keywords" name="keywords">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="Description" class="form-control" id="exampleInputName1" placeholder="Description" name="description">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                         <label for="formFile" class="form-label"></label>
                         <input class="form-control" type="file" name="image" id="formFile">
                      </div>
                    </div>
                    <!-- <div class="form-group">
                      <div class="mb-3">
                         <label for="formFile" class="form-label">Image</label>
                         <input class="form-control" type="file" name="image" id="formFile">
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label for="exampleSelectGender">Status</label>
                        <select name="status" class="form-control">
                          <option value="true">True</option>
                          <option value="false">False</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
@include('admin._footer')
@yield('footer')
</body>
</html>
