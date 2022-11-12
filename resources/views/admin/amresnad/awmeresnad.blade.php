<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
أمر الاسناد
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') أوامر الاسناد  @endslot
@endcomponent

    <div class="row">
        <div class="col-lg-12">

              <div class="card">
               <div class="card-body">
            <div>
                   @if( Auth::user()->role_id != 3 )
                     <a href="{{url('admin/add-amresnad/'.$projectDetails->id.'/0')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i>اضافه  أمر الأسناد للمالك </a>
                     <a href="{{url('admin/add-amresnad/'.$projectDetails->id.'/1')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> أضافه أمر اسناد للباطن </a>
                  @endif
                    </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th>الترتيب </th>
                            <th>رقم أمر الاسناد </th>
                            <th>تاريخ أمر الاسناد </th>
                            <th>جهه الصادر </th>
                            <th>القيمه التعاقديه </th>
                             <th>بدايه المشروع </th>
                            <th>نهايه المشروع </th>

                            <th>التحكم</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($amresnad))
                            @foreach($amresnad as $amr)
                                <tr>

                                    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$amr->id}}</a> </td>
                                    <td>{{$amr->esnad_number}}</td>
                                    <td>{{$amr->date}}</td>
                                    <td>{{$amr->geha_sader}}</td>
                                    <td>{{$amr->contract_value}}</td>
                                    <td>{{$amr->start_project}}</td>
                                    <td>{{$amr->end_project}}</td>

                                    <td>
                                        @if( Auth::user()->role_id != 3 )
                                        <a href="{{url('admin/edit-amresnad/'.$amr->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل امر الاسناد    "><i class="uil uil-pen font-size-18" ></i></a>
                                        @endif
                                        @if(Auth::user()->role_id == 1  )
                                          <a rel="{{$amr->id}}" rel1="delete-amresnad"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف  أمر الاسناد  " ><i class="uil uil-trash-alt font-size-18" ></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                    @endif
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
