@include('admin.createpost.index')
<div class="col-sm-12">
    <div id="post-modal-data" class="card card-block card-stretch card-height">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Create Post</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="user-img">
                    <img src="admin\html\assets\images\user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
                </div>
                <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                    <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                </form>
            </div>
            <hr>
            <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                <li class="me-3 mb-md-0 mb-2">
                    <a href="#" class="btn btn-soft-primary">
                        <img src="admin\html\assets\images\small/07.png" alt="icon" class="img-fluid me-2"> Photo/Video
                    </a>
                </li>
                <li class="me-3 mb-md-0 mb-2">
                    <a href="#" class="btn btn-soft-primary">
                        <img src="admin\html\assets\images\small/12.png" alt="icon" class="img-fluid me-2"> File
                    </a>
            </ul>
            <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
        </div>
    </div>
</div>

