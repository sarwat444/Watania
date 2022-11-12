@extends('layouts.frontLayout.front_design')
@section('content')

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <div class="breadcrumbs">
                            <h2>  خدماتنا  :  </h2>
                            <a  class="tag_link" href="index.html"> الرئيسيه   </a><i class="fa fa-angle-double-left"></i><span>  خدماتنا   </span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
   <!--Start  Service  Header --> 
      <div class="service-options">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <h2>حلول برمجيات متطورة لنمو أعمالك</h2>
                     <p>مجموعة من حلول البرمجيات المتنوعة للأعمال المختلفة، لميكنة وإدارة مختلف الأنشطة الخاصة بك.</p>
                     <ul class="services-list">
                            <li><i class="fa fa-check-circle"> </i>  إطلاع لحظي على المعلومات </li>
                            <li><i class="fa fa-check-circle"> </i>  أدوات تطوير الأداء المستمر </li>
                            <li><i class="fa fa-check-circle"> </i>   تحليل ومراجعة لقرار أفضل      </li>          
                     </ul>
                     <p>هذه النتائج تأتي في مقدمة ما تحصل عليه، بالإضافة إلى خيارات اخرى كثيرة ومتطورة.</p>
                 </div>
                     <div class="col-md-6">
                    <div class="options-image">
                     <img src="{{url('assets/images/frontend_images/cartoon/7.png')}}" alt="servies">
                    </div>
                  </div>
             </div>
          </div>
      </div>
    <!--End Service header --> 
    <div class="allservices">
     <div class="container">
         <div class="row">
           <div class="col-md-4">
               <div class="cart">
                   <i class="fa fa-desktop"></i> 
                   <h2>تصميم المواقع الاكترونية</h2>
                   <p>
                   تصميم مواقع الكترونية مثل تصميم موقع الشركات و المواقع الشخصية و الطبية والمواقع الحكومية والمؤسسات ومواقع المحاماة … وغيرها 
                   </p>
               </div>
           </div>
           <div class="col-md-4">
                 <div class="cart">
                   <i class="fa fa-database"></i> 
                   <h2> إستضافة المواقع الالكترونية </h2>
                   <p>
                 باقات مختلفة من افضل أنواع الإستضافة المواقع الالكترونية والتي تمتاز بسرعتها العالية وحمايتها العالية مع خدمة النسخ الإحتياطي
                   </p>
               </div>
           </div>
            <div class="col-md-4">
                  <div class="cart">
                   <i class="fa fa-palette"></i> 
                   <h2>تصميم الهوية التجاريه</h2>
                   <p>
             هوية الشركة هي شخصيتها، وكلما امتلكت المؤسسة هوية مميزة كلما كانت أكثر قدرة على النجاح والتفوق على منافسيها فقط قدم لنا نبذه عن مشروعك
                   </p>
               </div>
           </div>
         </div>
                  <div class="row">
           <div class="col-md-4">
               <div class="cart">
                   <i class="fa fa-mobile-alt"></i>
                   <h2> تصميم وبرمجة التطبيقات</h2>
                   <p>
              لسنا مطوريين تطبيقات نمطيين بل نعمل بمواصفات ومعايير عالمية لإخراج أفضل الأعمال وبإحترافية عالية
                   </p>
               </div>
           </div>
           <div class="col-md-4">
                 <div class="cart">
                    <i class="fa fa-headphones"></i>
                   <h2>دعم فني للمواقع</h2>
                   <p>
                 تأكد تماماً بأن مشروعك سيكون تحت المراقبة والدعم اللازم من أجل ضمان إستقراريته وستتلقى دعم فني وفوري وعلى مدار الساعة والأسبوع 24/7
                   </p>
               </div>
           </div>
            <div class="col-md-4">
                  <div class="cart">
                   <i class="fa fa-bullhorn"></i> 
                   <h2>خدمات التسويق الالكتروني</h2>
                   <p>
               من اهم الخدمات التي تبرع بها الشركة وتتم من خلال ادارة الحملات الاعلانية المدفوعة على جوجل لتظهر بمنتجك فى اول صفحات محركات البحث بكل احترافية
                   </p>
               </div>
           </div>
         </div>
         
         
        </div>
    </div>
   <div class="container"> 
    <div class="start">
      
         <h1> أبدا الأن </h1> 
         <p>هل ترغب بتحويل فكرتك الي تطبيق مربح ام تود تصميم موقع الكتروني او هوية تجارية لنشاطك التجاري<br>
ارسل لنا تفاصيل مشروعك ورقم جوالك وسيقوم فريقنا بالرد عليك باسرع وقت </p> 
        <a class="btn btn-primary" href="{{url('add-project')}}"> أبدا الأن </a>
      </div>
    </div>
    
@endsection


