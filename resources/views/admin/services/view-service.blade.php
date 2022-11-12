@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.Product_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.service_des')@endslot
@endcomponent

    <!-- end row -->


       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-3">
                                        
                                        
                                        
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                     @foreach($serviceImages as $key =>$image)
                                            <a class="nav-link {{($key== 1) ? 'active' : '' }}" id="product-tab". {{$key}} data-toggle="pill" href="#product-".{{key}} role="tab">
                                                <img src="{{ URL::asset('public/uploads/services/' . $image->image)}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                             </a>
                                    @endforeach
                                        <a class="nav-link" id="product-2-tab" data-toggle="pill" href="#product-2" role="tab">
                                                <img src="{{ URL::asset('assets/images/product/img-2.png')}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                            </a>
                                            <a class="nav-link" id="product-3-tab" data-toggle="pill" href="#product-3" role="tab">
                                                <img src="{{ URL::asset('assets/images/product/img-3.png')}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                            </a>
                                            <a class="nav-link" id="product-4-tab" data-toggle="pill" href="#product-4" role="tab">
                                                <img src="{{ URL::asset('assets/images/product/img-6.png')}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                            </a>
                                        </div>
                                
                                        
                                    </div>

                                    <div class="col-9">
                                        <div class="tab-content position-relative" id="v-pills-tabContent">

                                          @foreach($serviceImages as $key => $image)
                                            <div class="tab-pane fade  {{ ($key == 1) ? 'show active':'' }}" id="product-".{{key}} role="tabpanel">
                                                   <div class="product-img">

                                                       <img src="{{ URL::asset('public/uploads/services/'.$image->image)}}"
                                                             class="img-fluid mx-auto d-block" 
                                                            data-zoom="{{ URL::asset('public/assets/images/product/'. $image->image)}}">
                                                    </div>
                                            </div>
                                         @endforeach
                                            <div class="tab-pane fade" id="product-2" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('assets/images/product/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-3" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('assets/images/product/img-3.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="product-4" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('assets/images/product/img-6.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                       
                                        </div>
                                        <div class="row text-center mt-2">
                                      
                                          
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                                <h4 class="mb-3 blog-title"> {{$details->service_name}} </h4>
                                <h5 class="mt-4 pt-2 blog_date">{{$details->created_at}} </h5>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-4">
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">@lang('translation.service_des') :</a>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">    
                                                <p><?php echo  nl2br($details->description) ?> </p>
                                            </div>
                                        </div>
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