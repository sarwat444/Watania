@extends('layouts.adminLayout.master')
@section('title')
تفاصيل المكاتبه
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') @lang('translation.Dashboard') @endslot
    @slot('title') تفاصيل المكاتبه  @endslot
@endcomponent

    <!-- end row -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body faxdetails">
                    <a  href="{{url('admin/print-fax/'.$faxdetails->id)}}"  class="btn btn-primary waves-effect waves-light mb-3 btnprn"><i class="mdi mdi-plus mr-1"></i> طباعه  الفاكس </a>
                           <div class="row">
                              <div class="col-md-4">
                                <p><span>خاص بالجهه : </span> {{$faxdetails->khas_geha}}</p>
                              </div>
                              <div class="col-md-4">
                              <p><span> رقم القيد  : </span> {{$faxdetails->kaed}}</p>
                              </div>
                              <div class="col-md-4">
                              <p><span> جهه الاختصاص  : </span> {{$faxdetails->geha_ekhtesas}}</p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                <p><span>جهه الفاكس  : </span> {{$faxdetails->geha_fax}}</p>
                              </div>
                              <div class="col-md-4">
                              <p><span> وجهه الفاكس   : </span> {{($faxdetails->waght_fax) ? 'وارد' : 'صادر'  }}</p>
                              </div>
                              <div class="col-md-4">
                              <p><span>  رقم صادر الجهه  : </span> {{$faxdetails->sader_elgeha_number}}</p>
                              </div>
                           </div>
                           <div class="row">

                            <form method="post" action ="{{url('admin/fax/redirect_fax')}}" id="redirectfax">
                               {{csrf_field()}}
                               <div class="redirectsuccess"></div>
                              <label>توجيه الفاكس لجهه معينه   </label>
                              <input type="hidden" name="fax_id" value="{{ $faxdetails->id }}" />
                                 <div class="form-group">
                              <select name="sector_id" class="form-control">
                                 @foreach($geha_ekhtesas as $geha)
                                   <option value="{{$geha->id}}">{{$geha->sector_name}}</option>
                                   @endforeach
                              </select>
                              </div>
                              <input  type="submit"  class="btn btn-primary" name="redirect"  value="توجيه الفاكس "/>
                            </form>
                            </div>
                           </div>

                            <div class="product-detail">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5> الملفات المرفقه للفاكس </h5>
                                            </div>
                                            <div class="card-body">
                                                @foreach($faxdetails->files  as $file)
                                                <a class="fileicon" data-toggle="tooltip" data-placement="top" title= "{{$file->path}}" href="{{url('/uploads/fax/'.$file->path)}}"><i class="bx bx-file"></i></a>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>

                            </div>


                    <!-- end row -->

                    <div class="mt-4">
                        <div class="product-desc">
                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab">محتوى الفاكس :</a>
                                </li>
                            </ul>
                            <div class="tab-content border border-top-0 p-4">
                                <div class="tab-pane  fade show active" id="desc" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-10">
                                            <div class="text-muted p-2">
                                                <p><?php echo  nl2br($faxdetails->description) ?> </p>
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
@section('script')

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


        $(document).ready(function (){
            $('#redirectfax').submit(function(e){
                e.preventDefault() ;
                jQuery.ajax({
                    type: "post",
                    url: "{{url('admin/fax/redirect_fax')}}",
                    data: jQuery('#redirectfax').serialize(),
                    success: function (data) {
                        console.log('test') ;
                        $('.redirectsuccess').html(data);
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            })
        })



    </script>
@endsection
