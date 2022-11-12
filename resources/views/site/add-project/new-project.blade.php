@extends('layouts.frontLayout.front_design')
@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                            <div class="breadcrumbs">
                            <h2>  طلب  مشروع جديد  :  </h2>
                            <a  class="tag_link" href="index.html"> الرئيسيه   </a><i class="fa fa-angle-double-left"></i><span> طلب  مشروع  :</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!--start With us -->

        <div class="container">
            <div class="row">
            <div class="col-md-6">
               <div class="send-form">
                  <h1>أبدأ معنا الأن </h1>
                   <p>نحن  جاهزون لتنفيذ فكرتك  ,  يرجى  وضع  كافه  بيانات  مشروعك  وستقوم بالتواصل  معك  من اجل  اخبارك  المده الكليه  والتكلفه  وشكرا </p>
                   <form>
                       <div class="row">
                           <div class="col-md-12">
                             <input type="text" placeholder="أسمك " class="form-control">
                           </div>
                      </div>
                       
                       <div class="row">
                           <div class="col-md-8">
                             <input type="email" placeholder="البريد الالكترونى" class="form-control">
                           </div>
                            <div class="col-md-4">
                             <input type="text" placeholder="رقم الهاتف  " class="form-control">
                           </div>
                      </div>
                           <div class="row">
                           <div class="col-md-12">
                             <input type="text" placeholder="عنوان المشروع   " class="form-control">
                           </div>
                          </div>
                        <div class="row">
                           <div class="col-md-12">
                               <textarea class="form-control" rows="5" placeholder="وصف  تفصيلى  للمشروع  "></textarea>
                           </div>
                          </div>
                         
                       <div class="row">
                          <div class="col-md-5">
                             <div class="upload-btn-wrapper">
                                  <button class="btn btn-upload">ملفات  توضيحيه للمشروع <i class="fa fa-paperclip"></i>
  </button>
                                  <input type="file" name="myfile" />
                            </div>
                          </div>
                           <div class="col-md-4">
                            <div class="upload-btn-wrapper">
                                  <button class="btn btn-upload">أضافه اللوجو  <i class="fa fa-paperclip"></i> </button>
                                  <input type="file" name="myfile" />
                            </div>

                          </div>
                             <div class="col-md-3">
                                 <input type="checkbox" value="noreply" > 
                               <span class="no-answer">لا يوجد  رد  </span>  
                         
                          </div>

                       </div>
                                <div class="row">
                           <div class="col-md-12">
                                        <div class="row field_wrapper">
                                          
                                            <div class="col-md-10">
                                                <div >
                                                    <input type="text" placeholder="رابط المشروع  " class="form-control">
                                                 </div>
                                                </div>
                                               <div class="col-md-2">
                                                   <a class="btn add-button add_button btn-primary" >أضافه  </a>
                                            </div>
                                           
                                            </div>
                           </div>
                           </div>
                       
             
                       
                   </form>
               </div>
            
            </div>
            <div class="col-md-6">
              <img class="img2" src="{{asset('assets/images/frontend_images/cartoon/7.png')}}" alt="message"> 
            </div>
           </div>
        
        </div>

        @endsection

