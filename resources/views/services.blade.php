@extends('layout.app')
@section('main')
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <h1>Services</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="services-page-section">
    	<div class="auto-container">
            <div class="row clearfix">

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/news-4.jpg" alt="" />
                            <a href="blog-single.html" class="overlay-box">
                            	<span class="icon fa fa-link"></span>
                            </a>
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="icon flaticon-startup"></span></div>
                                <h3><a href="blog-single.html">University Application</a></h3>
                                <div class="text">We help students select ideal universities, draft compelling applications, and manage deadlines.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/news-5.jpg" alt="" />
                            <a href="blog-single.html" class="overlay-box">
                            	<span class="icon fa fa-link"></span>
                            </a>
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="icon flaticon-analytics-1"></span></div>
                                <h3><a href="blog-single.html">Visa Guidance</a></h3>
                                <div class="text">We provide expert consultation, document assistance, and application support for successful visa acquisition.</div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!--News Block Two-->
                 <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/news-6.jpg" alt="" />
                            <a href="blog-single.html" class="overlay-box">
                            	<span class="icon fa fa-link"></span>
                            </a>
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="icon flaticon-structure"></span></div>
                                <h3><a href="blog-single.html">Airport Pickups</a></h3>
                                <div class="text">We ensure a warm welcome and smooth transition upon arrival in a new country.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/news-5.jpg" alt="" />
                            <a href="blog-single.html" class="overlay-box">
                            	<span class="icon fa fa-link"></span>
                            </a>
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="icon flaticon-analytics-1"></span></div>
                                <h3><a href="blog-single.html">Accommodation Assistance</a></h3>
                                <div class="text">We help students find safe and suitable housing optionsthat meet their budget and preferences.</div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="images/resource/services-4.jpg" alt="" />
                            <a href="blog-single.html" class="overlay-box">
                            	<span class="icon fa fa-link"></span>
                            </a>
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="icon flaticon-donation"></span></div>
                                <h3><a href="blog-single.html">Scholarships</a></h3>
                                <div class="text">Maximize your savings and minimize your stress with SyllaGlobalEd Services.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="auto-container">
            <div class="inner-section">
                <div class="row clearfix">

                    <!--Info Block-->
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="icon-box"><span class="icon flaticon-maps-and-flags"></span></div>
                                <div class="title">Address : NEU Suites, Jalan Ampang,</div>
                                <h2>KL 55000, Malaysia</h2>
                            </div>
                        </div>
                    </div>

                    <!--Info Block-->
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="icon-box"><span class="icon flaticon-phone-call"></span></div>
                                <div class="title">Phone Number :</div>
                                <h2>+60 17302 5968</h2>
                            </div>
                        </div>
                    </div>

                    <!--Info Block-->
                    <div class="info-block col-md-4 col-sm-12 col-xs-12">
                        <div class="inner">
                            <div class="content">
                                <div class="icon-box"><span class="icon flaticon-chronometer-outline"></span></div>
                                <div class="title">Opening Hours :</div>
                                <h2>Mon - Fri: 8am - 5pm</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
