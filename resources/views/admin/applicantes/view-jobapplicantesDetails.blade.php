@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.Invoice_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') البيانات الشخصيه @endslot
    @slot('title') @lang('translation.project_details') @endslot
@endcomponent



<div class="card">
    <div class="card-body">
        <div class="media">
            <img class="d-flex mr-3 rounded-circle avatar-sm" src="{{ URL::asset('uploads/applicants/' . $applicant->image)}}" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="font-size-14 my-1 jobapplicanname">{{$applicant->name}}</h5>
                <small class="text-muted jobapplicanemail">{{$applicant->email}}</small>

                <h5 class="text-muted jobapplicaohone">{{$applicant->phone}}</h5>

                <h4 class="mt-0 carrer">{{($applicant->job != null) ? $applicant->job->name : '--'}}</h4>



            </div>
        </div>
        <p class="request_date"> تاريخ الطلب     : <span class="font-weight-medium">{{$applicant->created_at}}</span></p>

        <div class="row">
            <ul class="download_files">
                @foreach ($applicant->files as $file)
                    <li><a href="{{asset('uploads/applicants/' . $file->path)}}" target="_blank"><i class="mdi mdi-file-outline" > </i></a></li>
                @endforeach

            </ul>
        </div>

        <div class="card-body">
            <div class="product-desc">
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">نبذه عن  المتقدم :  :</a>
                    </li>
                </ul>
                <div class="tab-content border border-top-0 p-4">
                    <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                        <div class="row">

                            <div class="col-sm-9 col-md-10">
                                <div class="text-muted p-2">
                                    {!! $applicant->about !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     
@endsection