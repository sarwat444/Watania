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
        @slot('title') محتوى  المده الأضافيه  @endslot
    @endcomponent

    <!-- end row -->

    <div class="card">
        <div class="card-body">

            <div class="project_content">
                <div class="row">

                    <div class="col-md-8 owners">

                        <div class="col-md-10">
                            <p> <span class="listspan">تاريخ البدايه ونهايه المشروع الجديده </span> {{$modaDetails->project_start}} /  {{$modaDetails->project_end}} </p>
                        </div>
                        <div class="col-md-4">
                            <p><span class="listspan">  المده الاضافيه للمشروع    </span> {{$modaDetails->time_added}}  </p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan"> تاريخ الاستلام الابتدائي  </span> {{$modaDetails->estlam_date}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">    تاريخ الاستلام الفعلى    </span> {{$modaDetails->estlam_fely }}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">    قيمه الأعمال المنفذه    </span> {{$modaDetails->amalmonfazavaliue}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">
أجمالى قيمه الاعمال كامله     </span> {{$modaDetails->egmalykemaamal}}</p>
                        </div>
                        <div class="col-md-4">
                            <p> <span class="listspan">       نسبه التنفيذ     </span> {{$modaDetails->nesbatanfeez}}</p>
                        </div>

                        <div class="col-md-10">
                            <p> <span class="listspan">          البرنامج الزمنى المعدل       </span> {{$modaDetails->programe}}</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->




            </div>
        </div>
    </div>
    </div>
@endsection
