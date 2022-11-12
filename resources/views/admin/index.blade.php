@extends('layouts.adminLayout.master')
@section('title') @lang('translation.main') @endsection
@section('content')


@component('common-components.breadcrumb')
    @slot('title') @lang('translation.Dashboard') @endslot
    @slot('pagetitle') @lang('translation.main') @endslot

@endcomponent


@if(Auth::user()->role_id  ==1 ||  Auth::user()->role_id  ==5  )
<div class="row">

    <div class="col-md-5 col-xl-6">
        <div class="card">
            <div class="card-body">


                <div class="float-right mt-2">
                    <div id="total-revenue-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$portofolios_count}}</span></h4>
                    <p class="text-muted mb-0">@lang('translation.projects')</p>


                </div>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-5 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="float-right mt-2">
                    <div id="orders-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">.....</span></h4>
                       <p class="text-muted mb-0">......</p>

                </div>

            </div>
        </div>
    </div> <!-- end col-->


</div> <!-- end row-->

<div class="row">
    <!--Start  Radial Chart -->
    <div class="col-xl-8">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">@lang('translation.statisticas')</h4>
                <div id="radial_chart" class="apex-charts" dir="ltr"></div>
            </div>
            <div class="cart-footer">
                     <div class="row">
                        <div class="col-md-3"><p class=" text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary mr-2"></i> تسليم ابتدائي  - <span class="project_count">{{ $taslemebtedaky }}</span> </p></div>
                        <div class="col-md-3"><p class=" text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-success mr-2"></i> تسليم نهائي    - <span class="project_count"> {{ $taslem_nhaky }} </span> </p></div>
                        <div class="col-md-3"><p class=" text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-info mr-2"></i> جاري  التنفيذ     - <span class="project_count"> {{ $gary_eltanfez }} </span> </p></div>
                        <div class="col-md-3"><p class=" text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-warning mr-2"></i> تحت الدراسه    - <span class="project_count"> {{ $takt_elderasa }}</span> </p></div>
                    </div>
            </div>
        </div><!--end card-->

    </div>

      <div class="col-xl-4">
       <div class="card bg-primary">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <p class="text-white font-size-18"> <b>@lang('translation.app_name') </b>   @lang('translation.maintance') <i class="mdi mdi-arrow-left"></i></p>
                        <div class="mt-4">
                                 <input type="checkbox" id="switch4" switch="success" checked/>
                                <label for="switch4" data-on-label="تفعيل "
                                        data-off-label="ألغاء "></label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4 mt-sm-0">
                            <img src="{{ URL::asset('assets/images/setup-analytics-amico.svg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->




</div>

</div> <!-- end row-->
@endif

@endsection
@section('script')

      <script src="{{ URL::asset('assets/js/pages/dashboard.init.js')}}"></script>
     <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/apexcharts.init.js')}}"></script>
    <script>


var options = {
  chart: {
    height: 350,
    type: 'radialBar' ,
    events: {
      click: function(event, chartContext, config) {
        var el = event.target;
        var elementId = el.getAttribute("id");
                    if(elementId =='SvgjsPath1026')
                    {
                        elementId = 1 ;
                    }
                    else if(elementId == 'SvgjsPath1028'){
                        elementId = 2 ;
                    }
                    else if(elementId == 'SvgjsPath1030'){
                        elementId = 3 ;
                    }
                    else if(elementId == 'SvgjsPath1032'){
                        elementId = 4 ;
                    }
                    else if(elementId == 'SvgjsPath1034'){
                        elementId = 5 ;
                    }
                    if(elementId !=null && parseInt(elementId) ){

                        window.location.href = '/admin/view-projects_status/'+ elementId;
                    }

      }
    }
  },
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px'
        },
        value: {
          fontSize: '16px'
        },
        total: {
          show: true,
          label: 'الاجمالى ',
          formatter: function formatter(w) {
            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
            return '{{$total}}';
          }
        }
      }
    }
  },
  series: @json($projectStatusCounts),
  labels: @json($projectStatusNames),
  colors: @json($projectStatusColors)
};
var chart = new ApexCharts(document.querySelector("#radial_chart"), options);
chart.render(); //  Radial chart
</script>

@endsection
