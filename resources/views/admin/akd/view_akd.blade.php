<?php
$projectsidebar = '' ;
?>
@extends('layouts.adminLayout.master')
@section('title')محتوى العقد
@endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') محتوى العقد@endslot
@endcomponent
    <!-- end row -->
            <div class="card">
                <div class="card-body">
                    <div class="project_content">
                            <div class="row">

                                <div class="col-md-8">
                                    <p><span class="listspan" > العقود   : </span>
                                               @if(!empty($akd_details->files) && count($akd_details->files ) >0 )
                                                    @foreach($akd_details->files as $file)
                                                        <div class="col-md-3">
                                                            <a class="fileicon" data-toggle="tooltip" data-placement="top" title= "{{$file->path}}" href="{{url('/uploads/akd/'.$file->path)}}"><i class="bx bx-file"></i></a>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>لا يوجد اي مستندات </p>
                                                @endif

                                </div>
                                <div class="col-md-8 owners">

                                    <p><span class="listspan" >محتوى العقد: </span></p>
									<p>
										{!! $akd_details->content !!}
									</p>
                                </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>
    </div>
@endsection
