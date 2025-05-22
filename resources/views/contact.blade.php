@extends('layout.app')
@section('main')
<section class="page-title" style="background-image:url(images/background/6.jpg);">
    <div class="auto-container">
        <h1>Get In Touch With Us</h1>
    </div>
</section>

<!--Page Info-->
<section class="page-info">
    <div class="auto-container">
        <div class="inner-container clearfix">

            <div class="pull-left">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Office Details Column -->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="column-inner">
                    <!-- Office Details -->
                    <!-- <h2>Address</h2><br> -->
                    <ul class="info-list">
                        <li><span class="icon flaticon-placeholder-3"></span><strong>Address:</strong> NEU Suites, Jalan Ampang, 55000</li>
                        <li><span class="icon flaticon-telephone"></span><strong>Call Us:</strong><br> +60 17302 5968</li>
                        <li><span class="icon flaticon-e-mail-envelope"></span><strong>Mail Us:</strong><br> syllaglobaledservices24@gmail.com </li>
                        <li><span class="icon fa fa-clock-o"></span><strong>Opening Time:</strong><br> Mon - Sat: 09.00am to 18.00pm</li>
                    </ul>
                </div>
            </div>

            <!-- SVG and Apply Button Column -->
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="contact-form">
                    {{-- <h2>Send Us a Message</h2> --}}
                    <div class="svg-image">
                        <img src="{{ asset('images/study.svg') }}" alt="Contact Us Illustration" style="max-width: 310px; margin-left:230px"/>
                    </div>
                    <div class="apply-now">
                        <a href="https://docs.google.com/forms/d/1WVYfU_xUyii5SUIBzdqOtiCxNm5XCSyltRvUfHifHaY/edit" target="_blank">
                            <button class="theme-btn btn-style-one">APPLY NOW</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-outer">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.222923719084!2d101.67851775!3d3.1390037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37dba2c7bcd7%3A0xf77c8b8c01b1ba9!2sKuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2smy!4v1697269704843!5m2!1sen!2smy"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>


@endsection
