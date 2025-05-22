@extends('layout.app')
@section('main')
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-two">
    	<div class="auto-container">
        	<div class="inner-container">
            	<div class="row clearfix">
                	<!--Column-->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="inner-content">
                        	<div class="dark-text">We are always looking for specific approach to each cases & Provide full solutions.</div>
                            <div class="text">
                            	<p>We have built an enviable reputation in the consumer goods, heavy industry, high-tech, manufacturing, medical, recreational vehicle, and transportation sectors. multidisciplinary team of engineering experts.</p>
                                <ul class="list-style-three">
                                	<li>Which toil and pain can procure great pleasure.</li>
                                    <li>Any right to find man who annoying.</li>
                                    <li>Consequences, avoids a pain that produces.</li>
                                </ul>
                                <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain.</p>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="image">
                        	<img src="images/resource/about-2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Featured Services-->
    <section class="featured-services">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Feature Block-->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="services-single.html"><img src="{{ asset('images/background/mission.jpg') }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="services-single.html">Our Mission</a></h3>
                            <div class="text">We empowers students in their study abroad journey by providing personalized support, simplifying the process, and ensuring a seamless experience to achieve academic and career goals.</div>
                        </div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="services-single.html"><img src="{{ asset('images/background/vision.jpg') }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="services-single.html">Our Vision</a></h3>
                            <div class="text">We aspire to be the leading global education consultancy by, empowering students to achieve their academic and career aspirations through personalized guidance and seamless support.</div>
                        </div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="services-single.html"><img src="{{ asset('images/background/values.jpg') }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="services-single.html">Core Ethical Values</a></h3>
                            <div class="text">Integrity, transparency, and client-centricity are the core values of our organization, guiding every decision we make. We are committed to fostering trust and building strong, lasting relationships with our clients.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Featured Services-->

    <!--Approach Section-->
    <section class="approach-section grey-bg">
    	<div class="auto-container">
        	<!--Sec Title-->
        	<div class="sec-title">
            	<h2>Our Smart Approach</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
            	<!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-donation"></span>
                        </div>
                        <h3><a href="services-single.html">Financial Service</a></h3>
                        <div class="title">Trusted</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-donation"></span>
                            </div>
                        	<h3><a href="services-single.html">Financial Service</a></h3>
                            <div class="overlay-title">Trusted</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-factory"></span>
                        </div>
                        <h3><a href="services-single.html">Manufacturing</a></h3>
                        <div class="title">Large Scale</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-factory"></span>
                            </div>
                        	<h3><a href="services-single.html">Manufacturing</a></h3>
                            <div class="overlay-title">Large Scale</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-medical-kit-bag"></span>
                        </div>
                        <h3><a href="services-single.html">Health Department</a></h3>
                        <div class="title">Corporation</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-medical-kit-bag"></span>
                            </div>
                        	<h3><a href="services-single.html">Health Department</a></h3>
                            <div class="overlay-title">Corporation</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-school-bus"></span>
                        </div>
                        <h3><a href="services-single.html">Surface Transport</a></h3>
                        <div class="title">Very Economy</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-school-bus"></span>
                            </div>
                        	<h3><a href="services-single.html">Surface Transport</a></h3>
                            <div class="overlay-title">Very Economy</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-donation"></span>
                        </div>
                        <h3><a href="services-single.html">Financial Service</a></h3>
                        <div class="title">Trusted</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-donation"></span>
                            </div>
                        	<h3><a href="services-single.html">Financial Service</a></h3>
                            <div class="overlay-title">Trusted</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-factory"></span>
                        </div>
                        <h3><a href="services-single.html">Manufacturing</a></h3>
                        <div class="title">Large Scale</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-factory"></span>
                            </div>
                        	<h3><a href="services-single.html">Manufacturing</a></h3>
                            <div class="overlay-title">Large Scale</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-medical-kit-bag"></span>
                        </div>
                        <h3><a href="services-single.html">Health Department</a></h3>
                        <div class="title">Corporation</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-medical-kit-bag"></span>
                            </div>
                        	<h3><a href="services-single.html">Health Department</a></h3>
                            <div class="overlay-title">Corporation</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

                <!--Featured Block Three-->
            	<div class="featured-block-three">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-school-bus"></span>
                        </div>
                        <h3><a href="services-single.html">Surface Transport</a></h3>
                        <div class="title">Very Economy</div>
                        <div class="overlay-box">
                        	<div class="large-icon">
                            	<span class="icon flaticon-school-bus"></span>
                            </div>
                        	<h3><a href="services-single.html">Surface Transport</a></h3>
                            <div class="overlay-title">Very Economy</div>
                            <div class="text">Electronic Materials has servd the semicondctor industry as a leading-edge materials.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Approach Section-->

    <!--History Section-->
    {{-- <section class="history-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>History In Words</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-14.jpg" alt="" /></a>
                            <div class="post-date">Aug 17, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Started at Newyork</a></h3>
                            <div class="text">The Great denouncings our labour pleasurees praisings pains was born and  will give you an seds accounts</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-15.jpg" alt="" /></a>
                            <div class="post-date">Aug 21, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">First & Best Project</a></h3>
                            <div class="text">Anyone who loves off pursu or desires to obtain pains of itself because it is pains but occasionally desires.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-16.jpg" alt="" /></a>
                            <div class="post-date">Aug 27, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Join New Partner</a></h3>
                            <div class="text">Praesentium  delen atque all corrupti quosy dolores et sed quasue molestias excepturid cupiditate non provident.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-17.jpg" alt="" /></a>
                            <div class="post-date">Aug 29, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Best Company Award</a></h3>
                            <div class="text">Righteous indignation men uts who are so beguiled and by the charms of pleasure by desire trouble.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-14.jpg" alt="" /></a>
                            <div class="post-date">Aug 17, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Started at Newyork</a></h3>
                            <div class="text">The Great denouncings our labour pleasurees praisings pains was born and  will give you an seds accounts</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-15.jpg" alt="" /></a>
                            <div class="post-date">Aug 21, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">First & Best Project</a></h3>
                            <div class="text">Anyone who loves off pursu or desires to obtain pains of itself because it is pains but occasionally desires.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-16.jpg" alt="" /></a>
                            <div class="post-date">Aug 27, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Join New Partner</a></h3>
                            <div class="text">Praesentium  delen atque all corrupti quosy dolores et sed quasue molestias excepturid cupiditate non provident.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-17.jpg" alt="" /></a>
                            <div class="post-date">Aug 29, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Best Company Award</a></h3>
                            <div class="text">Righteous indignation men uts who are so beguiled and by the charms of pleasure by desire trouble.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-14.jpg" alt="" /></a>
                            <div class="post-date">Aug 17, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Started at Newyork</a></h3>
                            <div class="text">The Great denouncings our labour pleasurees praisings pains was born and  will give you an seds accounts</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-15.jpg" alt="" /></a>
                            <div class="post-date">Aug 21, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">First & Best Project</a></h3>
                            <div class="text">Anyone who loves off pursu or desires to obtain pains of itself because it is pains but occasionally desires.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-16.jpg" alt="" /></a>
                            <div class="post-date">Aug 27, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Join New Partner</a></h3>
                            <div class="text">Praesentium  delen atque all corrupti quosy dolores et sed quasue molestias excepturid cupiditate non provident.</div>
                        </div>
                    </div>
                </div>

                <div class="news-block-five">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="blog-single.html"><img src="images/resource/news-17.jpg" alt="" /></a>
                            <div class="post-date">Aug 29, 2016</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">Best Company Award</a></h3>
                            <div class="text">Righteous indignation men uts who are so beguiled and by the charms of pleasure by desire trouble.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--End History Section-->

    <!--Request Section-->
    {{-- <section class="request-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title light">
            	<h2>Request For Call Back</h2>
            </div>
            <div class="row clearfix">
            	<!--Form Column-->
            	<div class="form-column col-md-8 col-sm-12 col-xs-12">

                    <!--Default Form-->
                    <div class="default-form">
                        <div class="row clearfix">
                        	<form method="post" action="contact.html">
                            	<div class="col-md-6 col-sm-6 col-xs-12">
                                	<!--Form Group-->
                                    <div class="form-group">
                                        <input type="text" name="name" value="" placeholder="Name *" required>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Ph Num*" required>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group">
                                        <select class="custom-select-box">
                                            <option>Enquiry About</option>
                                            <option>Enquiry One</option>
                                            <option>Enquiry Two</option>
                                            <option>Enquiry Three</option>
                                            <option>Enquiry Four</option>
                                        </select>
                                    </div>
                               	</div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!--Form Group-->
                                    <div class="form-group">
                                        <textarea placeholder="Special Request..."></textarea>
                                    </div>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-12 col-s col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-one">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!--Info Column-->
            	<div class="info-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<h2>Contact Details</h2>
                        <div class="text">Please find below contact details and contact us today!</div>
                        <ul class="list-style-four">
                        	<li><span class="icon fa fa-phone"></span>Ph Num: +321 456 78 901</li>
                            <li><span class="icon fa fa-envelope"></span>Email: Info@supportyou.com</li>
                            <li><span class="icon fa fa-phone"></span>Mon to Sat: 9.00am to 16.pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Request Section-->

    <!--Press Section-->
    {{-- <section class="press-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Press Releases</h2>
            </div>
            <div class="two-item-carousel owl-carousel owl-theme">

                <!--Press Block-->
            	<div class="press-block">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="image-column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/resource/press-1.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                            	<div class="content-inner">
                                	<h3><a href="services-single.html">ConsultHub for Business Growth</a></h3>
                                    <div class="title">21st August, 2016</div>
                                    <div class="text">Idea of denouncing pleasure and praising pain was born and will give you a complete account of the system, and expound.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Press Block-->
            	<div class="press-block">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="image-column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/resource/press-2.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                            	<div class="content-inner">
                                	<h3><a href="services-single.html">Mobile Gaming Recuirement</a></h3>
                                    <div class="title">21st August, 2016</div>
                                    <div class="text">Fortune has announced the launch of a new digital recruitment programme that will use online gaming and digital analysis.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Press Block-->
            	<div class="press-block">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="image-column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/resource/press-1.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                            	<div class="content-inner">
                                	<h3><a href="services-single.html">ConsultHub for Business Growth</a></h3>
                                    <div class="title">21st August, 2016</div>
                                    <div class="text">Idea of denouncing pleasure and praising pain was born and will give you a complete account of the system, and expound.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Press Block-->
            	<div class="press-block">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="image-column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/resource/press-2.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                            	<div class="content-inner">
                                	<h3><a href="services-single.html">Mobile Gaming Recuirement</a></h3>
                                    <div class="title">14th April, 2016</div>
                                    <div class="text">Fortune has announced the launch of a new digital recruitment programme that will use online gaming and digital analysis.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Press Block-->
            	<div class="press-block">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="image-column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/resource/press-1.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                            	<div class="content-inner">
                                	<h3><a href="services-single.html">ConsultHub for Business Growth</a></h3>
                                    <div class="title">21st August, 2016</div>
                                    <div class="text">Idea of denouncing pleasure and praising pain was born and will give you a complete account of the system, and expound.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Press Block-->
            	<div class="press-block">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="image-column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/resource/press-2.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                            	<div class="content-inner">
                                	<h3><a href="services-single.html">Mobile Gaming Recuirement</a></h3>
                                    <div class="title">21st August, 2016</div>
                                    <div class="text">Fortune has announced the launch of a new digital recruitment programme that will use online gaming and digital analysis.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--End Press Section-->
@endsection
