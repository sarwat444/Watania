<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.korast_elshterat')
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle')@lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.korast_elshterat')@endslot
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


            @if(isset($korasa_eshtratat->project_id) && $korasa_eshtratat->project_id != 0 )

                   <div class="card">
                      <div class="card-header">بيانات كراسه الاشتراطات الخاصه بالمشروع </div>
                      <div class="card-body">

                    <div class="mt-4">
                        <div class="product-desc">

                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                            <li class="nav-item">

                                    <a class="nav-link active"  data-toggle="tab" href="#files" role="tab">ملفات المشروع :</a>
                               </li>
                                <li class="nav-item">

                                      <a class="nav-link" data-toggle="tab" href="#desc" role="tab">@lang('translation.project_description') :</a>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane show fade active" id="files" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-10">
                                           @foreach($korasa_eshtratat->files as $file)
                                                <div class="col-md-3">
                                                    <a class="fileicon" data-toggle="tooltip" data-placement="top" title= "{{$file->path}}" href="{{url('public/uploads/korasa_eshteratat/'.$file->path)}}"><i class="bx bx-file"></i></a>
                                                </div>
                                           @endforeach
                                        </div>
                                      </div>
                                   </div>
                                <div class="tab-pane show fade" id="desc" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">

                                              <p>{{$korasa_eshtratat->content}}</p>

                                            </div>
                                        </div>
                                      </div>
                                   </div>
                        </div>


                      <div>
                  </div>

                      </div>
                   </div>
              </div>
              </div>
              </div>


            @else
                <div id="addproduct-accordion" class="custom-accordion">
                        <div class="card">
                                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                                        <div class="p-4">
                                            <div class="media align-items-center">
                                                <div class="mr-3">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                            01
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="font-size-16 mb-1"> بيانات المقايسه   </h5>
                                                </div>
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                                        <div class="p-4 border-top">
                                            <div class="card-body">
                                                       <form id="add_mokaysa"  action="{{url('admin/mokaysa/appendmokaysa')}}"  method="post" enctype="multipart/form-data">
                                                           {{ csrf_field() }}
                                                           <div class="form-group row add-korasa">
                                                               <div class="col-md-12">
                                                                     <div class="row">
                                                                        <div class="col-md-2">
                                                                            <input  type="hidden" name="project_id" value="{{$projectDetails->id}}" />
                                                                            <input type="hidden" name="status" value="{{$status}}" />
                                                                            <textarea class="form-control"  name="content" rows="4" ></textarea>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <input type="text" class="form-control"  name="unit" placeholder="الوحده">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <input type="number" min="0" class="form-control"  name="quantity" placeholder="الكميه">
                                                                        </div>
                                                                         <div class="col-md-2">
                                                                             <input type="number" min="0" class="form-control"  name="feka" placeholder="الفئه ">
                                                                         </div>
                                                                         <div class="col-md-2">
                                                                             <input type="number" min="0" class="form-control"  name="egmaly" placeholder="الاجمالى ">
                                                                         </div>
                                                                         <div class="col-md-2">
                                                                             <button type="submit" class="btn btn-primary mb-2">ادراج البيانات  </button>
                                                                         </div>
                                                                     </div>
                                                               </div>
                                                           </div>

                                                       </form>
                                                         </div>
                                                     </div>

                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="table-responsive mb-4">
                                                                    <table id="mokays-table" class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                                                        <thead>
                                                                        <tr class="bg-transparent">
                                                                            <th>الوحده </th>
                                                                            <th>الكميه </th>
                                                                            <th>الفئه </th>
                                                                            <th>الأجمالى </th>
                                                                            <th>التحكم</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach( $mokaysa as $mokaysael)
                                                                            <tr class="gradeX">
                                                                                <td class="center"><input type="hidden" name="idAttr[]" value="{{ $mokaysael->id }}">{{ $mokaysael->id }}</td>
                                                                                <td class="center">{{ $mokaysael->unit }}</td>
                                                                                <td class="center">{{ $mokaysael->quantity }}</td>
                                                                                <td class="center">{{ $mokaysael->egmaly }}</td>
                                                                                <td class="center"><input name="price[]" type="text" value="{{ $mokaysael->feka }}" /></td>
                                                                                <td class="center">
                                                                                    <input type="submit" value="تعديل البيانات" class="btn btn-primary btn-mini" />
                                                                                    <?php /* <a rel="{{ $attribute->id }}" rel1="delete-attribute" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a> */ ?>
                                                                                    <a href="{{ url('admin/delete-attribute/'.$mokaysael->id) }}" class="btn btn-danger btn-mini">Delete</a>
                                                                                </td>

                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                            </div>

                        </div>

                    </div>
                    </div>

  @endif

@endsection
@section('script')

    <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-add-product.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/ckeditor/ckeditor.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-repeater.int.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>
    <script>
        $(document).ready(function (){
           $('#add_mokaysa').submit(function(e){
               e.preventDefault() ;
               jQuery.ajax({
                   type: "post",
                   url: "{{url('/admin/mokaysa/appendmokaysa')}}",
                   data: jQuery('#add_mokaysa').serialize(),
                   success: function (data) {
                       /*$('#mokays-table tbody').append(data);*/
                   },
                   error: function (err) {
                       console.log(err);
                   }
               });
           })
        })

    </script>
@endsection
