<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
 المدد الأضافيه
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') المدد الأضافيه   @endslot
@endcomponent

    <div class="row">0
        <div class="col-lg-12">

              <div class="card">
               <div class="card-body">
                   @if( Auth::user()->role_id != 3 )
            <div>
                     <a href="{{url('admin/add-moda/'. $projectDetails->id)}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> أضافه  مده أضافيه  </a>
            </div>
                   @endif
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th>الترتيب </th>
                            <th> بدايه المشروع  </th>
                            <th>  نهايه المشروع الجديده  </th>
                            <th>التحكم</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($moda as $mod)
                        <tr>
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$mod->id}}</a> </td>
                            <td>{{$mod->project_start}}</td>
                            <td>{{$mod->project_end}}</td>

                            <td>
                                <a href="{{url('admin/view-moda/'.$mod->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض بيانات المده الأضافيه  "><i class="uil uil-eye font-size-18"></i></a>
                                @if( Auth::user()->role_id != 3 )
                                <a href="{{url('admin/edit-moda/'.$mod->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل  المده الأضافيه     "><i class="uil uil-pen font-size-18" ></i></a>
                                 @endif
                                @if(Auth::user()->role_id  == 1 )
                                <a rel="{{$mod->id}}" rel1="delete-moda"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف   المده الاضافيه    " ><i class="uil uil-trash-alt font-size-18" ></i></a>
                               @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- end table -->
        </div>
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
    <script>
        $(document).on('click' , '.sa-warning '  , function () {
        id   = $(this).attr('rel') ;
        var deleteFunction = $(this).attr('rel1');
      Swal.fire({
        title: "هل  انتا  متاكد من  الحذف ",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "بالتاكيد " ,
        cancelButtonText :"الغاء " ,
      }).then(function (result) {
        if (result.value) {
           window.location.href="/admin/"+deleteFunction+"/"+id;
        }
      });
    }); //Parame
    </script>
@endsection
