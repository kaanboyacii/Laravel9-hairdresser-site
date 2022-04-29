<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$data->title}}</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Kaan Boyaci">
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
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description">
                                Basic form elements
                            </p>
                            <form role="form" action="{{route('admin.settingupdate')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" id="title" name="title" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Keywords</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="keywords" value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Description</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="description" value="{{$data->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Company</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="company" value="{{$data->company}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Adress</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="adress" value="{{$data->adress}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Phone</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="phone" value="{{$data->phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="email" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select name="status" class="form-control">
                                        <option selected>{{$data->status}}</option>
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                </div>
                                <p>smtp settings</p>
                                <div class="form-group">
                                    <label for="exampleInputName1">Smtp Server</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="smtpserver" value="{{$data->smtpserver}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Smtp Email</label>
                                    <input type="email" class="form-control" id="exampleInputName1" name="smtpemail" value="{{$data->smtppassword}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Smtp Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="smtppassword" value="{{$data->smtppassword}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Smtp Port</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                </div>
                                <p>Social Media</p>
                                <div class="form-group">
                                    <label for="exampleInputName1">Facebook</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="facebook" value="{{$data->facebook}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Instagram</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="instagram" value="{{$data->instagram}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Twitter</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="twitter" value="{{$data->twitter}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Youtube</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="youtube" value="{{$data->youtube}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">About us</label>
                                    <textarea class="form-control" id="aboutus" name="aboutus" placeholder="aboutus">
                                    {{$data->aboutus}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Contact</label>
                                    <textarea class="form-control" id="contact" name="contact" placeholder="contact">
                                    {{$data->contact}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">References</label>
                                    <textarea class="form-control" id="references" name="references" placeholder="references">
                                    {{$data->references}}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    @include('admin._footer')
    <script>
        ClassicEditor
            .create(document.querySelector('#aboutus'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#contact'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#references'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $('#bologna-list a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
</body>


</html>
