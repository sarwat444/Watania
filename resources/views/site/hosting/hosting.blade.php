@extends('layouts.frontLayout.front_design')
@section('content')
    <!-- Header -->


    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <div class="breadcrumbs">
                            <h2> عروض  الاستضافه  :  </h2>
                            <a  class="tag_link" href="index.html"> الرئيسيه   </a><i class="fa fa-angle-double-left"></i><span>عروض   الاستضافات   </span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
  <!--Start  Pricing Section -->

  <section class="pricing-plans text-center">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<h1 class="section-title">
						أسعار الاستضافات 
					</h1>
					<p class="lead">
				 لدينا  العديد من الباقات المختلفه  اختر  الباقه المناسبه لديك 
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animated slideInRight">
					<div class="card pricing-box rounded"
				 >

            <div class="card-block">
							<h4 class="card-title">
                استضافة بيزنس
 
							</h4>
							<h6 class="card-text">
								<sup class="currency">
									$
								</sup>
								<span class="amount">
									600 
								</span>
								<span class="month">
									/ سنويا 
								</span>
							</h6>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center d-inline-block">
                مساحة : 10 جيجا

							</li>
							<li class="list-group-item text-center d-inline-block">
                بريد الكتروني رسمي : 10

							</li>
							<li class="list-group-item text-center d-inline-block">
                ترافيك : غير محدود

							</li>
							<li class="list-group-item text-center d-inline-block">
                قواعد بيانات: غير محدود

							</li>
              <li class="list-group-item text-center d-inline-block">
                لوحة تحكم ® CPanel
							</li>
              <li class="list-group-item text-center d-inline-block">
                دعم فني: متاح

							</li>

						</ul>
						<div class="card-block">
 
							<a href="#" class="butn butn__new" title="أشترك الان ">
							<span>	أشترك الان  </span>
							</a>
						</div>
					
          
          </div>
				</div>
				<div class="col-md-4">
					<div class="card pricing-box pricing-premium"

          >


						<div class="card-block">
							<h4 class="card-title">
								أستضافه  شركات 
							</h4>
							<h6 class="card-text">
								<sup class="currency">
									$
								</sup>
								<span class="amount">
									700
								</span>
								<span class="month">
									/ سنويا 
								</span>
							</h6>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center d-inline-block">
                مساحة : 20 جيجا

							</li>
							<li class="list-group-item text-center d-inline-block">
                ترافيك : غير محدود

							</li>
							<li class="list-group-item text-center d-inline-block">
                قواعد بيانات: غير محدود
							</li>
							<li class="list-group-item text-center d-inline-block">
                لوحة تحكم ® CPanel
							</li>
              <li class="list-group-item text-center d-inline-block">
                دعم فني: متاح
							</li>
						</ul>
						<div class="card-block">
              <a href="#" class="butn butn__new" title="أشترك الان ">
                <span>	أشترك الان  </span></a>
						</div>
					</div>


				</div>
				<div class="col-md-4 animated slideInLeft">
					<div class="card pricing-box rounded"

          
          >
            <div class="card-block">
							<h4 class="card-title">
								أستضافه مفتوحه 
							</h4>
							<h6 class="card-text">
								<sup class="currency">
									$
								</sup>
								<span class="amount">
									800
								</span>
								<span class="month">
									/ سنويا 
								</span>
							</h6>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center d-inline-block">
								مساحة : غير محدودة

							</li>
							<li class="list-group-item text-center d-inline-block">
								بريد الكتروني رسمي : غير محدود

							</li>
							<li class="list-group-item text-center d-inline-block">
								ترافيك : غير محدود

							</li>
							<li class="list-group-item text-center d-inline-block">
								قواعد بيانات: غير محدود

							</li>
              <li class="list-group-item text-center d-inline-block">
                لوحة تحكم ® CPanel

							</li>

              <li class="list-group-item text-center d-inline-block">
                دعم فني: متاح

							</li>

						</ul>
						<div class="card-block">
              <a href="#" class="butn butn__new" title="أشترك الان ">
                <span>	أشترك الان  </span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!--end Pricing Section -->


@endsection
@section('script')
<script type="text/javascript">

  $(function(){
      
   SyntaxHighlighter.all();
      
     $(window).load(function(){
       $('.web_disigner .flexslider').flexslider({
         animation: "slide",
         
         start: function(slider){
           $('body').removeClass('loading');
         }
       });
     });
        
 });
                
</script>
@endsection 

