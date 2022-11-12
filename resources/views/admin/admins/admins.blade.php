@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.users')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.users') @endslot
@endcomponent


    <div class="row">
        <div class="col-lg-12">
              <div class="card">
               <div class="card-body">
            <div>

    <a href="{{url('admin/add-admin')}}" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> @lang('translation.add_user') </a>
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">

                            <th>@lang('translation.id')</th>
                                 <th>@lang('translation.name')</th>
                            <th>@lang('translation.email')</th>
                             <th>@lang('translation.password')</th>
                             <th>الصلاحيه  </th>
                            <th style="width: 120px;">@lang('translation.action')</th>
                        </tr>
                    </thead>
                    <tbody>



                       @foreach ($users as $user )
                        <tr>


                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$user->id}}</a> </td>
                             <td>
                             {{$user->name}}
                            </td>
                             <td>
                             {{$user->email}}
                            </td>
                              <td>
                              {{$user->password}}
                            </td>
                            <td>
                            @if($user->role_id == 1 )
                             سوبر ادمن
                            @elseif ($user->role_id == 2 )
                             ادمن
                            @elseif ($user->role_id == 3 )
                              wccs
                              @elseif ($user->role_id == 4 )
                              زائر

                            @endif

                            </td>

                            <td>

                                  <a href="{{url('admin/edit-admin/'.$user->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل  "><i class="uil uil-pen font-size-18"></i></a>

                                <a href="javascript:void(0);"  rel="{{$user->id}}" rel1="delete-admin"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف  "><i class="uil uil-trash-alt font-size-18 "  ></i></a>
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
        }); //Parameter

        </script>
@endsection
