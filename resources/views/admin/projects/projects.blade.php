@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.sabakat_elamal')
@endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.projects') @endslot
@endcomponent

    <div class="row">
        <div class="col-lg-12">

              <div class="card">
               <div class="card-body">
            <div>
                   @if(Auth::user()->role_id  != 2  && Auth::user()->role_id != 5  && Auth::user()->role_id != 3 )
                     <a href="add-project" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> @lang('translation.add_project')</a>
                     <a href="print-projects" class="btn btn-primary waves-effect waves-light mb-3 btnprn btn "><i class="mdi mdi-plus mr-1"></i> طباعه  المشاريع </a>
                   @endif
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">

                            <th>@lang('translation.project_number')</th>
                            <th>@lang('translation.project_name')</th>
                            <th>@lang('translation.start_date')</th>
                             <th>@lang('translation.department')</th>
                            <th>@lang('translation.end_date')</th>
                            <th>@lang('translation.project_status')</th>

                            <th>التحكم </th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($allprojects as $project)
                        <tr>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$project->id}}</a> </td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>
                                    @foreach($sectors as $sector)
                                    @if($project->sector ==  $sector->id )  {{ $sector->sector_name }}@endif
                                    @endforeach
                            </td>

                            <td>{{$project->end_date}}</td>
                            <td>
                                   @if($project->project_status == 1 )
                                    <p class="badge bg-soft-danger font-size-12">
                                        تسليم ابتدائى
                                    </p>

                                    @elseif ($project->project_status == 2 )
                                    <p class="badge bg-soft-warning font-size-12">
                                        تسليم نهائى
                                    </p>
                                    @elseif ($project->project_status ==  3 )
                                    جارى التنفيذ

                                        @elseif ($project->project_status ==  4 )
                                        تحت الدراسة

                                            @elseif ($project->project_status ==  5 )
                                            تم التنفيذ
                                    </p>
                                @endif

                            </td>


                            <td>
                                @if(Auth::user()->role_id != 5 && Auth::user()->role_id != 3 )
                                  <a href="{{url('admin/edit-project/'.$project->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل المشروع    "><i class="uil uil-pen font-size-18" ></i></a>
                                @endif
                                  <a href="{{url('admin/view-project/'.$project->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض  المشروع  "><i class="uil uil-eye font-size-18"></i></a>
                                  @if(Auth::user()->role_id  == 1 )
                                  <a rel="{{$project->id}}" rel1="delete-project"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف  المشروع  " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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
    <script src="{{ URL::asset('assets/js/jquery.printPage.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnprn').printPage();
        });
    </script>

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
