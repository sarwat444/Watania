@extends('layouts.frontLayout.front_design')
@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise type ">  </h1>
                            <p class="p-large ">للبرمجيات  والحلول  الذكيه  </p>
                            <a href="#" class='butn butn__new'><span> أعـرف المزيد </span></a>
                          
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img 
                        
                            class="img-fluid"   src="{{asset('assets/images/frontend_images/cartoon/1.png')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    <!-- About  -->
    <div class="basic-1" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>نبذه عن  الشركه  </h2>
                        <p>شركه سيرفر  سوفت  هي  متوسطه الحجم  وهيا شركه مساهمه مصريه  تعمل  فى  مجال  البرمجه  والحلول  الذكيه  منذ  اكثر  من  10 سنوات          
                        </p>
                        <a href="#" class='butn butn__new'><span> أعرف  المزيد عن الشركه </span></a>
                        <a id="play-video" class="video-play-button" href="#"><span></span></a>
                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">&times;</a>
                            </div>
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

                        class="img-fluid" src="{{asset('assets/images/frontend_images/cartoon/19.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> 
    <!-- end About -->

    <!-- Services -->
    <div id="services" class="cards-1">
        <img class="top-image" src="{{asset('assets/images/frontend_images/top-section.png')}}" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>خدماتنا</h2>
                    <p class="p-heading p-large">فريق سيرفر سوفت   يمكنه تحقيق كل أفكارك على أرض الواقع.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="content">
                        <img class="card-image" src="{{asset('assets/images/frontend_images/website.png')}}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">المواقع الإلكترونية </h4>
                            <p>فريق عمل سيرفر سوفت  يقدم كل جهد   </p>
                            <div class="hover_content">
                            <ul>
                                <li> تقديم أنظمة إلكترونية تناسب مطلبات المؤسسة.</li>
                                <li>تطوير مهارات أفراد العمل لمواكبة التكنولوجيا.</li>
                                <li> تصميم حلول ذكية مناسبة لكل مقاسات الشاشات.</li>
                                <li> ربط مواقع التواصل الاجتماعي بالموقع وتقديم نوافذ عرض</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="content">
                        <img class="card-image" src="{{asset('assets/images/frontend_images/coding.png')}}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">تطبيقات الموبايل</h4>
                            <p>فريق عمل سيرفر سوفت  يسعى دومًا لصنع</p>
                            <div class="hover_content">
                            <ul>
                            <li>تطبيقات موبايل سهلة الاستخدام لكافة العملاء.</li>
                            <li> سرعة استجابة لكافة الأوامر والتفاعلات داخل التطبيق.</li>
                            <li>تحويل فوري للمعلومات من حساب العميل إلى قاعدة البيانات.</li>
                            <li>شكل عصري وأنيق للتطبيق يناسب العلامة التجارية للمشروع</li>
                        </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="content">
                        <img class="card-image" src="{{asset('assets/images/frontend_images/bullhorn.png')}}" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title"> التسويق الإلكتروني </h4>
                            <p>فريق عمل سيرفر سوفت  يعلن عنها بشكل صحيح </p>
                            <div class="hover_content">
                            <ul>
                                <li> استراتجيات التسويق الإلكتروني المناسبة</li>
                                <li>تحديد هوية العلامة التجارية الخاصة بك </li>
                                <li>تخصيص حملات دعائية عبر مختلف الوسائل.</li>
                                <li>تحقيق أهداف مؤسستك التجارية.</li>
                           </ul>
                        </div>
                        </div>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
         
        </div> <!-- end of container -->
                <img class="top-image" src="{{asset('assets/images/frontend_images/top-section1.png')}}" >
    </div> <!-- end of cards-1 -->
    <!-- end of services -->
      <!--Start  Choose--> 
       <section class="choose">
          <div  class="container">
             <div class="row">
                 <div  class="col-md-6">
                     <div class="section-description">
                       <h1>  ليه تختار  سيرفر سوفت  ?</h1>
                        <p class="title">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص </p>
                   
                        <div class="box">
                            <div class="col-md-12">
                                 <div class="row">
                                     <div class="col-md-2">
                                         <i class="fa fa-check-circle"></i>
                                     </div>
                                      <div class="col-md-10">
                                        <p>الشكل الخارجي للنص  هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة</p>   
                                      </div>
                                  </div>
                            </div>
                        </div>

                               <div class="box">
                            <div class="col-md-12">
                                 <div class="row">
                                     <div class="col-md-2">
                                         <i class="fa fa-check-circle"></i>
                                     </div>
                                      <div class="col-md-10">
                                        <p>الشكل الخارجي للنص  هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة</p>   
                                      </div>
                                  </div>
                            </div>
                        </div>
                         
                             <div class="box">
                            <div class="col-md-12">
                                 <div class="row">
                                     <div class="col-md-2">
                                         <i class="fa fa-check-circle"></i>
                                     </div>
                                      <div class="col-md-10">
                                        <p>الشكل الخارجي للنص  هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء  </p>   
                                      </div>
                                  </div>
                            </div>
                        </div>
                         
                   
                     </div>
                 </div>
                    <div class="col-md-6">
                   <div class="section-image">
                        <img 
                        
                        
                        data-aos="fade-down"
                        data-aos-offset="50"
                        data-aos-delay="100"
                        data-aos-duration="800"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                        
                        class="img-fluid" src="{{asset('assets/images/frontend_images/cartoon/4.png')}}" alt="alternative">
                   </div>
                </div>
              </div>
           </div>
       </section>
       <!--End Choose  --> 
    

    <!--End  Contact  Info  -->
     <section class="our-project">
           <img class="top-image" src="{{asset('assets/images/frontend_images/top-section.png')}}" >
         <div class="container-fluid">
            <div class="title">
                 <h1>أعمالنا السابقة</h1>
                 <p>نحن قادرون على تحويل الأفكار إلى واقع.</p>
            </div>
        </div>
        <div id="main" role="main">
          <section class="slider">
            <div class="flexslider">
              <ul class="slides">
                      <li>
                          <!--Start  Project  1 -->
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="content" id="tab1-content">
                                        <div class="box-content">
                                            <img class="logo" src="img/trex logo.png" alt="">
                                            <h2>كوكتيل خصومات</h2>
                                            <p> تركس للخصومات الفورية، وسواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..</p>
                                           <div class="box-btn">
                                               
                                            <a href="#" class='butn butn__new'><span>أعـرف المزيد </span></a>
                                                    <div class="box-social">
                                                        <a href="#"> <img src="{{asset('assets/images/frontend_images/icones/appstore.png')}}" alt=""> </a>
                                                        
                                                        <a href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/facebook.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/instagram.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/app-store.png')}}" alt=""> </a>
                                        
                                                    </div>
                                            </div>
                                          
                                            <div class="clearfix"></div>
                                            <div class="date">
                                                <h3>ابريل</h3>
                                                <span>2019</span>
                                            </div>
                                        </div>
                                        </div>     
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img" id="tab1-contente">
                                            <img 
                                            data-aos="fade-up-right"
                                            data-aos-offset="100"
                                            data-aos-delay="50"
                                            data-aos-duration="1000"
                                            data-aos-easing="ease-in-out"
                                            data-aos-mirror="true"
                                            data-aos-once="true"
                                            src="{{asset('assets/images/frontend_images/cv_bg_ar.png')}} " alt="">
                                        </div>
                                    </div>
                             </div>
                        </div>
                          <!--End  Project  1 -->
                      </li>
                      <li>
                                     <!--Start  Project  1 -->
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="content" id="tab1-content">
                                        <div class="box-content">
                                            <img class="logo" src="{{asset('assets/images/frontend_images/img/trex logo.png')}}" alt="">
                                            <h2>وصلنى  </h2>
                                            <p> تركس للخصومات الفورية، وسواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..</p>
                                            <div class="box-btn">
                                                <a href="#" class='butn butn__new'><span>أعـرف المزيد </span></a>
                                                    <div class="box-social">
                                                        <a href="#"> <img src="{{asset('assets/images/frontend_images/icones/appstore.png')}}" alt=""> </a>
                                                        
                                                        <a href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/facebook.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/instagram.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/app-store.png')}}" alt=""> </a>
                                        
                                                    </div>
                                            </div>
                                          
                                            <div class="clearfix"></div>
                                            <div class="date">
                                                <h3>ابريل</h3>
                                                <span>2019</span>
                                            </div>
                                        </div>
                                        </div>     
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img" id="tab1-contente">
                                            <img 
                                            data-aos="fade-up-right"
                                            data-aos-offset="100"
                                            data-aos-delay="50"
                                            data-aos-duration="1000"
                                            data-aos-easing="ease-in-out"
                                            data-aos-mirror="true"
                                            data-aos-once="true"
                                            
                                            src="{{asset('assets/images/frontend_images/other_projects_ar.png')}} " alt="">
                                        </div>
                                
                                
                                       
                                    </div>
                             </div>
                        </div>
                          <!--End  Project  1 -->
                      </li>
                      <li>
                                     <!--Start  Project  1 -->
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="content" id="tab1-content">
                                        <div class="box-content">
                                            <img class="logo" src="img/trex logo.png" alt="">
                                            <h2>وظفنى </h2>
                                            <p> تركس للخصومات الفورية، وسواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..</p>
                                            <div class="box-btn">
                                                <a href="#" class='butn butn__new'><span>أعـرف المزيد </span></a>
                                                     <div class="box-social">
                                                        <a href="#"> <img src="{{asset('assets/images/frontend_images/icones/appstore.png')}}" alt=""> </a>
                                                        
                                                        <a href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/facebook.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/instagram.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img src="{{asset('assets/images/frontend_images/icones/app-store.png')}}" alt=""> </a>
                                        
                                                    </div>
                                            </div>
                                          
                                            <div class="clearfix"></div>
                                            <div class="date">
                                                <h3>ابريل</h3>
                                                <span>2019</span>
                                            </div>
                                        </div>
                                        </div>     
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img" id="tab1-contente">
                                            <img
                                            
                                            data-aos="fade-up-right"
                                            data-aos-offset="100"
                                            data-aos-delay="50"
                                            data-aos-duration="1000"
                                            data-aos-easing="ease-in-out"
                                            data-aos-mirror="true"
                                            data-aos-once="true"
                                            
                                            src="{{asset('assets/images/frontend_images/cv_bg_ar.png')}} " alt="">
                                        </div>

                                    </div>
                             </div>
                        </div>
                          <!--End  Project  1 -->
                      </li>
                      <li>
                                 <!--Start  Project  1 -->
                        <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="content" id="tab1-content">
                                            <div class="box-content">
                                                <img class="logo logo-winch" src="img/winch logo.png" alt="">
                                                <h2>خلي النقل علينا</h2>
                                                <p> تركس للخصومات الفورية، وسواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..</p>
                                                <div class="box-btn">
                                                    <a href="#" class='butn butn__new'><span>أعـرف المزيد </span></a>
                                                </div>
                                                
                                                  <div class="box-social">
                                                        <a href="#"> <img src="{{asset('assets/images/frontend_images/icones/appstore.png')}}" alt=""> </a>
                                                        
                                                        <a href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/facebook.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/instagram.png')}}" alt=""> </a>
                                                        
                                                        <a  href="#"> <img
                                                                src="{{asset('assets/images/frontend_images/icones/app-store.png')}}" alt=""> </a>
                                        
                                                    </div>
                                                
                                                <div class="clearfix"></div>
                                                
                                                <div class="date">
                                                    <h3>ابريل</h3>
                                                    <span>2019</span>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img" id="tab1-contente">
                                            <img 
                                            data-aos="fade-up-right"
                                            data-aos-offset="100"
                                            data-aos-delay="50"
                                            data-aos-duration="1000"
                                            data-aos-easing="ease-in-out"
                                            data-aos-mirror="true"
                                            data-aos-once="true"
                                            
                                            src="{{asset('assets/images/frontend_images/other_projects_ar.png')}} " alt="">

                                        </div>

                                    </div>
                             </div>
                        </div>
                          <!--End  Project  1 -->
                      </li>
              </ul>
            </div>
    </section>
         </div>
         <img class="top-image" src="{{asset('assets/images/frontend_images/top-section1.png')}}" >         
    </section>
    <!--Start Join Us -->
<div class="container">
    <div class="join text-center" >
        <div class="row">
            <div class="col-md-12">
                <h1 >هل تود الانضمام إلى فريق عمل سيرفر سوفت  ؟   </h1>
                <p>انضم الان الي فريق سيرفر سوفت  و كن جزء من فريق العمل في مجال تصميم مواقع الويب والتطبيقات والعلامات التجارية وحلول التسويق</p>
                <a href="#" class='butn butn__new' data-toggle="modal" data-target="#exampleModalLong"><span> أنضم الينا  </span></a>
            </div>
        </div>
     </div>
</div>
    <!--End Join Us -->
    
    <!--Start Model -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" style="text-align:center"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">اغلاق  </span>
                    </button>
                  </div>
                  <div class="modal-body">
                  @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif   
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
                <form id="applayform" method="post" enctype="multipart/form-data" action="{{url('apply')}}">
                    @csrf
                      <h1 class="text-center">انضم  الى فريقنا  </h1>
                      <p class="text-center">فريق  محترف  يمكنه  أنشاء  شبكه<br> فريق  محترف  يمكنه  أنشاء  شبكه الأنترنت  خصيصا لك وتخصيصه الى  الصميم </p>
                      <div  class="container">
                      <div class="row">
                       <div class="col-md-6">
                         <div class="row">
                               <div class="col-md-3">
                                   <div class="user-image">
                                      <img src="{{asset('assets/images/frontend_images/man.png')}}" alt="user" >
                                    </div>
                             </div> 
                            <div class="col-md-6">
                                <div class="fileUpload blue-btn btn width100">
                                <span>الصوره الشخصيه   <img src="{{asset('assets/images/frontend_images/icon.png')}}"> </span>
                                <input type="file" name="image" class="uploadlogo" />
                                </div>

                             </div> 
                           
                          </div>
                          
                           
                           <div class="user-form">
                              <div class="row">
                             
                                 <div class="col-md-12"> 
                                    <input type="text" class="form-control" name="name" placeholder="الأسم  " > 
                                  </div>
                                </div>
                         
                              <div class="row">
                                 <div class="col-md-6"> 
                                    <input type="text" class="form-control" name="phone" placeholder="رقم الهاتف   " > 
                                  </div>
                                <div class="col-md-6"> 
                                    <input type="email" class="form-control" name="email"  placeholder="البريد الالكترونى   " > 
                                  </div>
                               </div>
                           
                               
                              <div class="row">
                                 <div class="col-md-12"> 
                                     <select name="job_id" class="form-control">
                                        @foreach($jobs as $job)
                                       <option value="{{$job->id}}">{{$job->name}}</option>   
                                        @endforeach  
                                     </select>

                                  </div>
                               
                               </div>

                              <div class="row">
                                 <div class="col-md-12"> 
                                   <textarea cols="8" placeholder="نبذه عنه"  name="about" class="form-control"> </textarea>
                                  </div>
                               
                               </div>
                               <input type="file"   id="cv"  name="cv">
                           </div>
                           
                       </div>
                          
                        <div class="col-md-6">
        
                          <div class="model-image">
                             <img src="{{asset('assets/images/frontend_images/cartoon/3.png')}}" alt="pop" >
         
                        </div>
                       </div>
                      </div>
                      </div>
                  </div>
                  <div class="modal-footer text-right">
                         <a  href="#" onclick="document.getElementById('applayform').submit(); return false;" class='butn butn__new'><span> أرسال  </span></a>      
                  </div>
                    </form>
                </div>
              </div>      
         </div>  
    <!--End Model  --> 
    
    
     <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5> عملائنا </h5>
                    <p>سعداء لتحقيق نجاحات بالتعاون معكم جميعًا</p>
                    
             <!-- Image Slider -->
             <div class="slider-container">
                <div class="swiper-container image-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image-container">
                                <img class="img-responsive" src="{{asset('assets/images/frontend_images/customer-logo-1.png')}}" alt="alternative">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <img class="img-responsive" src="{{asset('assets/images/frontend_images/customer-logo-2.png')}}" alt="alternative">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <img class="img-responsive" src="{{asset('assets/images/frontend_images/customer-logo-3.png')}}" alt="alternative">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <img class="img-responsive" src="{{asset('assets/images/frontend_images/customer-logo-4.png')}}" alt="alternative">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <img class="img-responsive" src="{{asset('assets/images/frontend_images/customer-logo-5.png')}}" alt="alternative">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image-container">
                                <img class="img-responsive" src="{{asset('assets/images/frontend_images/customer-logo-6.png')}}" alt="alternative">
                            </div>
                        </div>
                    </div> <!-- end of swiper-wrapper -->
                </div> <!-- end of swiper container -->
            </div> <!-- end of slider-container -->
            <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
     </div> 


    @endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.type', {
        strings: ["أفكار تسويقيه جديده  ", "الحصول  على  حلول تقنيه  ", "الحل الامثل  لتطوير  اعمالك  "],
        stringsElement: null,
		// typing speed
		typeSpeed: 20,
		// time before typing starts
		startDelay: 600,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: 5,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
      });
  });
</script>
    <script type="text/javascript">

     $(function(){
         
      SyntaxHighlighter.all();
         
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "fade",
            
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
           
    });
                   
 </script>



@endsection