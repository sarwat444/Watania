@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.Product_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.project_request_details')@endslot
@endcomponent

    <!-- end row -->


       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                 
                    
                             <div class="col-3">
                                  <div class="project-details"> 
                                        <div class="tab-content position-relative" id="v-pills-tabContent">

                                        
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                <div class="product-img">
                                  <img src="{{ URL::asset('uploads/projects/'. $project->logo)}}" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                </div>
                                            </div>
                                           
                                          
                                            
                                        </div>
                                     
                                        
                                    </div>
                            
                            </div>
                        
                    
                                <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4 project-details">
                             
                                <h4 class="mb-3 blog-title">  {{$project->title}} </h4>

                                <h5 class="mt-4 pt-2 blog_date">{{$project->start_date}} - {{$project->end_date}}  </h5>
                             

                                     <h5 class="mt-4 pt-2">{{$project->start_date}}  </h5>
                                      <h5 class="mt-4 pt-2 project-status"> {{$projectStatuse->name}}</h5>
                                     
                                                             
                                    </div>
                                
                                 
                                
                            </div>
                        
                        
                        
                        
                        </div>
                
                    
                    </div>
                    <!-- end row -->

                    <div class="card-body">
                       
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
   <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">@lang('translation.project_details') :</a></li>
            <li>
    <a class="nav-link " id="owner-tab" data-toggle="tab" href="#owner" role="tab">@lang('translation.project_owner') :</a>
                                </li>
                                
                                     <li>
    <a class="nav-link " id="owner-tab" data-toggle="tab" href="#same" role="tab">@lang('translation.same_works') :</a>
                                </li>
                                
                                
                            
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                       
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <p> <?php echo   nl2br($project->description) ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <div class="tab-pane  fade show" id="owner" role="tabpanel">
                                    <div class="row">
                                       
                                        <div class="col-sm-9 col-md-10">
                                                <div class="text-muted p-2">
                                                    <ul>
                                                       <li>العميل  : {{$project->name}} </li>
                                                       <li>البريد الالكترونى :  {{$project->email}} </li>
                                                    </ul>
                                                
                                            
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                    <div class="tab-pane  fade show" id="same" role="tabpanel">
                                    <div class="row">
                                       
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <ul class="same-works">
                                                @foreach($projectlinks  as $link)
                                                <li><a href="{{$link->url}}">{{$link->id}}</a></li>
                                                @endforeach
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



     <!--Start  Links  --> 
   

@endsection