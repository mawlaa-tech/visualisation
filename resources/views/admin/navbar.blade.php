<header class="header_area">
    <!-- logo -->
    <div class="sidebar_logo">
        <a href="{{url('admin/dashboard')}}">
<img src="{{ asset('panel/assets/images/favicon.png') }}" width="50px"alt="" class="img-fluid logo1">
        </a>
    </div>
    <div class="sidebar_btn">
        <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
    </div>
    <ul class="header_menu">
        <li><a href="#" class="search_btn" data-toggle="modal" data-target="#myModal"></a>
            <div class="modal fade search_box" id="myModal">
                 
            </div>
        </li>
        
      
        <li><a href="">  </a></li>

        <li> <a data-toggle="dropdown" href="#"> {{ Auth::guard('admin')->user()->name }} <i class="far fa-user"></i>  </a>
                <div class="user_item dropdown-menu dropdown-menu-right">
                    <div class="admin">
                        <a href="#" class="user_link"><img src="panel/assets/images/admin.jpg" alt=""></a>
                    </div>
                <ul>
<li><a href=""> {{ Auth::guard('admin')->user()->email }} </a></li>
                    <li><a href="#"><span><i class="fas fa-user"></i></span> Profile</a></li>
                    <li><a href="{{url('/admin/edit/admin/'.Auth::guard('admin')->user()->id)}} "><span><i class="fas fa-cogs"></i></span> Changer passwor</a></li>
                    <li>


<a href="{{ route('admin.logout') }}"><span><i class="fas fa-unlock-alt"></i></span> Logout</a></li>
                </ul>
            </div>
        </li>
        <li>

            <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
</header>