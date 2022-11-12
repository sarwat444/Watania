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
        @slot('title') محتوى الموقف التنفيذى  @endslot
    @endcomponent

    <!-- end row -->

    <div class="card">
        <div class="card-body">

            <div class="project_content">
                <div class="row">

                    <div class="col-md-8 owners">

                        <div class="col-md-4">
                            <p> <span class="listspan">مكونات   المشروع    </span> {{$motaklas->project_contents}}</p>
                        </div>
                        <div class="col-md-4">
                            <p><span class="listspan">   قيمه التعاقد    </span> {{$motaklas->contract_value}}  </p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">   تاريخ التعاقد   </span> {{$motaklas->contract_date}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">    بدء المشروع    </span> {{$motaklas->project_start}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">    نهايه  المشروع    </span> {{$motaklas->project_end}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">      نسبه التنفيذ     </span> {{$motaklas->execuation_percent}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">       النصرف  باطن     </span> {{$motaklas->monsarf}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">         نسبه الصرف      </span> {{$motaklas->monsarf_percent}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">          ملاحظات       </span> {{$motaklas->notes}}</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->




            </div>
        </div>
    </div>
    </div>
@endsection
