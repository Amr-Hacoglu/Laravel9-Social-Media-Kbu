@include('admin.sidebar')

@include('admin.navbar')

@include('admin.index')

<!-- Wrapper Start -->
<div class="wrapper">

    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
{{--               <h5>Here we go</h5>--}}
                @include('admin.Content.posts')
{{--                @foreach($data as $members)--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="post">--}}

{{--                            <div id="post-modal-data" class="card card-block card-stretch card-height">--}}
{{--                                <div class="card-header d-flex justify-content-between">--}}
{{--                                    <div class="header-title">--}}
{{--                                        <h4 class="card-title">Created Post</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="card-body">--}}
{{--                                    <a href="/admin/Content/edit/{{$members->id}}" class="btn btn-block btn-outline-success">Edit</a>--}}
{{--                                    <a href="/admin/Content/delete/{{$members->id}}" class="btn btn-block btn-outline-danger">Delete</a>--}}
{{--                                </div>--}}

{{--                                <div class="card-body">--}}
{{--                                    <h4>{{$members->text}}</h4>--}}
{{--                                    --}}{{--<h3>Written things</h3>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h4>{{$members->photovideofile}}</h4>--}}
{{--                                    --}}{{--<h3>Written things</h3>--}}
{{--                                </div>--}}
{{--                                <hr>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                    @include('admin.Content.posts');--}}
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../../admin\html\dashboard/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="../../admin\html\dashboard/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                Copyright 2020 <a href="#">SocialV</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!-- offcanvas start -->

<div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn" aria-labelledby="shareBottomLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small">
        <div class="d-flex flex-wrap align-items-center">
            <div class="text-center me-3 mb-3">
                <img src="../../admin\html\assets\images\icon/08.png" class="img-fluid rounded mb-2" alt="">
                <h6>Facebook</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../../admin\html\assets\images\icon/09.png" class="img-fluid rounded mb-2" alt="">
                <h6>Twitter</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../../admin\html\assets\images\icon/10.png" class="img-fluid rounded mb-2" alt="">
                <h6>Instagram</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../../admin\html\assets\images\icon/11.png" class="img-fluid rounded mb-2" alt="">
                <h6>Google Plus</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../../admin\html\assets\images\icon/13.png" class="img-fluid rounded mb-2" alt="">
                <h6>In</h6>
            </div>
            <div class="text-center me-3 mb-3">
                <img src="../../admin\html\assets\images\icon/12.png" class="img-fluid rounded mb-2" alt="">
                <h6>YouTube</h6>
            </div>
        </div>
    </div>
</div>
