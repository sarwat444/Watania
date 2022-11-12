<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('/')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/backend_images/toplogo.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">

                <img src="{{ URL::asset('assets/images/backend_images/logo.png')}}" alt="" height="20">
            </span>
        </a>

        <a href="{{url('index')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/backend_images/toplogo.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/backend_images/logo.png')}}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <div data-simplebar class="sidebar-menu-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                        <li>

                            <a href="{{url('/admin/dashboard')}}"  class="waves-effect">
                                <i class="uil-home-alt"></i>
                                <span>@lang('translation.main_page')</span>
                            </a>

                        </li>

                        <li>

                            <a href="{{url('/admin/projects')}}" class="waves-effect">
                                <i class="dripicons-suitcase"></i>
                                <span>@lang('translation.projects')</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{url('/admin/fax')}}" class="waves-effect">
                                <i class="uil-invoice"></i>
                                <span>المكاتبات</span>
                            </a>
                       </li>
                       <li>
                      @if(Auth::user()->role_id == 1 )
                            <li>
                                <a href="{{url('/admin/sectors')}}" class="waves-effect">
                                    <i class="uil-invoice"></i>
                                    <span>القطاعات</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/admin/admins')}}" class="waves-effect">
                                <i class="uil-user"></i>
                                    <span>@lang('translation.users')</span>
                                </a>
                           </li>
                     @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
