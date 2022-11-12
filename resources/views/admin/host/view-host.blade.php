@extends('layouts.adminLayout.master')
@section('title')
@lang('translation.Invoice_Detail')
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') البيانات الشخصيه @endslot
    @slot('title') @lang('translation.hosting_details') @endslot
@endcomponent
 <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                    
                                 <ul class="mb-0 show-list">
             
        <li>  @lang('translation.baka_number')  : <span class="font-weight-medium">{{$hostDetails->id}}</span>

        </li> 
        
        <li>  @lang('translation.baka_name')  : <span class="font-weight-medium">{{$hostDetails->name}} </span>

        </li> 
       <li>  @lang('translation.baka_price')  : <span class="font-weight-medium">{{$hostDetails->price}} </span>

        </li> 
               <li>  @lang('translation.created_at')  : <span class="font-weight-medium">{{$hostDetails->created_at}}</span>

        </li> 
                   
                                </ul>

                            </div>
                            </div> 
        
                    <!-- end row -->
                    <div class="col-xl-10">
                  <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            
                            <th>@lang('translation.id')</th>
                            <th>@lang('translation.service_name')</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($hostDetails->services as $host)
                        <tr>
                           
                            <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$host->id}}</a> </td>


                            <td ontentEditable='true'>
                                {{$host->name}} 
                            </td>
                     
                      
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
</div>
      
                </div>

            
                   
            </div>
        </div>
    </div>
@endsection