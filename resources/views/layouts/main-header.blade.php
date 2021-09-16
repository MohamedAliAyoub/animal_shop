<!--=================================
 header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{url('/')}}"><img src="{{ asset('assets/images/logo-dark.png') }}"
                                                                    alt=""></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                src="{{ asset('assets/images/logo-icon-dark.png') }}"
                alt=""></a>
    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
               href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('assets/images/profile-avatar.jpg') }}" alt="avatar">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">  الاسم </h5>
                            <span>{{   auth()->user()->name  }}</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-header">
                    <div class="media">
                        <a href="#"> تعديل البيانات الشخصية </a>
                    </div>
                </div>
                <div class="dropdown-divider">

                </div>

                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="dropdown-item" href="#"><i class="text-danger ti-unlock"></i>تسجيل الخروج</button>

                </form>
            </div>
        </li>
    </ul>
</nav>

<!--=================================
header End-->
