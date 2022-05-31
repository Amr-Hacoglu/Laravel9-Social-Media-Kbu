@section('content')

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"></a></li>
                <li class="userloginchange"> User Login  </li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('admin.login')
                </div>
            </div>
        </div>
    </div>

<style>
    .userloginchange{
        background-color: #0076e5;
        color: white;
        text-align: center;
    }
</style>
