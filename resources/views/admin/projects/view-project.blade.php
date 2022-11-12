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
    @slot('title') @lang('translation.project_description')@endslot
@endcomponent

    <!-- end row -->

            <div class="card">
                <div class="card-header">
                    <a  href="{{url('admin/print-project/'.$projectDetails->id)}}"  class="btn btn-primary waves-effect waves-light mb-3 btnprn"><i class="mdi mdi-plus mr-1"></i> طباعه  تفاصبل المشروع </a>

                    <div class="row">
                        @if(Auth::user()->role_id  == 1 )
                        @if(empty($eltezam) )
                            <div class="col-md-2">
                               <alert class="alert-danger">   ليس لديه اى التزام </alert>
                            </div>
                        @else
                            <div class="col-md-2">
                               <alert class="alert-success">  له التزام </alert>
                            </div>
                        @endif
                      @endif
                        @if(empty($akd) )
                        <div class="col-md-2">
                           <alert class="alert-danger">   ليس لديه اى عقد  </alert>
                        </div>
                    @else
                        <div class="col-md-2">
                           <alert class="alert-success">  له عقد </alert>
                        </div>
                    @endif
                    @if(empty( $amresand) )
                    <div class="col-md-2">
                       <alert class="alert-danger">   ليس لديه اى امر اسناد  </alert>
                    </div>
                    @else
                    <div class="col-md-2">
                       <alert class="alert-success"> المشروع له امر اسناد </alert>
                    </div>
                    @endif

                    @if(empty( $korasa ) )
                    <div class="col-md-2">
                       <alert class="alert-danger">   ليس لديه  كراسه اشتراطات   </alert>
                    </div>
                    @else
                    <div class="col-md-2">
                       <alert class="alert-success">  له  كراسه اشتراطات  </alert>
                    </div>
                    @endif

                    @if(empty($mawkef ) )
                    <div class="col-md-2">
                       <alert class="alert-danger">   ليس لديه   موقف تنفيذى    </alert>
                    </div>
                    @else
                    <div class="col-md-2">
                       <alert class="alert-success"> له موقف تنفيذى   </alert>
                    </div>
                    @endif

                    @if(empty($mostaklas ) )
                    <div class="col-md-2">
                       <alert class="alert-danger">   ليس لديه    مستخلص     </alert>
                    </div>
                    @else
                    <div class="col-md-2">
                       <alert class="alert-success">هذا المشروع له مستخلص   </alert>
                    </div>
                    @endif


                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="mt-4 mt-xl-3 pl-xl-4">
                                <h4 class="mb-3 blog-title">{{$projectDetails->title}}</h4>
                                <h5 class="mt-4 pt-2">{{$projectDetails->start_date}} -- {{$projectDetails->end_date}}</h5>

                            </div>
                        </div>

                    </div>


                    <div class="project_content">

                            <div class="row">



                                    <div class="col-md-4">
                                       <p><span class="listspan">الاستشاري : </span>
                                        <ul class="ownerslist">
                                                @foreach($projectDetails->owners as $owner)
                                                <li>{{$owner->owner_name}} </li>
                                                @endforeach
                                        </ul>
                                        </p>
                                    </div>
                                <div class="col-md-4">
                                    <p><span class="listspan">الملاك : </span>
                                    <ul class="ownerslist">
                                        @foreach($projectDetails->consults as $consult)
                                            <li>{{$consult->consult_name}} </li>
                                        @endforeach
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p><span class="listspan">مسؤل الوطنيه بالموقع : </span>
                                        {{$projectDetails->wataniaresp}}
                                    </p>
                                </div>
                         @if(Auth::user()->role_id  != 2 )
                                <div class="col-md-4">
                                    <p><span class="listspan">متبقى القيمه الماليه للمشروع للمالك  :</span>
                                    {{$projectDetails->take_amount - $projectDetails->need_amount}} </p>

                                   </div>
                                   <div class="col-md-4">
                                    <p><span class="listspan">متبقى القيمه الماليه للمشروع للباطن   : </span>
                                       <p>{{$projectDetails->total_amount - $projectDetails->baten_amount }} </p>
                                   </div>
                            @endif

                                    <div class="col-md-4">
                                    <p><span class="listspan" > حاله المشروع : </span>
                                        @if($projectDetails->project_status == 0 )
                                         <p>تم التنفيذ </p>
                                        @elseif ($projectDetails->project_status == 1 )
                                            <p> تسليم ابتدائى</p>
                                        @elseif ($projectDetails->project_status ==  2 )
                                            <p> تسليم نهائى </p>
                                        @elseif ($projectDetails->project_status ==  3 )
                                            <p>جارى</p>
                                        @elseif ($projectDetails->project_status ==  4)
                                            <p>تحت الدراسه</p>
                                        @endif

                                    </div>

                                <div class="col-md-4">
                                    <p><span class="listspan" > نوع المشروع : </span>
                                    @if($projectDetails->type == 0 )
                                        <p>
                                            مدنى
                                        </p>

                                    @elseif ($projectDetails->type == 1 )
                                        <p>
                                        عسكري
                                        </p>
                                        @endif

                                </div>



                                    <div class="col-md-4">
                                    <p><span class="listspan" >@lang('translation.department') : </span> {{$projectDetails->sector}}</p>
                                    </div>

                            </div>
                    </div>
                    <!-- end row -->

                    <div class="mt-4">

                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">@lang('translation.project_description') :</a>
                                </li>

                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                              <p>{!!$projectDetails->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                               <div>


                                                </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.printPage.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-datatables.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnprn').printPage();
        });
    </script>

    <script>
        $('.sa-warning').click(function () {
            id   = $(this).attr('rel') ;
            var deleteFunction = $(this).attr('rel1');
            Swal.fire({
                title: "هل  انتا  متاكد من  الحذف ",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "بالتاكيد " ,
                cancelButtonText :"الغاء " ,
            }).then(function (result) {
                if (result.value) {
                    window.location.href="/admin/"+deleteFunction+"/"+id;
                }
            });
        }); //Parame
    </script>
@endsection
