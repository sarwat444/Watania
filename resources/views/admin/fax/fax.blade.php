@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.fax')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('title') المكاتبات  @endslot
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
@endcomponent
    <div class="row">
        <div class="col-lg-12">
              <div class="card">
               <div class="card-body">
            <div>

     <a href="add-fax" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus mr-1"></i>أضافه مكاتبه جديده </a>

            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
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

            </div>
            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th>مسلسل المكاتبه  </th>
                            <th>القيد </th>
                            <th>جهه الفاكس </th>
                            <th>وجهه الفاكس </th>
                            <th>رقم صادر الجهه </th>
                            <th>الأختصاص</th>
                            <th>التاريخ</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($faxs as $fax)
                                <tr>

                                    <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$fax->id}}</a> </td>
                                    <td>  {{$fax->kaed}}</td>
                                    <td>  {{$fax->geha_fax}}</td>
                                    <td>  {{($fax->waght_fax ) ? 'وارد' : 'صادر'}}</td>
                                    <td>  {{$fax->sader_elgeha_number}}</td>
                                    <td>
                                    @foreach($geha_ekhtesas as $geha)
                                       @if($fax->geha_ekhtesas == $geha->id) {{$geha->sector_name}} @endif
                                    @endforeach
                                    </td>
                                    <td>  {{$fax->esdar_date}}</td>

                                    <td>
                                        @if(Auth::user()->role_id != 4 && Auth::user()->role_id != 5 )
                                        <a href="{{url('admin/edit-fax/'.$fax->id)}}" class="px-3 text-success" data-toggle="tooltip" data-placement="top" title="تعديل  المكاتبه  "><i class="uil uil-pen font-size-18" ></i></a>
                                        @endif
                                        <a href="{{url('admin/view-fax/'.$fax->id)}}" class="px-3 text-primary" data-toggle="tooltip" data-placement="top" title="عرض المكاتبه  "><i class="uil uil-eye font-size-18"></i></a>
                                        @if(Auth::user()->role_id == 1 )
                                        <a rel="{{$fax->id}}" rel1="delete-fax"  class="px-3 text-danger sa-warning" data-toggle="tooltip" data-placement="top" title="حذف  المكاتبه  "><i class="uil uil-trash-alt font-size-18"  ></i></a>
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

