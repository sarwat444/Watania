<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Server  Soft </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/frontend_css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend_css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend_css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend_css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend_css/magnific-popup.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/css/frontend_css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend_css/aos.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/frontend_css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/frontend_css/styles.css') }}" rel="stylesheet">
    <link rel="icon" href="images/toplogo.png">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head><!--/head-->
<body data-spy="scroll" data-target=".fixed-top">

	<div class="spinner-wrapper">
  <div id="container">
  <div class="divider" aria-hidden="true"></div>
  <p class="loading-text" aria-label="Loading">
    <span class="letter" aria-hidden="true">L</span>
    <span class="letter" aria-hidden="true">o</span>
    <span class="letter" aria-hidden="true">a</span>
    <span class="letter" aria-hidden="true">d</span>
    <span class="letter" aria-hidden="true">i</span>
    <span class="letter" aria-hidden="true">n</span>
    <span class="letter" aria-hidden="true">g</span>
  </p>


</div>
    </div>

 
	@include('layouts.frontLayout.front_header')

	@yield('content')

	@include('layouts.frontLayout.front_footer')
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  	<script src="{{ asset('assets/js/frontend_js/swiper.min.js') }}"></script>
  	<script src="{{ asset('assets/js/frontend_js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend_js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/frontend_js/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend_js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/js/frontend_js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js"></script>
    <script type="text/javascript" src="assets/js/frontend_js/shCore.js"></script>
    <script type="text/javascript" src="assets/js/frontend_js/shBrushXml.js"></script>
    <script type="text/javascript" src="assets/js/frontend_js/shBrushJScript.js"></script>
    <script type="text/javascript" src="assets/js/frontend_js/aos.js"></script>
    <script src="{{ asset('assets/js/frontend_js/scripts.js') }}"></script>

    @yield('js')
    <script type="text/javascript">
     $(function(){
        $(function(){
      SyntaxHighlighter.all();
    });
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

<script>
  AOS.init();
</script>


      <!-- Syntax Highlighter -->

  @yield('js')


 



