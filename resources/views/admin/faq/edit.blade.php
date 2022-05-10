<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Man Haircut Edit</title>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

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
                <div style="padding-right: 200px;" class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-description">
                                Edit Service
                            </p>
                            <form role="form" enctype="multipart/form-data" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="POST" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Question</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Question" name="question" value="{{$data->question}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Answer</label>
                                    <textarea class="form-control" id="detail" name="answer" placeholder="Answer">
                                    {{$data->answer}}
                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#detail'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
                                                console.error(error);
                                            });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Update Data</button>
                            </form>
                            <br>
                            <a href="{{route('admin.faq.index')}}"> <button class="btn btn-light">Cancel </button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin._footer')
    </div>
</body>

</html>
