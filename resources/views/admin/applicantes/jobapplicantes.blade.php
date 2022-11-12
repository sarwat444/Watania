@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.job_applicantes')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title')المتقدمين للوظيفه   @endslot

@endcomponent

            
<!--Start User Grade  --> 

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="row ">
                @foreach($applicants as $applicant)
                    <div class="col-xl-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="dropdown float-left">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-left">

                                            <a class="dropdown-item" href="{{url('admin/view-jobapplicant/'.$applicant->id)}}">@lang('applicant.view')</a>
                             
              
                                            <form style="display:inline;" action="{{url('admin/delete-jobapplicant/'.$applicant->id)}}" method="POST" > {{ csrf_field() }} {{ method_field('DELETE') }} <button style="border:none; background:none" title="@lang('dashboard.delete')" class = "px-3 text-danger delete" type="submit"><span class="delete">@lang('dashboard.delete')</span></button></form>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mb-4">
                                    <img src="{{ URL::asset('uploads/applicants/' . $applicant->image)}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">{{$applicant->name}}</a></h5>
                                <p class="text-muted mb-2">{{($applicant->job != null) ? $applicant->job->name : '--'}}</p>

                            </div>

                            <div class="btn-group" role="group">

                                    <a  href="{{url('admin/view-jobapplicant/'.$applicant->id)}}" class="btn btn-outline-light text-truncate">
                 
                              الملف الشخصى  <i class="uil uil-user mr-1"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
       
        <!--Start  Fillter-->
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">تصنيف  المتقدمين للوظايف  </h5>
                </div>

                <div class="p-4">
                    <h5 class="font-size-14 mb-3">أقسام الوظايف </h5>
                    <div class="custom-accordion">
                        <a class="text-body font-weight-semibold pb-2 d-block" data-toggle="collapse" href="#categories-collapse" role="button" aria-expanded="false" aria-controls="categories-collapse">
                            <i class="mdi mdi-chevron-up accor-down-icon text-primary mr-1"></i>
                        </a>
                        <div class="collapse show" id="categories-collapse">
                            <div class="card p-2 border shadow-none">
                                <ul class="list-unstyled categories-list mb-0">
                                    <li class="{{$x == null ? 'active' : ''}}"><a href="{{url('admin/jobapplicantes')}}"><i class="mdi mdi-circle-medium mr-1"></i>كل الاقسام</a></li>
                                    @foreach($jobs as $job)
                                        <li class="{{($x == $job->id) ? 'active' : ''}}"><a href="{{url('admin/jobapplicantes/'. $job->id )}}"><i class="mdi mdi-circle-medium mr-1"></i>{{$job->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!--End Fillter --> 
  
    </div>
    <!-- end row -->


    <!-- end row -->
<!--End User Grade --> 
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
@endsection