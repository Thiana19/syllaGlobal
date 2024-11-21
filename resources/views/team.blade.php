@extends('layout.app')
@section('main')
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <h1>Meet Our Team</h1>
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
                        <li>Meet Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="team-page-section">
    	<div class="auto-container">
            <div class="row clearfix">

                <!--Team Member-->
            	<div class="team-member style-two col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('images/team/dalla.jpg') }}" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="#">Issiaga Sylla</a></h3>
                            <div class="designation">Founder and CEO</div>
                            <div class="text">The President of Consulthub, she has been the captain of his team..</div>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
            	<div class="team-member style-two col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('images/team/ommah.jpg') }}" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="#">Omnia Salah</a></h3>
                            <div class="designation">Social Media Marketing Director</div>
                            <div class="text">Team Leader of Consulthub, he has been the captain of his team.. </div>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
            	<div class="team-member style-two col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('images/team/flex.jpg') }}" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="#">Oumar Sylla</a></h3>
                            <div class="designation">Chief Operation Officer (COO)</div>
                            <div class="text">The HR Manger of Consulthub, he is very intelligent and smart.. </div>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
            	<div class="team-member style-two col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('images/team/thiana2.jpg') }}" style="height: 360px" alt="" />
                            <div class="overlay-box">
                            	<ul class="social-icon-two">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="#">Mamadou Thiana Cisse</a></h3>
                            <div class="designation">Software Engineer</div>
                            <div class="text">In charge of the website </div>
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
