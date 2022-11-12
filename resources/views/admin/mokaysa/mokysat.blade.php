

@php
$projectsidebar = '' ;
@endphp
@extends('layouts.adminLayout.master')
@section('title')
المقايسات
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title')المقايسات @endslot
@endcomponent

@if($status == 0 )
    <div class="row">
        <div class="col-lg-12">

              <div class="card">
               <div class="card-body">
            <div>
                     @if( Auth::user()->role_id != 3 )
                         <a href="{{url('admin/add-mokaysa/'.$projectDetails->id.'/0')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> أضافه  مقايسه  مالك </a>
                         <a href="{{url('admin/add-mokaysa/'.$projectDetails->id.'/1')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> أضافه  مقايسه  باطن </a>
                     @endif
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                               <th>رقم المقايسه </th>
                               <th>أسم المقايسه</th>
                               <th>تاريخ الأصدار</th>
                               <th>التحكم </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mokaysat  as $mokaysa)
                        <tr>
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$mokaysa->id}}</a> </td>
                            <td>{{$mokaysa->name}}</td>
                            <td>{{$mokaysa->created_at}}</td>

                            <td>
                                @if( Auth::user()->role_id != 3 )
                                  <a href="{{url('admin/edit-mokaysa/'.$mokaysa->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل المقايسه     "><i class="uil uil-pen font-size-18" ></i></a>
                                @endif
                                    <a href="{{url('admin/view-mokaysa/'.$mokaysa->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض  المقايسه    "><i class="uil uil-eye font-size-18" ></i></a>

                                    @if( Auth::user()->role_id != 3 )
                                  <a href="{{url('admin/add-mokaysa-bnod/'.$mokaysa->id)}}" class="px-3 text-warning" data-toggle="tooltip" data-placement="top" title="أضافه بنود المقايسه   "><i class="uil uil-plus font-size-18"></i></a>
                                    @endif
                                  @if(Auth::user()->role_id == 1  )
                                  <a rel="{{$mokaysa->id}}" rel1="delete-mokaysa"  class="px-3 text-danger sa-danger " data-toggle="tooltip" data-placement="top" title="حذف  المقايسه   " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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

    @else
        <div class="row">
        <div class="col-lg-12">

              <div class="card">
               <div class="card-body">
            <div>
                     <a href="{{url('admin/add-mokaysa/'.$projectDetails->id.'/1')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> أضافه  مقايسه  جديده </a>

            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th>رقم المقايسه </th>
                            <th>أسم المقايسه</th>
                            <th>الباطن  </th>
                            <th>تاريخ الأصدار</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mokaysatbaden  as $mokaysa)
                        <tr>
                         <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$mokaysa->id}}</a> </td>
                            <td>{{$mokaysa->name}}</td>
                            <td>{{$mokaysa->owner_id}}</td>
                            <td>{{$mokaysa->created_at}}</td>
                            <td>
                                  <a href="{{url('admin/edit-mokaysa/'.$mokaysa->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل المقايسه     "><i class="uil uil-pen font-size-18" ></i></a>
                                  <a href="{{url('admin/view-mokaysa/'.$mokaysa->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="عرض  المقايسه    "><i class="uil uil-pen font-size-18" ></i></a>
                                  <a href="{{url('admin/add-mokaysa-bnod/'.$mokaysa->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="أضافه بنود المقايسه   "><i class="uil uil-eye font-size-18"></i></a>
                                  <a rel="{{$mokaysa->id}}" rel1="delete-mokaysa"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف  المقايسه   " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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
     @endif
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script>
    $('.sa-warning').click(function () {
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
