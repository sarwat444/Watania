
@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.messages')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.view_message') @endslot

@endcomponent

                    


<div class="card">
     <div class="card-body ">
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle avatar-sm" src="{{ URL::asset('assets/images/backend_images/users/avatar-6.jpg')}}" alt="Generic placeholder image">
                            <div class="media-body message-content">
                                <h3 class="font-size-14 my-1">{{$message->name}}</h3>
                                <small class="text-muted">{{$message->email}}</small>
                                <p>{{$message->phone}}</p>

                            </div>
                        </div>

                        <h4 class="mt-0 font-size-16">{{$message->subject}}</h4>

                      <p>{{$message->message}}</p>
                    
                    
                    </div>
    
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
@endsection