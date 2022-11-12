<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')
    @lang('translation.Product_Detail')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') @lang('translation.Dashboard') @endslot
        @slot('title') محتوى المستخلص @endslot
    @endcomponent

    <!-- end row -->

    <div class="card">
        <div class="card-body">

            <div class="project_content">
                <div class="row">

                    <div class="col-md-8">
                        <p><span class="listspan" >  ملفات المستخلص   : </span>
                        @if( count($motaklas->files ) >0 )
                            @foreach($motaklas->files as $file)
                                <div class="col-md-3">
                                    <a class="fileicon" data-toggle="tooltip" data-placement="top" title= "{{$file->path}}" href="{{url('/uploads/mostaklas/'.$file->path)}}"><i class="bx bx-file"></i></a>
                                </div>
                            @endforeach
                        @else
                            <p>لا يوجد اي مستندات </p>
                        @endif

                    </div>


                    <div class="col-md-8 owners">

                        <div class="col-md-4">
                            <p> <span class="listspan">تاريخ  المستخلص  </span> {{$motaklas->date}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><span class="listspan">  القيمه الماديه   </span> {{$motaklas->value}}  </p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">  الموقع عليه   </span> {{$motaklas->signature_name}}</p>
                        </div>

                    </div>
                </div>
                <!-- end row -->




            </div>
        </div>
    </div>
    </div>
@endsection
