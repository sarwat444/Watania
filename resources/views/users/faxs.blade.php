@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.sabakat_elamal')
@endsection
@section('css')
    <!-- DataTables -->
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


                     <a href="add-project" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> @lang('translation.add_project')</a>
   
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            
                            <th>@lang('translation.project_number')</th>
                            <th>@lang('translation.project_name')</th>
                            <th>@lang('translation.start_date')</th>
                            <th>@lang('translation.owner')</th>
                            <th>@lang('translation.maktbfany_responsaple')</th>
                             <th>@lang('translation.department')</th>
                            <th>@lang('translation.end_date')</th>
                            <th>@lang('translation.project_status')</th>

                            <th style="width: 120px;"></th>
                        </tr>
                    </thead>
                    <tbody>

 
                    @foreach($sector_faxs as $fsector)


                @php 
                            
                        $imgids = App\FaxViewer::where('sector_id',$fsector->id)->pluck('image_id');
                        $images =  \App\Models\ModelImages::whereIn('id',$imgids)->where(['section'=>'frau' , 'motive_id' => $id ])->get();
                        foreach($sector_faxs->fax_id as $faxsector)
                        {
                        
                        $faxs =  Fax::where(['id' => $faxsector->fax_id ])->get() ; 
                        dd($faxsector) ;
                        }

                    @endphp
                        <tr>
                           
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$fsector->id}}</a> </td>
                            <td>{{$fsector->title}}</td>
                            <td>{{$fsector->start_date}}</td>
                            <td>{{$fsector->owner}}</td>
                             <td>{{$fsector->head_maktabfany}}</td>
                            <td>{{$fsector->sector}}</td>
                            <td>{{$fsector->end_date}}</td>
                           
                            <td>
                                  <a href="{{url('admin/edit-project/'.$fsector->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل المشروع    "><i class="uil uil-pen font-size-18" ></i></a>
                                  <a href="{{url('admin/view-project/'.$fsector->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض  المشروع  "><i class="uil uil-eye font-size-18"></i></a>
                                  <a rel="{{$fsector->id}}" rel1="delete-project"  class="px-3 text-danger sa-warning " data-toggle="tooltip" data-placement="top" title="حذف  المشروع  " ><i class="uil uil-trash-alt font-size-18" ></i></a>
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