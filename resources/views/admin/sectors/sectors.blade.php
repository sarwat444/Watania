@extends('layouts.adminLayout.master')
@section('title')
    القطاعات
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') @lang('translation.Dashboard') @endslot
        @slot('title') القطاعات @endslot
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
            <div class="card">
                <div class="card-body">
                    <div>

                        <a href="add-sector" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> أضافه قطاع جديد </a>
                    </div>
                    <div class="table-responsive mb-4">
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">

                                <th>رقم القطاع </th>
                                <th>اسم القطاع </th>
                                <th>ترتيب  القطاع</th>
                                <th style="width: 120px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sectors as $sector)
                                <tr>
                                    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$sector->id}}</a> </td>
                                    <td>{{$sector->sector_name}}</td>
                                    <td>{{$sector->ordering}}</td>
                                    <td>
                                        <a href="{{url('admin/edit-sector/'.$sector->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل القطاع    "><i class="uil uil-pen font-size-18" ></i></a>
                                        <a rel="{{$sector->id}}" rel1="delete-sector"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف  القطاع   " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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
