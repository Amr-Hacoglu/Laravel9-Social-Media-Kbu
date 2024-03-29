<!-- Wrapper Start -->
<div class="wrapper">
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                @foreach($data as $newdata)
                    <div class="col-lg-12">
                        <div class="post">
                            <div id="post-modal-data" class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Created Post</h4>
                                    </div>
                                    <div class="card-post-toolbar">
                                        <div class="dropdown">
                                        <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                            <i class="ri-more-fill"></i>
                                        </span>
                                            <div class="dropdown-menu m-0 p-0">
                                                <div class="card-body">
                                                    <a style="color: #1e7e34" href="{{route('admin.Content.edit',['id' => $newdata->id])}}">Edit</a>
                                                </div>

                                                <div class="card-body">
                                                    <a style="color: red" href="{{route('admin.Content.destroy',['id' => $newdata->id])}}">Delete</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4>{{$newdata->desc}}</h4>
                                    {{--<h3>Written things</h3>--}}
                                </div>
                                <div class="card-body" id="image">
                                    @if($newdata->image)
                                        <img src="{{Storage::url($newdata->image)}}" width="870" height="600" >
                                    @endif
                                    {{--h4>{{$members->photovideofile}}</h4>--}}
                                    {{--<h3>Written things</h3>--}}
                                </div>
                                <hr class="betweenpostandcomments">
                                <div class="codyofcomments">
                                    <img src="../admin/html/assets/images/icon/01.png" class="img-fluid" alt="">
                                    <a href="#"><bottom>Likes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</bottom></a>
                                    <botton> <a href="/admin/comment/create" class="commentforpost">Create Comment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </botton>
                                    <a href="/admin/comment/show"><bottom>Comments</bottom></a>
                                </div>
                                {{--<hr class="postcomment">--}}
{{--                                <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">--}}
{{--                                <form class="comment-text d-flex align-items-center mt-3" action="{{route('admin.Content.store')}}">--}}
{{--                                    <input type="text" class="textforcomment" placeholder="Enter Your Comment">--}}
{{--                                    <input type="file" class="photoforcomment">--}}
{{--                                    <div class="comment-attagement d-flex">--}}
{{--                                        --}}{{----}}
{{--                                        <a href="#"><i class="ri-link me-3"></i></a>--}}
{{--                                        <a href="#"><i class="ri-user-smile-line me-3"></i></a>--}}
{{--                                        <a href="#"><i class="ri-camera-line me-3"></i></a>--}}
{{--                                        --}}
{{--                                        --}}{{--<a href=""><bottom><img src="../../admin\html\assets\images\new\camera.png" width="20" height="20" style="margin: 10"></bottom></a>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Wrapper End-->
{{--
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
--}}
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
<style>
    .postcomment{
        margin: -0.75;
    }
    .img-fluid{
        margin-left: 20;
    }
    .textforcomment{
        margin: 8;
        width: 100%;
    }
    .photoforcomment{
        width: 25%;
    }
    .codyofcomments{
        margin-bottom: 13;
    }
    .betweenpostandcomments{
        margin : 3 3 10 3;
    }
</style>
