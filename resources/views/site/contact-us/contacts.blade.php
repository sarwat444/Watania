@extends('layouts.frontLayout.front_design')
@section('content')

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <div class="breadcrumbs">
                            <h2>  تواصل  معنا  :  </h2>
                            <a  class="tag_link" href="index.html"> الرئيسيه   </a><i class="fa fa-angle-double-left"></i><span> تواصل معنا    </span>
                    </div> 
                </div> 
            </div> 
        </div> 
    </header>
    <!-- end of header -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>إبدأ مشروعك الان</h2>
                    <p class="text-center">سيرفر  سوفت   هو شريكك الأمثل اذا كنت تبحث عن بناء متجر الكتروني او منصه للتحاره عبر الإنترنت<br>البداية الحقيقية لمشروعك</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4>كيف يمكننا مساعدتك؟</h4>
                        <h3>العالم يحتاج إلى مزيد من الحلول الذكية لحياة أسهل !.</h3>
                        <h5>الفرع الرئيسي  </h5>
                        <ul>
                            <li> <i class="fa fa-map-marker"></i>ب 8 - 3 برج ريحانة ريزدنس - زهراء المعادى - المعادى
                                <br>القاهرة - مصر</li>
                                <li><i class="fa fa-phone"></i> 201144484650+</li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">الأسـم  </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">الايميل </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">نص الرساله  </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">أرسل الرساله </button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
      
                
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
    <div class="container">
        <div class="col-md-12">
            <div class="map-responsive">
         
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.970384403724!2d31.349919315115738!3d30.06638338187442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAzJzU5LjAiTiAzMcKwMjEnMDcuNiJF!5e0!3m2!1sen!2seg!4v1613429630387!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
            </div>
        </div>

    </div>
@endsection


