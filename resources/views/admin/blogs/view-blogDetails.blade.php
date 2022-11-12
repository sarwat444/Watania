@extends('layouts.master')
@section('title')
@lang('translation.Product_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.blog_description')@endslot
@endcomponent

    <!-- end row -->


       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="product-detail">
                                <div class="row">
                              
                                        <div class="tab-content position-relative" id="v-pills-tabContent">
                                        
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                <div class="product-img">
                                                    <img src="{{ URL::asset('assets/images/product/img-1.png')}}" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                </div>
                                            </div>
                                            
                                            
                                
                                        </div>
                                     
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                             
                                <h4 class="mb-3 blog-title">عنوان  المقال</h4>

                               

                                <h5 class="mt-4 pt-2  blog_date">2020-10-11 </h5>

                                
                                <div>
                                    <div class="row">
                                     

                                     
                                    </div>

                                    <div class="mt-3">
                                                
                                
                                        
                                            <ul class="list-inline mb-0">
                                
                                <li class="list-inline-item">  
                                <h5>85 <i class="uil uil-eye font-size-18 text-primary"></i> </h5> 
                                
                         </li>

                                 <li class="list-inline-item">  <h5>85 <i class="uil uil-heart font-size-18 text-danger"></i> </h5> </li>
                                <li>
                                </li>
                               </ul>
                                            
                                    </div>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-4">
                       
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">@lang('translation.details') :</a>
                                </li>
                            
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                       
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                                                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                                                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.</p>

                                                <div>
                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                        <li><i class="mdi mdi-circle-medium mr-1 align-middle"></i>xxx xxxxxxxx</li>
                                                        <li><i class="mdi mdi-circle-medium mr-1 align-middle"></i> xxxxxxxxxxxxxxxxxx</li>
                                                        <li><i class="mdi mdi-circle-medium mr-1 align-middle"></i> xxxxxxxxxxxxxxxxxxxxxxxx</li>
                                                    </ul>
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
    </div>
@endsection