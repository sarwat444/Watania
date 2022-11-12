@extends('layouts.frontLayout.front_design')
@section('content')

    <!-- end of navigation -->
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <div class="breadcrumbs">
                            <h2> أعمالنا  :  </h2>
                            <a  class="tag_link" href="index.html"> الرئيسيه   </a><i class="fa fa-angle-double-left"></i><span>  أعمالنا  </span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    

  <!--Start  OurWorks  --> 
  <div class="basic-1 base2 " id="about1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2> مرحبا بكم فى سيرفر سوف للتسويق  والخدمات المتكامله   </h2>
                    <p>
                        هل تبحث عن شركة مبدعة تكرس كل جهودها من أجل نجاحك ونجاح  تطبيقك او موقعك الالكترونى  إذا كانت الإجابة بنعم، لا تقلق نحن هنا لخدمتك شركة سيرفر سوفت  شريك  رائع للوصول للنجاح الذي تسعى له .  
                    </p>

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img
                    data-aos="fade-right"
                    data-aos-offset="100"
                    data-aos-delay="50"
                    data-aos-duration="800"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="true"
                    class="img-fluid" src="{{url('assets/images/frontend_images/cartoon/3.png')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->

  
    <section class="works">
    <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="col">
                <div class="btn-group vossen-portfolio-filters" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="shuffle-filter" value="all" checked="checked" />قائمه الاعمال . </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="shuffle-filter" value="webdesign" />تصميم  المواقع  . </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="shuffle-filter" value="apps" />تطبيقات  الهاتف .  </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="shuffle-filter" value="architecture" />التسويق الالكترونى . </label>
                </div>
            </div>
        </div>
        <div class="my-shuffle">
   <!--Start Natiure -->
            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;webdesign&quot;]">

                <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>Smart Business </h4>
                        <p>
                            البرنامج المحاسبى الاكثر  مبيعا الذى  تم بيعه فى  السوق  المصرى وتم بيع اكثر  من الف  نسخه وتم أعتماده ومراجعته محاسبيا من  قبل  من  اكثر  مكتب  محاسبه  </p>
                            <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                        </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff80889a7c38_2.png"
                            obj.alt="obj.alt" />
                    </div>
                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;webdesign&quot;]">

                <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>San Parts </h4>
                        <p>هو  برنامج خاص  بمراكز  الصيانه  والتوكيلات  والمراكز  التى  تعامل  مع  ارقام القطع والسريال حيث  يتيح للمستخد امكانيه  تسجيل بيانات الجهاز  التالف  </p>
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff04d637e760_1.jpg"
                            obj.alt="obj.alt" />
                        
                        </div>
                </div>

            </div>
            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;webdesign&quot;]">

                <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>Markado </h4>
                        <p>هو  برنامج  خاص  بالهايبر  ماركت  والانشطه المتعلقه<br> بالمنتجات الغذائيه واصدار  فواتير  المبيعات  والمشتريات  ومتابعه المخزون  وتااريخ الانتاج وصلاحيه المنتجات  وعمل  عروض  ومجلات شهريه  </p>
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5fef95d4077d1_1.jpg"
                            obj.alt="obj.alt" />
             
                        </div>
                </div>

            </div>
            
            <!--End   Natiure --> 

            
            <!-- Portfolio Item -->
            <div class="col-md-4 col-sm-6 image-item" data-groups="[&quot;architecture&quot;]">

                  <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>Label Mockup</h4>
                        <p>Print Category</p>
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff46cc75c9ea_1.jpg"
                            obj.alt="obj.alt" />
      
                        </div>
                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;nature&quot;,&quot;architecture&quot;]">

                <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>Label Mockup</h4>
                        <p>Print Category</p>
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff46cc75c9ea_1.jpg"
                            obj.alt="obj.alt" />
                      
                        </div>
                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;nature&quot;]">

             <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>Label Mockup</h4>
                        <p>Print Category</p>
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff46cc75c9ea_1.jpg"
                            obj.alt="obj.alt" />
                    </div>
                </div>

            </div>

            <!-- Portfolio Item -->
    

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;nature&quot;]">

              <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>San Parts </h4>
                        <p>هو  برنامج خاص  بمراكز  الصيانه  والتوكيلات  والمراكز  التى  تعامل  مع  ارقام القطع والسريال حيث  يتيح للمستخد امكانيه  تسجيل بيانات الجهاز  التالف  </p>
                 
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff04d637e760_1.jpg"
                            obj.alt="obj.alt" />
                       
                    </div>
           
                </div>

            </div>

            <!-- Portfolio Item -->
            <div class="col-lg-4 col-md-4 col-sm-6 image-item" data-groups="[&quot;apps&quot;]">

               <div class="portfolio-item">
                    <div class="item-caption">
                        <h4>San Parts </h4>
                        <p>هو  برنامج خاص  بمراكز  الصيانه  والتوكيلات  والمراكز  التى  تعامل  مع  ارقام القطع والسريال حيث  يتيح للمستخد امكانيه  تسجيل بيانات الجهاز  التالف  </p>
                        <a href="#" class='butn butn__new'><span> تفاصيل  المشروع  </span></a>
                    </div>
                    <div class="item-image">
                        <img alt="#" src="https://600apps.com/public/uploads/portofolios/5ff04d637e760_1.jpg"
                            obj.alt="obj.alt" />
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 my-sizer-element"></div>
        </div>
    </div>
        </div>
    </section>

   <!--Start  Testmonials --> 


   <section class="testimonial_area">
       <div class="container">
                   <h2> اراء العملاء </h2>
      <h4> ماذا  يقول  عملائنا  عنا  ؟ </h4>

        <div class="carousel slide testimonial_slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">  
                   <div class="testimonial_content"> 
                        <p>كنت متوقع  ان فكره مشروعى  مجرد حلم الى ان تحول  الحلم حقيقه بعد تعاملى</br> معا شركه سيرفر سوفت اصبح الحلم حقيقه <br> </p>

                        <div class="media">
                            <img src="http://themazine.com/html/kabbo/images/testimonial-1.jpg" alt="">
                            <div class="media-body">
                            <a href="#">محمود محمد أحمد </a>
                                <h6>مدير شركه الاستثمار </h6>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="carousel-item"> 
                   <div class="testimonial_content"> 
                   <p>كنت متوقع  ان فكره مشروعى  مجرد حلم الى ان تحول  الحلم حقيقه بعد تعاملى</br> معا شركه سيرفر سوفت اصبح الحلم حقيقه <br> </p>

                        <div class="media">
                            <img src="http://themazine.com/html/kabbo/images/testimonial-3.jpg" alt="">
                            <div class="media-body">
                            <a href="#">محمود محمد أحمد </a>
                                <h6>مدير شركه الاستثمار </h6>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="carousel-item"> 
                   <div class="testimonial_content"> 
                   <p>كنت متوقع  ان فكره مشروعى  مجرد حلم الى ان تحول  الحلم حقيقه بعد تعاملى</br> معا شركه سيرفر سوفت اصبح الحلم حقيقه <br> </p>

                        <div class="media">
                            <img src="http://themazine.com/html/kabbo/images/testimonial-4.jpg" alt="">
                            <div class="media-body">
                            <a href="#">محمود محمد أحمد </a>
                                <h6>مدير شركه الاستثمار </h6>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="carousel-item"> 
                   <div class="testimonial_content"> 
                   <p>كنت متوقع  ان فكره مشروعى  مجرد حلم الى ان تحول  الحلم حقيقه بعد تعاملى</br> معا شركه سيرفر سوفت اصبح الحلم حقيقه <br> </p>

                        <div class="media">
                            <img src="http://themazine.com/html/kabbo/images/testimonial-5.jpg" alt="">
                            <div class="media-body">
                                <a href="#">محمود محمد أحمد </a>
                                <h6>مدير شركه الاستثمار </h6>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
            
            <div class="nav_control"> 
                <a class="control-prev" href=".testimonial_slide" role="button" data-slide="prev">
                    <i class="fas fa"><h3><b><</b></h3></i> 
                </a>
                <a class="control-next" href=".testimonial_slide" role="button" data-slide="next"> 
                    <i class="fas fa"><h3><b>></b></h3></i>
                </a>
            </div> 
        </div>  
        <ul class="indicators">
            <li data-target=".testimonial_slide" data-slide-to="0" class="testimonial_1"><img src="http://themazine.com/html/kabbo/images/testimonial-2.jpg" alt=""></li>
            <li data-target=".testimonial_slide" data-slide-to="1" class="testimonial_2"><img src="http://themazine.com/html/kabbo/images/testimonial-3.jpg" alt=""></li>
            <li data-target=".testimonial_slide" data-slide-to="2" class="testimonial_3"><img src="http://themazine.com/html/kabbo/images/testimonial-4.jpg" alt=""></li>
            <li data-target=".testimonial_slide" data-slide-to="3" class="testimonial_4"><img src="http://themazine.com/html/kabbo/images/testimonial-5.jpg" alt=""></li>
            <li class="round_shap"></li>
        </ul>
        </div>
    </section>
   <!--End Testmonials --> 

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.1.1/shuffle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script> <!-- Swiper for image and text sliders -->
    
    <script>
        var Shuffle = window.Shuffle;

        var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
          itemSelector: '.image-item',
          sizer: '.my-sizer-element',
          buffer: 1,
        });

        window.jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
          var input = evt.currentTarget;
          if (input.checked) {
            myShuffle.filter(input.value);
          }
        });
</script>
@endsection


