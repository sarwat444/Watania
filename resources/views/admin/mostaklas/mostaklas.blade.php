
<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
    المستخلصات
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') @lang('translation.Dashboard') @endslot
        @slot('title') المستخلصات   @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    @if( Auth::user()->role_id != 3 )
                    <div>
                        <a href="{{url('admin/add_mostaklas/'. $projectDetails->id .'/0')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> اضافه مستخلص  للمالك </a>
                        <a href="{{url('admin/add_mostaklas/'. $projectDetails->id .'/1')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> اضافه مستخلص  الباطن </a>
                    </div>
                    @endif
                    <div class="table-responsive mb-4">
                    <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                            <thead>
                                            <tr class="bg-transparent">
                                                <th> رقم المستخلص </th>
                                                <th>تاريخ المستخلص </th>
                                                <th>القيمه الماديه </th>
                                                <th>الموقع عليه </th>
                                                <th> حاله المستخلص </th>
                                                <th style="width: 120px;"></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @if(!empty($mostaklasat))

                                                           @foreach($mostaklasat as $mostakls)
                                                                <tr>
                                                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$mostakls->id}}</a> </td>
                                                                <td>{{$mostakls->date}}</td>
                                                                <td>{{$mostakls->value}}</td>
                                                                <td>{{$mostakls->signature_name}}</td>
                                                                <td>{{$mostakls->status }}</td>
                                                                <td>
                                                                    @if( Auth::user()->role_id != 3 )
                                                                <a href="{{url('admin/edit_mostaklas/'.$mostakls->id )}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل بيانات المستخلص "><i class="uil uil-pen font-size-18" ></i></a>
                                                               @endif
                                                                <a href="{{url('admin/view_mostaklas/'.$mostakls->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض بيانات المستخلص"><i class="uil uil-eye font-size-18"></i></a>
                                                                         @if(Auth::user()->role_id  == 1 )
                                                                             <a rel="{{$mostakls->id}}" rel1="delete_mostaklas"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف المستخلص    " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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
