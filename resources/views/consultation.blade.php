@extends('layout.app')
@section('main')
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <h1>Free Consultation</h1>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Free Consultation</li>
                    </ul>
                </div>
                <div class="pull-right">
                    <div class="share-icon"><a href="#"><span class="icon fa fa-share-alt"></span> Share</a></div>
                </div>

            </div>
        </div>
    </section>

    <section class="consult-section">
    	<div class="auto-container">
            <div class="section-inner">
            	<div class="image">
                	<img src="images/resource/consult.jpg" alt="" />
                    <div class="content">
                    	<h2>Get Free Consultation</h2>
                        <div class="text">Please complete the form below for free consultation with <br> our expereinced consutant.</div>
                    </div>
                </div>
                <div class="lower-content">
                	<div class="row clearfix">

                    	<!--Form Column-->
                    	<div class="form-column col-md-8 col-sm-12 col-xs-12">
                        	<div class="inner-column">

                                <!-- Consult Form -->
                                <div class="consult-form">
                                    <!--Comment Form-->
                                    <form method="post" action="contact.html">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            	<label>Your Name*</label>
                                                <input type="text" name="username" placeholder="Your Name*" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            	<label>Email*</label>
                                                <input type="email" name="email" placeholder="Email Address*" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            	<label>Ph Num <span>(Optional)</span></label>
                                                <input type="text" name="phone" placeholder="Phone Num" required>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            	<label>Subject</label>
                                                <select class="custom-select-box">
                                                    <option>Bonds and Commodities</option>
                                                    <option>Bonds One</option>
                                                    <option>Bonds Two</option>
                                                    <option>Bonds Three</option>
                                                    <option>Bonds Four</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            	<label>Special Request</label>
                                                <textarea name="message" placeholder="Special Request..."></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                <button class="theme-btn btn-style-three" type="submit" name="submit-form">REQUEST QUOTE</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                                <!--End Consult Form -->
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
