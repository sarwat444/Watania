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
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-invoice"></i>
                         <span>كراسه الأشتراطات  </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin/korasat/'.$projectDetails->id)}}">كراسات الاشتراطات </a></li>
                    </ul>
                   </li>

                         <li>
                    <a href="{{url('admin/akwad/'. $projectDetails->id )}}"  class="waves-effect">
                         <i class="uil-invoice"></i>
                        <span>العقود </span>
                    </a>
                </li>



                   <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list"></i>
                         <span> المقايسه   </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin/mokaysat/'. $projectDetails->id .'/0')}}">  عرض المقايسات   </a></li>


                    </ul>
                   </li>

                    <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list"></i>
                         <span> أمر الاسناد</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin/amresnads/'. $projectDetails->id)}}">عرض أومر الاسناد</a></li>
                    </ul>
                   </li>

                  <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list"></i>
                         <span>  المستخلصات     </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin/mostaklas/'. $projectDetails->id )}}">عرض المستخلصات</a></li>

                    </ul>
                   </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list"></i>
                         <span>  الموقف التنفيذى      </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin/mawkef_tanfezy/'. $projectDetails->id )}}">عرض  الموقف  التنفيذى  </a></li>
                    </ul>

                </li>

                 <li>
                    <a href="{{url('/admin/moda/'.$projectDetails->id)}}"  class="waves-effect">
                    <i class="bx bx-list"></i>
                        <span>المدد الأضافيه </span>
                    </a>
                </li>
                @if(Auth::user()->role_id == 1  )
                <li>
                    <a href="{{url('/admin/eltezam/'.$projectDetails->id)}}"  class="waves-effect">
                    <i class="bx bx-list"></i>
                        <span> الألتزمات </span>
                    </a>
                </li>
                @endif

                <li>
                    <a href="{{url('/admin/other/'.$projectDetails->id)}}"  class="waves-effect">
                    <i class="bx bx-list"></i>
                        <span> الأخرى </span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
