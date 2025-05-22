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
                        	<img src="{{ asset('images/services/students.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="fa fa-university"></span></div>
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
                        	<img src="{{ asset('images/services/visa.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="fa fa-plane"></span></div>
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
                        	<img src="{{ asset('images/services/pickup.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="fa fa-car"></span></div>
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
                        	<img src="{{ asset('images/services/house.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                        	<div class="content">
                            	<div class="icon-box"><span class="icon flaticon-home"></span></div>
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
                        	<img src="{{ asset('images/scholarships.jpg') }}" alt="" style="height: 247px"/>
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
@endsection
