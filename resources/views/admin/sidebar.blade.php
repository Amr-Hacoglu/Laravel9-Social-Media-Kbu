<div class="iq-sidebar  sidebar-default ">
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="">
                    <a href="{{route('admin.Content')}}" class=" ">
                        <i class="las la-newspaper"></i><span>Newsfeed</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('admin.Content.create')}}" class=" ">
                        <img src="../../admin\html\assets\new\add.png" height="20" width="20">
                        &emsp;
                        <span>Create post</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/profile" class=" ">
                        <img src="../../admin\html\assets\images\new\user.png" height="20" width="20">
                        &emsp;
                        <span>Profile</span>
                    </a>
                <li class="">
                    <a href="/admin/friends" class=" ">
                        <img src="../../admin\html\assets\images\new\friends.png" height="20" width="20">
                        &emsp;
                        <span>Friends</span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/chat" class=" ">
                        <img src="../../admin\html\assets\images\new\chat.png" height="20" width="20">
                        &emsp;
                        <span>Chat</span>
                    </a>
                </li>
                <li class="">
                    <a href="/" class=" ">
                        <img src="../../admin\html\assets\images\new\profile.png" height="20" width="20">
                        &emsp;
                        <span>Users</span>
                    </a>
                </li><li class="">
                    <a href="{{route('admin.setting')}}" class=" ">
                        <img src="../../admin\html\assets\images\new\settings.png" height="20" width="20">
                        &emsp;
                        <span>Setting</span>
                    </a>
                <li class="">
                    <a href="/" class=" ">
                        <img src="../../admin\html\assets\images\new\feq.png" height="20" width="20">
                        &emsp;
                        <span>FEQ</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-5"></div>
    </div>
</div>

<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex justify-content-between">
                <a href="../../admin\html\dashboard/index.html">
                    <img src="../../admin\html\assets\images/logo.png" class="img-fluid" alt="">
                    <span>SocialV</span>
                </a>
                <div class="iq-menu-bt align-self-center">
                    <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                    </div>
                </div>
            </div>

            <div class="iq-search-bar device-search">
                <form action="#" class="searchbox">
                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                    <input type="text" class="text search-input" placeholder="Search here...">
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ms-auto navbar-list">
                    <li>
                        <a href="../../admin\html\dashboard/index.html" class="  d-flex align-items-center">
                            <i class="ri-home-line"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" id="group-drop" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="ri-group-line"></i></a>
                        <div class="sub-drop sub-drop-large dropdown-menu" aria-labelledby="group-drop">
                            <div class="card shadow-none m-0">
                                <div class="card-header d-flex justify-content-between bg-primary">
                                    <div class="header-title">
                                        <h5 class="mb-0 text-white">Friend Request</h5>
                                    </div>
                                    <small class="badge  bg-light text-dark ">4</small>
                                </div>
                                <div class="card-body p-0">
                                    <div class="iq-friend-request">
                                        <div
                                            class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/01.jpg"
                                                     alt="">
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Jaques Amole</h6>
                                                    <p class="mb-0">40 friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-friend-request">
                                        <div
                                            class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/02.jpg"
                                                     alt="">
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Lucy Tania</h6>
                                                    <p class="mb-0">12 friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-friend-request">
                                        <div
                                            class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/03.jpg"
                                                     alt="">
                                                <div class=" ms-3">
                                                    <h6 class="mb-0 ">Manny Petty</h6>
                                                    <p class="mb-0">3 friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-friend-request">
                                        <div
                                            class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/04.jpg"
                                                     alt="">
                                                <div class="ms-3">
                                                    <h6 class="mb-0 ">Marsha Mello</h6>
                                                    <p class="mb-0">15 friends</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-primary rounded">Confirm</a>
                                                <a href="javascript:void();"
                                                   class="me-3 btn btn-secondary rounded">Delete Request</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class=" btn text-primary">View More Request</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="search-toggle   dropdown-toggle" id="notification-drop" data-bs-toggle="dropdown">
                            <i class="ri-notification-4-line"></i>
                        </a>
                        <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                            <div class="card shadow-none m-0">
                                <div class="card-header d-flex justify-content-between bg-primary">
                                    <div class="header-title bg-primary">
                                        <h5 class="mb-0 text-white">All Notifications</h5>
                                    </div>
                                    <small class="badge  bg-light text-dark">4</small>
                                </div>
                                <div class="card-body p-0">
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/01.jpg" alt="">
                                            </div>
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">95 MB</p>
                                                    <small class="float-right font-size-12">Just Now</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/02.jpg" alt="">
                                            </div>
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">Cyst Bni</p>
                                                    <small class="float-right font-size-12">5 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/03.jpg" alt="">
                                            </div>
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">Cyst Bni</p>
                                                    <small class="float-right font-size-12">2 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/04.jpg" alt="">
                                            </div>
                                            <div class="w-100 ms-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">Cyst Bni</p>
                                                    <small class="float-right font-size-12">3 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-mail-line"></i>
                        </a>
                        <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                            <div class="card shadow-none m-0">
                                <div class="card-header d-flex justify-content-between bg-primary">
                                    <div class="header-title bg-primary">
                                        <h5 class="mb-0 text-white">All Message</h5>
                                    </div>
                                    <small class="badge bg-light text-dark">4</small>
                                </div>
                                <div class="card-body p-0 ">
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex  align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/01.jpg" alt="">
                                            </div>
                                            <div class=" w-100 ms-3">
                                                <h6 class="mb-0 ">Bni Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/02.jpg" alt="">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/03.jpg" alt="">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/04.jpg" alt="">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded" src="../../admin\html\assets\images\user/05.jpg" alt="">
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">

                        @auth

                        <a href="#" class="   d-flex align-items-center dropdown-toggle" id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../admin\html\assets\images\user/1.jpg" class="img-fluid rounded-circle me-3" alt="user">
                            <div class="caption">
                                <h6 class="mb-0 line-height">{{Auth::user()->name}}</h6>
                            </div>
                        </a>

                        @endauth

                        <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                            <div class="card shadow-none m-0">
                                <div class="card-header  bg-primary">
                                    <div class="header-title">
                                        <h5 class="mb-0 text-white">Hello {{Auth::user()->name}}</h5>
                                        <span class="text-white font-size-12">Available</span>
                                    </div>
{{--                                    <a href="/admin/Content/logoutuser" class="text-uppercase">Logout</a>--}}
                                </div>
{{--                                @guest()--}}
                                <div class="card-body p-0 ">
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="btn btn-block btn-success" href="/admin/Content/loginuser" role="button">Login<i></i></a>
                                        <a class="btn btn-block btn-info" href="/admin/Content/registeruser" role="button">Join<i></i></a>
                                        <a class="btn btn-block btn-danger" href="/admin/users/signup" role="button">Signout<i class="ri-login-box-line ms-2"></i></a>
                                    </div>
                                </div>
{{--                                @endguest--}}
                            </div>s
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
