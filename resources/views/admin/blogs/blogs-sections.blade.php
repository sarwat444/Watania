@extends('layouts.master')
@section('title')
@lang('translation.blogs_sections')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.add_section') @endslot
@endcomponent

    <div class="row">
        <div class="col-lg-12">
              <div class="card">
               <div class="card-body">
            <div>

                <a href="add-section" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> @lang('translation.add_section')</a>
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            
                            <th>@lang('translation.id')</th>
                            <th>@lang('translation.section_name')</th>

                            <th style="width: 120px;">@lang('translation.action')</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                           
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#MN0132</a> </td>
                    
         
                            <td>Melvin Martin</td>
                            <td>
                              

                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="@lang('translation.delete')"><i class="uil uil-trash-alt font-size-18" id="sa-warning" ></i></a>

                            </td>
                        </tr>
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
@endsection