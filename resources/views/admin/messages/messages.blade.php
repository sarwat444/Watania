@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.messages')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.messages') @endslot

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
                            <th>@lang('translation.name')</th>
                             <th>@lang('translation.phone')</th>
                             <th>@lang('translation.email')</th>
                            <th>@lang('translation.send_at')</th>
                            <th style="width: 120px;">@lang('translation.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message )
                        <tr>
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$message->id}}</a> </td>
                             <td>
                                {{$message->name}}
                            </td>
                              <td>
                                {{$message->phone}}
                            </td>
                            <td>
                                {{$message->email}}
                            </td>
                            <td>{{$message->created_at}}</td>
                            <td>
                          <a href="{{url('admin/view-message/'.$message->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="?????? ?????????????? "><i class="uil uil-eye font-size-18"></i></a>
                          <a href="javascript:void(0);" rel="{{$message->id}}" rel1="delete-message" class="px-3 text-danger sa-warning" data-toggle="tooltip" data-placement="top" title=" ??????  "><i class="uil uil-trash-alt font-size-18"  ></i></a>
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
            title: "????  ????????  ?????????? ????  ?????????? ",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#34c38f",
            cancelButtonColor: "#f46a6a",
            confirmButtonText: "???????????????? " ,
            cancelButtonText :"?????????? " ,
          }).then(function (result) {
            if (result.value) {
               window.location.href="/admin/"+deleteFunction+"/"+id;
            }
          });
        }); //Parameter
    </script>
@endsection