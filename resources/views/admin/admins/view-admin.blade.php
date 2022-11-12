@extends('layouts.master')
@section('title')
@lang('translation.Invoice_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle')@lang('translation.Dashboard') @endslot
    @slot('title') @lang('translation.users_details') @endslot
@endcomponent
 <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content position-relative applicant" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel">
                                                <div class="product-img applicant-image">
                                                    <img src="{{ URL::asset('assets/images/user_prev.png')}}" alt="" class="img-fluid mx-auto d-block" data-zoom="assets/images/product/img-1.png">
                                                </div>
                                                   <ul class="line-form">
                               
                                   
                                </ul>
                                            </div>
                                           
                                        
                                          
                                        </div>
                                    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                        
                            <h4 class="applicant-name mb-3">Mohamed Tharwat  Mohamed </h4>

             
                                 <ul class="mb-0 apllicant-list">
       <li><i class="mdi mdi-email"></i> :  <span class="font-weight-medium"> msarwat@gaa.com</span></li>
        <li><i class="mdi mdi-phone"></i> :  <span class="font-weight-medium"> 0105262015778</span></li>   
        <li> <i class="mdi mdi-account"></i>  : <span class="font-weight-medium">مطور برمجيات  </span></li> 
        
        <li>  @lang('translation.created_at')  : <span class="font-weight-medium">2020-10-11</span>

        </li> 
       
                   
                                </ul>

                             
              <div class="plus_files">


                        <div class="table-responsive">
                       
                        </div>
                      </div>
                            </div>

                    <!-- end row -->
</div>

                   
                </div>
            </div>
        </div>
    </div>
@endsection