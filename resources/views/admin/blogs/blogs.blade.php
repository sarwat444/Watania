@extends('layouts.master')
@section('title')
@lang('translation.blogs')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
       <link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.add_blog') @endslot
@endcomponent

    <div class="row">
        <div class="col-lg-12">
            
              <div class="card">
               <div class="card-body">
                   
                   
            <div>
                <div class="row">
                    <div class="col-md-9" > 
                             <a href="add-blog" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i> @lang('translation.add_blog')</a>

                    </div>
               <div class="col-md-3" >    
                                 <select class="form-control select2-search-disable">
                                            <option> أختيار القسم   </option>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                  </select>
                   
                   </div>
                </div>
         
            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            
                            <th>@lang('translation.id')</th>
                            <th>@lang('translation.title')</th>
                            <th>@lang('translation.likes')</th>
                            <th>@lang('translation.section')</th>
                            <th>@lang('translation.created_at')</th>
                            <th style="width: 120px;">@lang('translation.action')</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                           
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#MN0132</a> </td>
                            <td>
                                10 Jul, 2020
                            </td>
                            <td>85 <i class="uil uil-eye font-size-18"></i></td>
                            <td>Melvin Martin</td>
                            <td>Melvin Martin</td>
                            <td>
                              
                                <a href="{{url('edit-blog')}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل  "><i class="uil uil-pen font-size-18" ></i></a>

                             
                                  <a href="{{url('view-blogDetails')}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="view"><i class="uil uil-eye font-size-18"></i></a>

                                <a href="javascript:void(0);" class="px-3 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash-alt font-size-18" id="sa-warning" ></i></a>

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
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>
@endsection