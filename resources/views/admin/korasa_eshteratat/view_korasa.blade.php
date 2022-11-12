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
    @slot('title') محتوى الكراسه @endslot
@endcomponent

    <!-- end row -->

            <div class="card">
                <div class="card-body">
                
                    <div class="project_content">
                            <div class="row">
                                <div class="col-md-8">
                                    <p><span class="listspan" > نوع الكراسه  : </span>
                                    @if($korasa_details->status   == 0 )
                                        <p>
                                        كراسه مالك  
                                        </p>
                                    @elseif ($projectDetails->type == 1 )
                                        <p>
                                        كراسه باطن 
                                        </p>
                                        @endif

                                </div>
                                   

                                <div class="col-md-8">
                                    <p><span class="listspan" >  ملفات الكراسه   : </span>
                                               @if(!empty($korasa_details->files) && count($korasa_details->files ) >0 )
                                                    @foreach($korasa_details->files as $file)
                                                        <div class="col-md-3">
                                                            <a class="fileicon" data-toggle="tooltip" data-placement="top" title= "{{$file->path}}" href="{{url('/uploads/korasa_eshteratat/'.$file->path)}}"><i class="bx bx-file"></i></a>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>لا يوجد اي مستندات </p>
                                                @endif

                                </div>

                                
                                <div class="col-md-8 owners">

                                    @if(!empty($korasa_details->korasamalekowners) && count($korasa_details->korasamalekowners ) > 0 )     
                                        <p><span class="listspan" >  {{$korasa_details->status == 0 ? 'مالك ': 'باطن ' }} الكراسه   : </span>
                                            
                                                            @foreach($korasa_details->korasamalekowners  as $owner)
                                                            <h3><span>{{$korasa_details->status == 0 ? 'المالك  ': 'الباطن  ' }} :  </span> {{$owner->owner_name}} /  <span>القيمه الماليه   :  </span> {{$owner->value}}  </h3>
                                                            @endforeach
                                            
                                    @endif
                                </div>
                    </div>
                    <!-- end row -->




                </div>
            </div>
        </div>
    </div>
@endsection
