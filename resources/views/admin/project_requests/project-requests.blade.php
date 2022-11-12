@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.project_requests')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.project_requests') @endslot


@endcomponent

                    
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
               <div class="card-body">
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                    
                            <th>@lang('translation.id')</th>
                            <th>@lang('translation.project_name')</th>
                           <th>@lang('translation.request_date')</th>
                            <th>موعد الانتهاء </th>     
                            <th style="width: 120px;">@lang('translation.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projectinfo as $project)
                        <tr>
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$project->id}}</a> </td>
        
                            <td>
                                {{$project->title}}
                            </td>
                            <td>{{$project->start_date}}</td>
                            <td>
                                {{$project->end_date}}
                            </td>
                            <td>
                                <a href="{{url('/admin/confirm-projectrequest/'.$project->id )}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="الموافقه  على المشروع  "><i class="uil uil-pen font-size-18" ></i></a>
                                  <a href="{{url('/admin/view-projectrequest/'.$project->id )}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض  التفاصيل  "><i class="uil uil-eye font-size-18"></i></a>

                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="حذف  "><i class="uil uil-trash-alt font-size-18" id="sa-warning" ></i></a>
                            </td>
                        </tr>
                        @endforeach
 
                      
                      
                    </tbody>
                </table>
            </div>
                   </div>
            <!-- end table -->
        </div>
            </div>
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
@endsection