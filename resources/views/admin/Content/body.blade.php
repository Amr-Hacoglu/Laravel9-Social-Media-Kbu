@include('admin.Content.index')

    <div class="col-sm-12">
        <div id="post-modal-data" class="card card-block card-stretch card-height">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <img src="../../admin/html/assets/images/icon/3329467.png" width="15" height="15";
                    <h4 class="card-title">&nbsp;&nbsp;Create Post</h4>
                </div>
                <hr>
                <div class="header-title">
                    <a href="{{route('admin.Content')}}" class="btn btn-secondary">Main page</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.Content.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{--
                    <div class="card-body">
                        <label>Parent Creating</label>

                    </div>
                    --}}
                    <input type="text" class="form-control rounded" placeholder="Write something here..." name="text" style="border:none;">
                <hr>
                <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                    <li class="me-3 mb-md-0 mb-2">

                            <label for="photovideofile" >Photo/Video</label>
                            <input type="file" class="img-fluid me-2" name="photovideofile">

                    </li>
                </ul>
                <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                </form>
            </div>
            <img class="social1" src="../../admin/html/assets/images/new/social_media.png">
        </div>
    </div>

<style>

</style>

{{--
<input type="radio" id="Happy" name="drone" value="Happy" name="Happy" checked>
<img src="admin/html/assets/images/smiles/smile.png" height="20" width="20">
<label for="Happy"> Happy &nbsp;&nbsp;&nbsp;

<input type="radio" id="Sad" name="drone" value="Sad" name="Sad">
<img src="admin/html/assets/images/smiles/sad.png" height="20" width="20">
<label for="Sad"> Sad &nbsp;&nbsp;&nbsp;

<input type="radio" id="Lovely" name="drone" value="Lovely" name="Lovely">
<img src="admin/html/assets/images/smiles/lovely.png" height="20" width="20">
<label for="Lovely"> Lovely &nbsp;&nbsp;&nbsp;

<input type="radio" id="Excited" name="drone" value="Excited" name="Excited">
<img src="admin/html/assets/images/smiles/star.png" height="20" width="20">
<label for="Excited"> Excited &nbsp;&nbsp;&nbsp;
--}}
