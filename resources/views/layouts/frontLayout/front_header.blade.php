
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
 
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html">
            <img id="top_logo" src="{{asset('assets/images/frontend_images/logo.png')}}" alt="logo" >
        </a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{url('/')}}">الرئيسيه   <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{url('about-us')}}">عن الشركه  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{url('services')}}">خدماتنا </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{url('works')}}">أعمالنا </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{url('hosting-plan')}}">أسعار الاستضافه  </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{url('contact-us')}}">تواصل  معنا </a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x instagram"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x linkedin"></i>
                        <i class="fab fa-linkedin fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
