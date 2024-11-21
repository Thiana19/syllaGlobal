@extends('layout.app')
@section('main')
     @include('layout.hero')
    <section class="featured-section">
        <div class="auto-container">
            <div class="services-outer">
                <div class="clearfix">

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-teacher"></span>
                            </div>
                            <h3>University Applications</h3>
                            <div class="text">We guide you through the entire application, ensuring you present the strongest possible case to institutions.</div>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-teacher"></span>
                                    </div>
                                    <div class="text">We guide you through the entire application, ensuring you present the strongest possible case to prospective institutions.</div>
                                    {{-- <a class="read-more" href="services-single.html">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-file"></span>
                            </div>
                            <h3>Visa Procedures</h3>
                            <div class="text">Our expert team will guide you through the visa application process, ensuring a smooth and efficient experience.</div>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-phone-call-1"></span>
                                    </div>
                                    <div class="text">Our expert team will guide you through the visa application process, ensuring a smooth and efficient experience.</div>
                                    {{-- <a class="read-more" href="services-single.html">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-transport"></span>
                            </div>
                            <h3>Airport Pickups</h3>
                            <div class="text">We provide a warm welcome to your new country, ensuring a comfortable arrival with our airport pickup services.</div>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-honeycomb"></span>
                                    </div>
                                    <div class="text">We provide a warm welcome to your new country, ensuring a comfortable arrival with our airport pickup services.</div>
                                    {{-- <a class="read-more" href="services-single.html">Read More</a> --}}
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
            <div class="row clearfix">
                <!--Column-->
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <h2>About SyllaEdGlobal</h2>
                    <div class="text">
                        <p>SyllaGlobalEd Services is a premier education consulting firm dedicated to facilitating the dreams of students aspiring to pursue higher education abroad. Established with a commitment to providing comprehensive support, we specialize in guiding students through every step of the process – from university applications to visa procedures, airport pickups, and accommodation arrangements. </p>
                        {{-- <p>We strive to build a relationship of trust with every client, for the long-term. 70% of our work is for clients that we have served for over 10 years. We are focused on developing education, publications, events, research and analysis Success field through market education.</p> --}}
                    </div>
                    <a href="about.html" class="theme-btn btn-style-three">READ MORE</a>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('images/Brandmark.png') }}" alt="" />
                                    <div class="image-content">
                                        <div class="content">
                                            <div class="text">Transform Your Future with SyllaGlobalEd Services. The Quality and Uniqueness of its Services and the wide variety of Choices...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Section Content-->
                            <div class="section-content col-md-6 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <h2>Why Choose SyllaEdGlobal ?</h2>
                                    <div class="text">We provide a complete range of services to support clients throughout the entire process, from their application to their arrival in Malaysia for studies.</div>
                                    <ul class="list-style-one">
                                        <li>Personalized Approach</li>
                                        <li>Experienced Team</li>
                                        <li>Global Network</li>
                                        <li>Add more</li>
                                    </ul>
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
            <!--Sec Title-->
            <div class="sec-title light centered">
                <h2>Our Achievements</h2>
            </div>

            <div class="row clearfix">
                <!--Column-->
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon-box"><span class="icon flaticon-business-3"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="2500" data-stop="50">0</span>
                            </div>
                            <div class="counter-title">Number of Applications</div>
                        </div>
                    </div>
                </div>

                <!--Column-->
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

                <!--Column-->
                <div class="column count-box col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="inner">
                        <div class="content">
                            <div class="icon-box"><span class="icon flaticon-prize-badge-with-star-and-ribbon"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="2500" data-stop="3">0</span>
                            </div>
                            <div class="counter-title">Awards Winning</div>
                        </div>
                    </div>
                </div>

                <!--Column-->
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
    <section class="call-to-action">
        <div class="auto-container">
            <h2>Transform Your Future with SyllaGlobalEd Services. The Quality and Uniqueness of its Services and the wide variety of Choices...</h2>
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
                            <img src="{{ asset('images/articles/kl.jpg') }}" style="height: 278px" alt="" />
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
                            <img src="{{ asset('images/articles/stud.jpg') }}" style="height: 278px" alt="" />
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
    <section class="testimonial-section"
        style="
            background-image: url({{ asset('images/background/test_back.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            margin: 0;
            padding: 50px 0;"
    >
        <div class="auto-container">
            <div class="two-item-carousel owl-carousel owl-theme">

                <!--Testimonial block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('images/team/birame.jpg') }}" alt="" />
                                    <div class="quote-icon"><span class="icon flaticon-double-quotes"></span></div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-7 col-xs-12">
                                <h3>Birame Medoune Ndiaye</h3>
                                <div class="location">Currently studying English in EMS</div>
                                <div class="text" style="color: black">SyllaGlobalEd Services c'est choisir l'efficacité, la sûreté , l'honnêteté mais aussi et surtout choisir SyllaGlobalEd Services c'est entrée dans une famille ou chaque membre s'entraide et ce conseil. Je conseillerais donc SyllaGlobalEd Services et la Malaisie à quiconque cherche la perfection à court réduit.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('images/team/billo.jpg') }}" alt="" />
                                    <div class="quote-icon"><span class="icon flaticon-double-quotes"></span></div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-7 col-xs-12">
                                <h3>Diallo Mamadou Billo</h3>
                                <div class="location">Student in IIUM</div>
                                <div class="text" style="color: black">Before starting my application procedure, SyllaGlobalEd Services helped me to have a good selection of Universities, but also to have a good idea of what I wanted to be in the future.This gave me a firm foundation to build my decision on.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                <div class="image">
                                    <img src="{{ asset('images/team/naby.jpg') }}" alt="" />
                                    <div class="quote-icon"><span class="icon flaticon-double-quotes"></span></div>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-7 col-xs-12">
                                <h3>Fofana Naby</h3>
                                <div class="location">Student in IIUM</div>
                                <div class="text" style="color: black">I found the right course at the International Islamic University Malaysia through SyllaGlobalEd Services. Their guidance and detailed options for universities and courses made my search effortless. My advice: know what you want to study and let SyllaGlobalEd help you find the best options—they save time and simplify the process.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Testimonial Section-->

    <!--Info Section-->
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
    <!--End Info Section-->
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
    });
</script>
