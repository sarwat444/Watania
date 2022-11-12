<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
   العقود
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') @lang('translation.Dashboard') @endslot
        @slot('title') البيانات الاخري @endslot
    @endcomponent

    <div class="row">
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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    @if( Auth::user()->role_id != 3 )
                    <div>
                        <a href="{{url('admin/add_other/'. $projectDetails->id)}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i>   أضافه بيانات جديده  </a>
                    </div>
                    @endif
                    <div class="table-responsive mb-4">
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">

                                <th>الكود</th>
                                <th>محتوى البيانات   </th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($others))
                                    @foreach($others as $akd)
                                        <tr>
                                            <td>{{$akd->id}}</td>
                                            <td>
											{!! $akd->content !!}
                                            </td>
                                            <td>
                                                @if( Auth::user()->role_id != 3 )
                                                <a href="{{url('/admin/edit_other/'.$akd->id.'/'.$akd->status)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل بيانات العقد "><i class="uil uil-pen font-size-18" ></i></a>
                                                @endif
                                                    <a href="{{url('admin/view-other/'.$akd->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض بيانات العقد "><i class="uil uil-eye font-size-18"></i></a>

                                                @if(Auth::user()->role_id == 1  )
                                                   <a rel="{{$akd->id}}" rel1="delete-other"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف العقد  " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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


    <script>

            $(document).ready(function() {
                $('.table').DataTable();
            } );
    </script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script>
        $(document).on('click' ,  '.sa-warning' , function (){
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
        })

    </script>
@endsection
