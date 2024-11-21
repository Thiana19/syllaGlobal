<!-- Main Header-->
<header class="main-header">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    <ul class="top-links clearfix">
                        <li><span class="icon theme_color flaticon-maps-and-flags"></span>SyllaGlobalEd Services, KL 55000, MY</li>
                        <li><span class="icon theme_color flaticon-telephone"></span>Phone +60 17302 5968</li>
                        <li><span class="icon theme_color flaticon-e-mail-envelope"></span>syllaglobaledservices24@gmail.com</li>
                    </ul>
                    <div class="social-links">
                        <a href="http://facebook.com/share/pu55xiG3sM7mTgHG/?mibextid=LQQJ4d"><span class="fa fa-facebook-f"></span></a>
                        <a href="http://instagram.com/syllaglobaledservices?igsh=MTA5dzk4bWp6bmZvNA%3D%3D"><span class="fa fa-instagram"></span></a>
                        <a href="http://tiktok.com/@syllaglobaledservices24?_t=8n8VlfhakRW&_r=1">
                            <img src="{{ asset('images/tiktok.png') }}" alt="TikTok" style="width: 24px; height: 24px; filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(180deg) brightness(70%) contrast(100%);">
                        </a>
                        <a href=""><span class="fa fa-youtube"></span></a>
                    </div>


                </div>
                <!--Top Right-->
                <div class="top-right">
                    <a class="btn btn-default" style="background: #0D70B7; border: none; color: white" href="https://docs.google.com/forms/d/1WVYfU_xUyii5SUIBzdqOtiCxNm5XCSyltRvUfHifHaY/edit">
                        <span class=""></span>&ensp;APPLY NOW &nbsp;
                    </a>
                </div>


            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo-main.png') }}" alt="Logo" title="Logo" class="img-fluid" style="max-width: 220px;">
                        </a>
                    </div>
                </div>


                <div class="upper-right clearfix">

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="{{ route('home') }}">Home</a>
                                        {{-- <ul>
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                            <li><a href="index-4.html">Home 04</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style 01</a></li>
                                                    <li><a href="index-2.html">Header Style 02</a></li>
                                                    <li><a href="index-3.html">Header Style 03</a></li>
                                                    <li><a href="index-4.html">Header Style 04</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="{{ route('services') }}">Services</a>
                                        <ul>
                                            {{-- <li><a href="{{ route('services') }}">All Services</a></li> --}}
                                            {{-- <li><a href="{{ route('consultation') }}">Free Consulation</a></li> --}}
                                            {{-- <li><a href="services-single.html">Turnaround & Restructuring</a></li>
                                            <li><a href="services-single.html">Bonds and Commodities</a></li>
                                            <li><a href="services-single.html">Valuation & Financial Advisory</a></li>
                                            <li><a href="services-single.html">Audit and Assurance</a></li>
                                            <li><a href="services-single.html">Trades and Stocks</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ route('courses') }}">Courses</a>
                                        {{-- <ul>
                                            <li><a href="about.html">About Company</a></li>
                                            <li><a href="team.html">Meet Our Team</a></li>
                                            <li><a href="faq.html">Customers FAQ’s</a></li>
                                            <li><a href="testimonial.html">Testimonials</a></li>
                                            <li><a href="free-consultation.html">Free Consultation</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="{{ route('about') }}">About Us</a>
                                        {{-- <ul>
                                            <li><a href="case-grid.html">Cases Grid</a></li>
                                            <li><a href="case-filter.html">Cases with Filter</a></li>
                                            <li><a href="case-single.html">Cases Single</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="{{ route('team') }}">Meet Our Team</a>
                                        {{-- <ul>
                                            <li><a href="blog-sidebar.html">Blog Classic View</a></li>
                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="{{ route('faqs') }}">FAQ's</a>
                                        {{-- <ul>
                                            <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                            <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                            <li><a href="blog-single.html">Blog Single Post</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!--More Options-->
                        <div class="more-options">

                            <!--Search Box-->
                            <div class="dropdown dropdown-outer">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive" title="Consult Hub"><img src="images/logo-main.png" alt="SyllaGlobalEd" title="SyllaGlobalEd" style="max-width: 100px;"></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class=""><a href="{{ route('home') }}">Home</a>
                                {{-- <ul>
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                    <li class="dropdown"><a href="#">Header Styles</a>
                                        <ul>
                                            <li><a href="index.html">Header Style 01</a></li>
                                            <li><a href="index-2.html">Header Style 02</a></li>
                                            <li><a href="index-3.html">Header Style 03</a></li>
                                            <li><a href="index-4.html">Header Style 04</a></li>
                                        </ul>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class=""><a href="{{ route('services') }}">Services</a>
                                <ul>
                                    {{-- <li><a href="{{ route('services') }}">All Services</a></li>
                                    <li><a href="{{ route('consultation') }}">Free Consulation</a></li> --}}
                                    {{-- <li><a href="services-single.html">Turnaround & Restructuring</a></li>
                                    <li><a href="services-single.html">Bonds and Commodities</a></li>
                                    <li><a href="services-single.html">Valuation & Financial Advisory</a></li>
                                    <li><a href="services-single.html">Audit and Assurance</a></li>
                                    <li><a href="services-single.html">Trades and Stocks</a></li> --}}
                                </ul>
                            </li>
                            <li class=""><a href="{{ route('courses') }}">Courses</a>
                                {{-- <ul>
                                    <li><a href="about.html">About Company</a></li>
                                    <li><a href="team.html">Meet Our Team</a></li>
                                    <li><a href="faq.html">Customers FAQ’s</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="free-consultation.html">Free Consultation</a></li>
                                </ul> --}}
                            </li>
                            <li class=""><a href="{{ route('about') }}">About Us</a>
                                {{-- <ul>
                                    <li><a href="case-grid.html">Cases Grid</a></li>
                                    <li><a href="case-filter.html">Cases with Filter</a></li>
                                    <li><a href="case-single.html">Cases Single</a></li>
                                </ul> --}}
                            </li>
                            <li class=""><a href="{{ route('team') }}">Meet Our Team</a>
                                {{-- <ul>
                                    <li><a href="blog-sidebar.html">Blog Classic View</a></li>
                                    <li><a href="blog-grid.html">Blog Grid View</a></li>
                                    <li><a href="blog-single.html">Blog Details</a></li>
                                </ul> --}}
                            </li>
                            <li class=""><a href="{{ route('faqs') }}">FAQ's</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                    <li><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
