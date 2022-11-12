@extends('layouts.frontLayout.front_design')
@section('content')
    <!-- Header -->


    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <div class="breadcrumbs">
                            <h2> عن الشركه :  </h2>
                            <a  class="tag_link" href="index.html"> الرئيسيه   </a><i class="fa fa-angle-double-left"></i><span>عن  الشركه  </span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <!-- Details 1 -->
    <div class="basic-1" id="about1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>نبذه عن  الشركه  </h2>
                        <p>شركه سيرفر  سوفت  هي  متوسطه الحجم  وهيا شركه مساهمه مصريه  تعمل  فى  مجال  البرمجه  والحلول  الذكيه  منذ  اكثر  من  10 سنوات  داخل  وخارج  السوق  المصري  
                        </p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">أكتشف المذيد  </a>
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
                        class="img-fluid" src="{{url('assets/images/frontend_images/cartoon/10.png')}}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->
<!--Team Members -->
    <!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="https://www.rafaelalucas.com/dailyui" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->
<!--Company  History --> 
    <div id="process-section">
        <img src="{{url('assets/images/frontend_images/top-section.png')}}" >
        <div class="container-full">
            <div class="w-row">
                <div class="w-col w-col-12">
                    <h2 class="center big-title">  كيفيه سير  العمل       </h2>
                    <p>  الخطوات الاساسيه  لبناء نظام ناجح لإدارة الاعمال  والمشاريع  المقدمه لدينا </p>
                </div>
            </div>
            <div class="w-row">
                <div class="w-col">
                    <div class="process-wrapper">
                        <div id="progress-bar-container">
                            <ul>
                                <li class="step step01 active">
                                    <div class="step-inner"><span class="step-text">الاتفاق وتوفير العقد </span></div>
                                </li>
                                <li class="step step02">
                                    <div class="step-inner"><span class="step-text">تحليل النظام</span></div>
                                </li>
                                <li class="step step03">
                                    <div class="step-inner"><span class="step-text">تصميم الوجهات </span></div>
                                </li>
                                <li class="step step04">
                                    <div class="step-inner"><span class="step-text"> البرمجه  والتطوير </span></div>
                                </li>
                                <li class="step step05">
                                    <div class="step-inner"><span class="step-text"> تسليم المشروع  </span></div>
                                </li>
                            </ul>

                            <div id="line">
                                <div id="line-progress"></div>
                            </div>
                        </div>

                        <div id="progress-content-section">
                            <div class="section-content clearfix discovery active">
                                <h2>الاتفاق وتوفير العقد  </h2>
                                <p>الخطوه الاولي الاتفاق  وتحديد بنود العقد بين الطرفين  والشركه  خاصتنا  لضمان  حقوق  العميل و تأكيد التزامنا باعلي مقاييس الجوده</p>
                            </div>

                            <div class="section-content clearfix strategy">
                                <h2>تحليل  النظام    </h2>
                                <p>المرحله التانيه نقوم بعمل  مقابلات  معا  العميل  للتاكد من  المتطلبات  الواجب  توافرها  داخل  المشروع  </p>
                            </div>

                            <div class="section-content clearfix creative">
                                <h2>تصميم الوجهات  </h2>
                                <p>المرحله الثالته  نقوم برسم و تخطيط الواجهه معا من اجل الوصول الي تجربه مستخدم فريد .</p>
                            </div>

                            <div class="section-content clearfix production">
                                <h2>البرمجه و التطوير  </h2>
                                <p>المرحله الرابعه  نقوم بتطوير الموقع و التطبيقات باحدث الوسائل البرمجيه الخاليه من الاخطاء.</p>
                            </div>

                            <div class="section-content clearfix analysis">
                                <h2>تسليم المشروع  </h2>
                                <p>  و أخيرا نقوم بتسليم المشروع بخدمه دعم كامله تحقق رضا الدائم للعميل </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{url('assets/images/frontend_images/top-section1.png')}}">
    </div>
<!--End  Company  History  --> 
<!--Start  Company  Team  --> 
<section class="web_disigner">
  <h1 class="text-center">أعضاء الفريق  </h1>
  <p class="text-center"> لدينا فريق كامل  لديه العديد من سنوات  الخبره    فى  مجال  التسويق  والبرمجه </p>
    <div class="web_disigner_contain container">
      <div class="flexslider ">
   <ul class="slides">
      
<li>
              <div class="item  active">
            
                <div class="row">
                  <div class="col-md-4 padtop30">
                    <center><div class="parent_circle">
                      <div class="parent_circle_contain">
                      <p class="title" >مصطفى  السيد  </p>
                      <p class="description">UI & UX DEVELOPER</p> 
            
                    </div>
                    <div class=" child_round_circle child_round_circle_img1">
                      
                    </div>
                    </div>
                    </center>
                  </div>          
                  <div class="col-md-4 padtop30">
                   <center><div class="parent_circle">
                   <div class="parent_circle_contain">
                    <p class="title" > محمود أحمد  </p>
                    <p class="description" >FRONT END DEVELOPER</p>
        
                    </div>
                    <div class="child_round_circle child_round_circle_img2  ">
                      
                    </div>
                    </div>
                    </center>
                  </div>
                  <div class="col-md-4 padtop30">
                <center> <div class="parent_circle">
                      <div class="parent_circle_contain">
                        <p class="title" > مصطفى  احمد    </p>
                        <p class="description" >PHP  DEVELOPER </p>
          
                    </div>
                    <div class=" child_round_circle child_round_circle_img3 ">
                      
                    </div>
                    </div>
                    </center> 
                  </div>        
                </div>
              </div>
</li>
<li>
              <div class="item">
                <div class="row">
                  <div class="col-md-4 padtop30">
                    <center><div class="parent_circle">
                      <div class="parent_circle_contain">
                        <p class="title">محمد أحمد  </p>
                        <p class="description" >PHP  DEVELOPER </p>
        
                    </div>
                    <div class=" child_round_circle child_round_circle_img4 ">
                      
                    </div>
                    </div>
                    </center>
                  </div>              
                  <div class="col-md-4 padtop30">
                    <center><div class="parent_circle">
                      <div class="parent_circle_contain">
                        <p class="title">محمد أحمد  </p>
                        <p class="description" >PHP  DEVELOPER </p>
                    </div>
                    <div class=" child_round_circle child_round_circle_img5">
                      
                    </div>
                    </div>
                    </center>
                  </div>    
                   <div class="col-md-4 padtop30">
                    <center><div class="parent_circle">
                      <div class="parent_circle_contain">
                        <p class="title">محمد أحمد  </p>
                        <p class="description" >PHP  DEVELOPER </p>
                    </div>
                    <div class=" child_round_circle child_round_circle_img6">
                      
                    </div>
                    </div>
                    </center>
                  </div>            
                </div>
              </div>
</li>             
            
<li>
  <div class="item">
    <div class="row">
      <div class="col-md-4 padtop30">
        <center><div class="parent_circle">
          <div class="parent_circle_contain">
            <p>محمد أحمد  </p>
            <p class="description" >PHP  DEVELOPER </p>

        </div>
        <div class=" child_round_circle child_round_circle_img4 ">
          
        </div>
        </div>
        </center>
      </div>              
      <div class="col-md-4 padtop30">
        <center><div class="parent_circle">
          <div class="parent_circle_contain">
          <p class="title" > ايناس احمد    </p>
          <p class="description" >PHP  DEVELOPER </p>

        </div>
        <div class=" child_round_circle child_round_circle_img5">
          
        </div>
        </div>
        </center>
      </div>    
       <div class="col-md-4 padtop30">
        <center><div class="parent_circle">
          <div class="parent_circle_contain">
          <p class="title" > ايناس احمد    </p>
          <p class="description" >PHP  DEVELOPER </p>
    
        </div>
        <div class=" child_round_circle child_round_circle_img6">
          
        </div>
        </div>
        </center>
      </div>            
    </div>
  </div>
</li>   

<li>
  <div class="item">
    <div class="row">
      <div class="col-md-4 padtop30">
        <center><div class="parent_circle">
          <div class="parent_circle_contain">
          <p class="title" > ايناس احمد    </p>
          <p class="description" >PHP  DEVELOPER </p>
     
        </div>
        <div class=" child_round_circle child_round_circle_img4 ">
          
        </div>
        </div>
        </center>
      </div>              
      <div class="col-md-4 padtop30">
        <center><div class="parent_circle">
          <div class="parent_circle_contain">
          <p class="title" > ايناس احمد    </p>
          <p class="description" >PHP  DEVELOPER </p>
        
        </div>
        <div class=" child_round_circle child_round_circle_img5">
          
        </div>
        </div>
        </center>
      </div>    
       <div class="col-md-4 padtop30">
        <center><div class="parent_circle">
          <div class="parent_circle_contain">
          <p class="title" > ايناس احمد    </p>
          <p class="description" >PHP  DEVELOPER </p>

        </div>
        <div class=" child_round_circle child_round_circle_img6">
          
        </div>
        </div>
        </center>
      </div>            
    </div>
  </div>
</li>   
</div>

          </div>                          
        </div>
      </div>
    </div>
    </div>
   
    </section>

<!--End Company  Team  --> 


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

