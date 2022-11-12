<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
   الالتزمات
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') @lang('translation.Dashboard') @endslot
        @slot('title') الألتزمات @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  <div class="col-lg-12">
          @if(Session::has('flash_message_error'))
      <div class="alert alert-error alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{!! session('flash_message_error') !!}</strong>
      </div>
  @endif
  @if(Session::has('flash_message_success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{!! session('flash_message_success') !!}</strong>
      </div>
  @endif

            <div class="card">
                <div class="card-body">
                    <div>
                        <a href="{{url('admin/addeltezam/'. $projectDetails->id)}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i>   أضافه ألتزام  جديد  </a>
                    </div>
                    <div class="table-responsive mb-4">
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">

                                <th>الكود</th>
                                <th>محتوى الألتزام  </th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($eltezmat))
                                    @foreach($eltezmat as $akd)
                                        <tr>
                                            <td>{{$akd->id}}</td>
                                            <td>
										      	{!! $akd->content !!}
                                            </td>
                                            <td>
                                                <a href="{{url('/admin/editeltezam/'.$akd->id.'/'.$akd->status)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل بيانات العقد "><i class="uil uil-pen font-size-18" ></i></a>
                                                <a href="{{url('admin/vieweltezam/'.$akd->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض بيانات العقد "><i class="uil uil-eye font-size-18"></i></a>
                                                <a rel="{{$akd->id}}" rel1="deleteeltezam"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف العقد  " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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
