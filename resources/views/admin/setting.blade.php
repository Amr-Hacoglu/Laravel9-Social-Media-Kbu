@section('title' , 'Setting')

@section('head')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@include('admin.sidebar')

@include('admin.navbar')

@include('admin.index')


<form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
    <div class="container21" >
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Account Setting</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="acc-edit">
                            <form>
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" id="title" name="title" value="{{$data->titel}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="desc" value="{{$data->desc}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                </div>


                                <div class="header-title">
                                    <h4 class="card-title">Account Information</h4>
                                </div>

                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                </div>

                                <div class="header-title">
                                    <h4 class="card-title">Servers</h4>
                                </div>

                                <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text" name="stmpserver" value="{{$data->stmpserver}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" name="stmpemail" value="{{$data->stmpemail}}" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input type="text" name="stmppassword" value="{{$data->stmppassword}}" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input type="text" name="stmpport" value="{{$data->stmpport}}" class="form-control">
                                </div>

                                <div class="header-title">
                                    <h4 class="card-title">Socail Media</h4>
                                </div>

                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>YouTube</label>
                                    <input type="text" name="youtube" class="form-control">
                                </div>

                                <div class="header-title">
                                    <h4 class="card-title">Else</h4>
                                </div>

                                <div class="form-group">
                                    <label>AboutUs</label>
                                    <textarea type="text" name="aboutus" class="form-control">{{$data->aboutus}}</textarea>
                                </div>


                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea type="text" name="contact" class="form-control">{{$data->contact}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>References</label>
                                    <textarea type="text" name="references" class="form-control">{{$data->references}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>


                                <script>
                                    $(document).ready(function (){
                                        $('#aboutus').summernote();
                                        $('#contact').summernote();
                                        $('#references').summernote();
                                    });
                                </script>

                                <button type="submit" class="btn btn-primary me-2">Update Setting</button>
                                <button type="reset" class="btn bg-soft-danger">Cancle</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<style>
    .rowforsetting{
        background-color: #ff226626;
    }
    .container21{
        margin-left: 300;
    }
</style>


@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"></script>

    <script>
        $(document).ready(function (){
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        })
    </script>

@endsection
