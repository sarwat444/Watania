@extends('layouts.adminLayout.master')
@section('title')
بيانات المقايسه
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') بيانات المقايسه  @endslot
    @slot('title') عرض بيانات المقايسه  @endslot
@endcomponent

 <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                          <h3 class="text-center">{{$mokaysaDetails->name}} </h3>
                         <h3><span>ملفات المقايسه </span></h3>
                                @if(!empty($mokaysaDetails->files) && count($mokaysaDetails->files ) >0 )
                                    @foreach($mokaysaDetails->files as $file)
                                        <div class="col-md-3">
                                            <a class="fileicon" data-toggle="tooltip" data-placement="top" title= "{{$file->path}}" href="{{url('/uploads/mokaysa/'.$file->path)}}"><i class="bx bx-file"></i></a>
                                        </div>
                                    @endforeach
                                @else
                                    <p>لا يوجد اي مستندات </p>
                                @endif
                    </div>
                    <div class="row">
                    <!-- end row -->
                    <div class="col-xl-10">
                  <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">

                            <th>التسلسل  </th>
                            <th>الصنف</th>
                            <th>الوحده</th>
                            <th>الكميه </th>
                            <th>الفئه </th>
                            <th>الاجمالى </th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($mokaysaDetails->bnood as $band)
                        <tr>

                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$band->id}}</a> </td>
                            <td> {{$band->element}} </td>
                            <td> {{$band->unit}} </td>
                            <td> {{$band->quantity}} </td>
                            <td> {{$band->feka}} </td>
                            <td> {{$band->total}} </td>

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
@endsection
