<div class="container-fluid">
    <div class="row">
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu">
                    <li>
                        <a href="{{route('user.index')}}">
                            <i class="ti-user"></i>
                            <span class="right-nav-text">المستخدمين</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('category.index')}}">
                            <i class="ti-user"></i>
                            <span class="right-nav-text">الاقسام</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('product.index') }}">
                            <i class="ti-user"></i>
                            <span class="right-nav-text">الحيوانات</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact_us.index') }}">
                            <i class="ti-user"></i>
                            <span class="right-nav-text">رسائل العملاء</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
