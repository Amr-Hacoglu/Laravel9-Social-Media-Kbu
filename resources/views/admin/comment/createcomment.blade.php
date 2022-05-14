@include('admin.comment.indexCC');

<div class="col-sm-12">
    <div id="post-modal-data" class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <img src="../../admin\html\assets\images\new\comment.png" width="15" height="15">
                <h4 class="card-title">&nbsp;&nbsp;Create Comment </h4>
            </div>
            <hr>
            <div class="header-title">
                <a href="{{route('admin.comment')}}" class="btn btn-secondary">Main page</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('admin.comment.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{--
                <div class="card-body">
                    <label>Parent Creating</label>

                </div>
                --}}
                <input type="text" class="form-control rounded" placeholder="Write your comment ..." name="comment" style="border:none;">
                <hr>
                <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                    <li class="me-3 mb-md-0 mb-2">

                        <label for="image" >Photo/Video</label>
                        <input type="file" class="img-fluid me-2" name="image">

                    </li>
                </ul>
                <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
            </form>
        </div>
        <img class="social1" src="../../admin\html\assets\images\new\commentbck.jpg">
    </div>
</div>
