<!-- Main Header with Modern Design -->
<header class="main-header modern-header">
    <div class="auto-container">
        <div class="header-container">
            <!-- Logo -->
            <div class="logo-container">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-white.png') }}" alt="SyllaGlobalEd Services" title="SyllaGlobalEd Services" class="logo-img">
                </a>
            </div>
            
            <!-- Navigation Menu -->
            <div class="nav-container">
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
                            <li><a href="{{ route('about') }}">ABOUT US</a></li>
                            <li><a href="{{ route('services') }}">SERVICES</a></li>
                            <li><a href="{{ route('courses') }}">COURSES</a></li>
                            <li><a href="{{ route('contact') }}">CONTACT</a></li>
                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            <!-- Apply Now Button -->
            <div class="apply-button-container">
                <a href="https://docs.google.com/forms/d/1WVYfU_xUyii5SUIBzdqOtiCxNm5XCSyltRvUfHifHaY/edit" class="apply-now-btn">APPLY NOW</a>
            </div>
        </div>
    </div>
</header>