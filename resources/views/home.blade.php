@extends('layout.app')
@section('main')
     @include('layout.hero')
    <section class="featured-section">
        <div class="auto-container">
            <div class="services-outer">
                <div class="clearfix">
                    
                    <!--Services Block-->
                    <div class="services-block col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-teacher"></span>
                            </div>
                            <h3>University Applications</h3>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-teacher"></span>
                                    </div>
                                    <div class="text">We guide you through the entire application, ensuring you present the strongest possible case to prospective institutions.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-file"></span>
                            </div>
                            <h3>Visa Procedures</h3>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-file"></span>
                                    </div>
                                    <div class="text">Our expert team will guide you through the visa application process, ensuring a smooth and efficient experience.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-transport"></span>
                            </div>
                            <h3>Airport Pickups</h3>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-transport"></span>
                                    </div>
                                    <div class="text">We provide a warm welcome to your new country, ensuring a comfortable arrival with our airport pickup services.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-home"></span>
                            </div>
                            <h3>Settling In</h3>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-home"></span>
                                    </div>
                                    <div class="text">We will ensure students get suitable accommodation according to their budget and preference.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Featured Section-->
    
    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <!-- Main About Header -->
            <div class="about-header text-center">
                <h2 class="section-title">ABOUT US</h2>
                <div class="about-description">
                    <p>SyllaGlobalEd Services is a premier education consulting firm dedicated to facilitating the dreams of students aspiring to pursue higher education abroad.</p>
                </div>
            </div>
            
            <!-- Mission, Vision, Core Values Section -->
            <div class="row clearfix mvv-section">
                <!-- Mission -->
                <div class="col-md-4 col-sm-12 col-xs-12 mvv-box">
                    <div class="mvv-inner">
                        <h3>MISSION</h3>
                        <p>To empower students in their journey to study abroad by providing personalized support, simplifying the process, and ensuring a seamless experience to achieve academic success and career goals.</p>
                    </div>
                </div>
                
                <!-- Vision -->
                <div class="col-md-4 col-sm-12 col-xs-12 mvv-box">
                    <div class="mvv-inner">
                        <h3>VISION</h3>
                        <p>To be the leading global education consultancy by empowering students to achieve their academic and career aspirations through personalized guidance and seamless support.</p>
                    </div>
                </div>
                
                <!-- Core Values -->
                <div class="col-md-4 col-sm-12 col-xs-12 mvv-box">
                    <div class="mvv-inner">
                        <h3>CORE VALUES</h3>
                        <p>Integrity, transparency, and client-centricity are the core values of our organization, guiding every decision we make. We are committed to fostering trust and building strong, lasting relationships with our clients.</p>
                    </div>
                </div>
            </div>
            
            <!-- Why Choose Us Section -->
            <div class="why-choose-section">
                <h2 class="section-title blue-bg text-center">WHY CHOOSE US?</h2>
                
                <div class="row clearfix choose-us-row">
                    <!-- Trustworthy Institution -->
                    <div class="col-md-4 col-sm-12 col-xs-12 choose-box">
                        <div class="choose-inner text-center">
                            <h4>Trustworthy Institution</h4>
                            <!-- Hover Content -->
                            <div class="hover-stats">
                                <div class="single-stat">
                                    <div class="stat-icon">
                                        <span class="icon flaticon-business-3"></span>
                                    </div>
                                    <div class="stat-number">50+</div>
                                    <div class="stat-label">Number of Applications</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider for desktop -->
                    <!-- <div class="vertical-divider first-divider hidden-sm hidden-xs"></div> -->
                    
                    <!-- Experienced Team -->
                    <div class="col-md-4 col-sm-12 col-xs-12 choose-box">
                        <div class="choose-inner text-center">
                            <h4>Experienced Team</h4>
                            <!-- Hover Content -->
                            <div class="hover-stats">
                                <div class="single-stat">
                                    <div class="stat-icon">
                                        <span class="icon flaticon-prize-badge-with-star-and-ribbon"></span>
                                    </div>
                                    <div class="stat-number">3</div>
                                    <div class="stat-label">Awards Won</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider for desktop -->
                    <!-- <div class="vertical-divider second-divider hidden-sm hidden-xs"></div> -->
                    
                    <!-- Client-Centricity -->
                    <div class="col-md-4 col-sm-12 col-xs-12 choose-box">
                        <div class="choose-inner text-center">
                            <h4>Client-Centricity</h4>
                            <!-- Hover Content -->
                            <div class="hover-stats">
                                <div class="single-stat">
                                    <div class="stat-icon">
                                        <span class="icon flaticon-smiling-emoticon-square-face"></span>
                                    </div>
                                    <div class="stat-number">100%</div>
                                    <div class="stat-label">Satisfied customers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Clients Section-->
    <section class="clients-section top-border">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Our Partners</h2>
        </div>
        
        <!-- Carousel Container with Navigation -->
        <div class="carousel-container" style="position: relative;">
            <!-- Left Arrow -->
            <div class="carousel-nav prev-btn" style="position: absolute; left: -50px; top: 50%; transform: translateY(-50%); z-index: 10; cursor: pointer; background: rgba(0,0,0,0.5); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: background 0.3s ease;" onmouseover="this.style.background='rgba(0,0,0,0.8)'" onmouseout="this.style.background='rgba(0,0,0,0.5)'">
                &#8249;
            </div>
            
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/iium-logo.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/segi-logo.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/geomatika.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/iukl.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/APU.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/upm.jpg" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/um.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/uniten.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/ucsi.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/taylors.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/utm.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/sunway.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/unikl.jpg" alt=""></a></figure></li>
            </ul>
            
            <!-- Right Arrow -->
            <div class="carousel-nav next-btn" style="position: absolute; right: -50px; top: 50%; transform: translateY(-50%); z-index: 10; cursor: pointer; background: rgba(0,0,0,0.5); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: background 0.3s ease;" onmouseover="this.style.background='rgba(0,0,0,0.8)'" onmouseout="this.style.background='rgba(0,0,0,0.5)'">
                &#8250;
            </div>
        </div>
    </div>
</section>
    <!--End Clients Section-->

    <!--Featured Section Two-->
    {{-- <section class="featured-section-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Featured Block Two-->
                <div class="featured-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-business-2"></span>
                        </div>
                        <h3><a href="services-single.html">Financial Services</a></h3>
                        <div class="text">We help financial institutions, from banking and insurance to wealth management and securities.</div>
                    </div>
                </div>

                <!--Featured Block Two-->
                <div class="featured-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-factory"></span>
                        </div>
                        <h3><a href="services-single.html">Industrial Goods & Services</a></h3>
                        <div class="text">Focused on helping our industrial clients, across all sectors to deliver sustainable results.</div>
                    </div>
                </div>

                <!--Featured Block Two-->
                <div class="featured-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-air-transport"></span>
                        </div>
                        <h3><a href="services-single.html">Airlines & Transportation</a></h3>
                        <div class="text">We help financial institutions, from banking and insurance to wealth management and securities </div>
                    </div>
                </div>

                <!--Featured Block Two-->
                <div class="featured-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-gas-pump"></span>
                        </div>
                        <h3><a href="services-single.html">Oil & Gas Companies</a></h3>
                        <div class="text">Statistic supports oil and gas companies' critical decisions across a broad operational functions.</div>
                    </div>
                </div>

                <!--Featured Block Two-->
                <div class="featured-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-cardiogram"></span>
                        </div>
                        <h3><a href="services-single.html">Healthcare Companies</a></h3>
                        <div class="text">Healthcare companies must identify patients, fuel innovation and reduce the cost and complexity.</div>
                    </div>
                </div>

                <!--Featured Block Two-->
                <div class="featured-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-global-networking"></span>
                        </div>
                        <h3><a href="services-single.html">Telecommunications</a></h3>
                        <div class="text">The challenge telecommunications companies is choosing where and how to participate in the markets.</div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--Featured Section Two-->

    <!--Counter Section-->
    <section class="counter-section" style="background-image:url({{ asset('images/background/2.jpg') }});">
        <div class="auto-container">
            <div class="sec-title light centered">
                <h2>Our Achievements</h2>
            </div>

            <div class="row clearfix">
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon-box"><span class="icon flaticon-business-3"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="2500" data-stop="100">0</span>
                            </div>
                            <div class="counter-title">Number of Applications</div>
                        </div>
                    </div>
                </div>

                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon-box"><span class="icon flaticon-graph-line-screen"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="2000" data-stop="5">0</span>
                            </div>
                            <div class="counter-title">Consultants</div>
                        </div>
                    </div>
                </div>

                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon-box"><span class="icon flaticon-prize-badge-with-star-and-ribbon"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="2500" data-stop="3">0</span>
                            </div>
                            <div class="counter-title">Awards Won</div>
                        </div>
                    </div>
                </div>

                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon-box"><span class="icon flaticon-smiling-emoticon-square-face"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="100">0</span>%
                            </div>
                            <div class="counter-title">Satisfied customers</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Counter Section-->

    <!--Call To Action-->
    <section class="call-to-action" style="padding: 30px 0; text-align: left !important;">
        <div style="width: 100% !important; max-width: none !important; margin: 0 !important; padding: 0 0 0 30px !important; text-align: left !important;">
            <h2 style="font-style: italic; font-size: 29px; text-align: left !important; width: 100% !important; margin: 0 !important; padding: 0 !important; display: block !important; white-space: nowrap !important;">Transform Your Future with SyllaGlobalEd Services. The Quality and Uniqueness of its Services and the wide variety of Choices.</h2>
        </div>
    </section>
    <!--End Call To Action-->

    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title clearfix">
                <div class="pull-left">
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="row clearfix">

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/articles/klcc.jpg') }}" alt="" />
                        </div>
                        <div class="lower-content">
                            <div class="post-date">November 11, 2024</div>
                            <h3><a href="blog-single.html">8 REASONS TO STUDY IN MALAYSIA</a></h3>
                            <div class="text">Malaysia offers a qualification that is well-recognised globally as Malaysia’s higher education institutions continue to make great strides in the international rankings. </div>
                            <a href="https://educationmalaysia.gov.my/why-malaysia/8-reasons-to-study-in-malaysia#:~:text=Welcome%20to%20Study%20in%20Malaysia,for%20international%20students%2C%20like%20you.&text=Malaysia%20offers%20a%20qualification%20that,(THE)%20World%20University%20Rankings" class="theme-btn btn-style-four">Read More</a>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/articles/students.png') }}" style="height: 278px" alt="" />
                        </div>
                        <div class="lower-content">
                            <div class="post-date">November 13, 2024</div>
                            <h3><a href="blog-single.html">Malaysia rolling out the welcome mat for international students</a></h3>
                            <div class="text">Malaysia is using novel techniques to attract prospective overseas applicants, redefining the positive student experience, delegates at ICEF's conference in Berlin were told.</div>
                            <a href="https://thepienews.com/malaysia-rolling-out-the-welcome-mat-for-international-students/#:~:text=Novie%20Tajuddin%2C%20Education%20Malaysia%20Global,an%20innovator%20in%20international%20education.&text=No%20comments%20found" class="theme-btn btn-style-four">Read More</a>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/articles/studs.png') }}" style="height: 278px" alt="" />
                        </div>
                        <div class="lower-content">
                            <div class="post-date">June 15, 2017</div>
                            <h3><a href="blog-single.html">Welcome International Students</a></h3>
                            <div class="text">he process of applying to enter Malaysia as an international student is simple. You will join more than 122,000 other international students from 160 countries (1-1-2016).</div>
                            <a href="https://studymalaysia.com/international/applying-entering-malaysia-to-study/becoming-an-international-student-in-malaysia#:~:text=You%20can%20also%20log%20onto%20Education%20Malaysia,approved%20Panel%20Clinics%2C%20and%20Personal%20Bond%20requirement" class="theme-btn btn-style-four">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End News Section-->

    <!--Testimonial Section-->
    <section class="testimonial-section-modern">
    <div class="auto-container">
        <!-- Section Title -->
        <div class="sec-title centered">
            <h2>TESTIMONIALS</h2>
            <p class="section-subtitle">Hear from our successful students who achieved their dreams with SyllaGlobalEd.</p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="testimonials-grid">
            <!--Testimonial Card 1-->
            <div class="testimonial-card">
                <div class="profile-section">
                    <div class="profile-image">
                        <img src="{{ asset('images/team/birame.jpg') }}" alt="Birame Medoune Ndiaye" />
                    </div>
                    <div class="quote-icon">❝❝</div>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">Choosing SyllaGlobalEd Services means choosing efficiency, safety, and honesty — but above all, joining a supportive family. I highly recommend SyllaGlobalEd Services and Malaysia to anyone seeking excellence at a lower cost.</p>
                    <div class="client-info">
                        <h4 class="client-name">Birame Medoune Ndiaye</h4>
                        <p class="client-position">Student in EMS</p>
                    </div>
                </div>
            </div>

            <!--Testimonial Card 2-->
            <div class="testimonial-card">
                <div class="profile-section">
                    <div class="profile-image">
                        <img src="{{ asset('images/team/billo.jpg') }}" alt="Diallo Mamadou Billo" />
                    </div>
                    <div class="quote-icon">❝❝</div>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">Before starting my application procedure, SyllaGlobalEd Services helped me to have a good selection of Universities, but also to have a good idea of what I wanted to be in the future. This gave me a firm foundation to build my decision on.</p>
                    <div class="client-info">
                        <h4 class="client-name">Diallo Mamadou Billo</h4>
                        <p class="client-position">Student in IIUM</p>
                    </div>
                </div>
            </div>

            <!--Testimonial Card 3-->
            <div class="testimonial-card">
                <div class="profile-section">
                    <div class="profile-image">
                        <img src="{{ asset('images/team/naby.jpg') }}" alt="Fofana Naby" />
                    </div>
                    <div class="quote-icon">❝❝</div>
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-text">I found the right course at the International Islamic University Malaysia through SyllaGlobalEd Services. Their guidance and detailed options for universities and courses made my search effortless. Let SyllaGlobalEd help you.</p>
                    <div class="client-info">
                        <h4 class="client-name">Fofana Naby</h4>
                        <p class="client-position">Student in IIUM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--End Testimonial Section-->
@endsection

<script>
    // Function to animate the counter and add "+" after the final value
    document.addEventListener("DOMContentLoaded", function () {
        const countText = document.querySelector('.count-text');
        const speed = parseInt(countText.getAttribute('data-speed'), 10);
        const stop = parseInt(countText.getAttribute('data-stop'), 10);
        let current = 0;

        // Counter animation
        const interval = setInterval(() => {
            if (current >= stop) {
                clearInterval(interval);
                countText.textContent = stop + "+"; // Add "+" after the number
            } else {
                current++;
                countText.textContent = current;
            }
        }, speed / stop);

        if (typeof $ !== 'undefined' && $.fn.owlCarousel) {
        var owl = $('.sponsors-carousel');
        
        // Initialize carousel if not already done
        if (!owl.hasClass('owl-loaded')) {
            owl.owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: { items: 2 },
                    600: { items: 3 },
                    1000: { items: 5 }
                }
            });
        }
        
        // Custom navigation
        $('.prev-btn').click(function() {
            owl.trigger('prev.owl.carousel');
        });
        
        $('.next-btn').click(function() {
            owl.trigger('next.owl.carousel');
        });
    }
    });
</script>
