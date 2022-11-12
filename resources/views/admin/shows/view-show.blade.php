@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.Invoice_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') البيانات الشخصيه @endslot
    @slot('title') @lang('translation.show_details') @endslot
@endcomponent
 <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                        
                            <h4 class="applicant-name mb-3">عنوان  العرض   .......... </h4>

                        
                                 <ul class="mb-0 show-list">
             
      
        <li>     منتبقى  {{$number_of_remaining_days}} أيام حتى  انتهاء  العرض     </li> 
       
                   
                                </ul>

                             
        
                            </div>

                    <!-- end row -->
</div>
      
                </div>

                 <div class="mt-4">
                       
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">@lang('translation.show_details') :</a>
                                </li>
                            
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                       
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <p><?php  echo nl2br ($offerDetails->description)  ?></p>
                                                
                                                <div>
                                                   
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