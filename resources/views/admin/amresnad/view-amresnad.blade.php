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
    @slot('title') @lang('translation.project_description')@endslot
@endcomponent

    <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                                <h4 class="mb-3 blog-title">{{$projectDetails->title}}</h4>
                                <h5 class="mt-4 pt-2">{{$projectDetails->start_date}} -- {{$projectDetails->end_date}}</h5>

                            </div>
                        </div>

                    </div>
                    <div class="project_content">
                            <div class="row">

                                    <div class="col-md-4">
                                    <p><span class="listspan">الملاك: </span>
                                        <ul class="ownerslist">
                                                @foreach($projectDetails->owners as $owner)

                                                <li>{{$owner->owner_name}} </li>

                                                @endforeach
                                        </ul>
                                        </p>
                                    </div>
                                <div class="col-md-4">
                                    <p><span class="listspan">مسؤل الوطنيه بالموقع : </span>
                                        {{$projectDetails->wataniaresp}}
                                    </p>
                                </div>
                                    <div class="col-md-4">
                                    <p><span class="listspan" >الأستشارى : </span> {{$projectDetails->head_maktabfany}}</p>
                                    </div>

                                    <div class="col-md-4">
                                    <p><span class="listspan" >@lang('translation.department') : </span> {{$projectDetails->sector}}</p>
                                    </div>

                            </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-4">

                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">@lang('translation.project_description') :</a>
                                </li>

                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                              <p>{{$projectDetails->description}}</p>
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
    </div>
@endsection
