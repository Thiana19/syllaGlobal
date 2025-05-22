@extends('layout.app')
@section('main')
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <h1>Courses</h1>
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
                        <li>Courses</li>
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
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/political_science.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Political Science</h3>
                                <div class="text">The study of government systems and political activity.</div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/islamic_finance.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Islamic Finance</h3>
                                <div class="text">A finance system adhering to Islamic laws and principles.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/marketing.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Marketing</h3>
                                <div class="text">The process of promoting and selling products or services.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/law.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Law</h3>
                                <div class="text">The system of rules enforced by institutions to maintain order.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/medecine.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Medecine</h3>
                                <div class="text">The science of diagnosing, treating, and preventing disease.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Two-->
                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/sociology.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Sociology</h3>
                                <div class="text">The study of social behavior and society's structure.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/public_relations.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Public Relations</h3>
                                <div class="text">The practice of managing communication between organizations and the public.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/human_ressources.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Human Resources</h3>
                                <div class="text">The management of an organization's workforce and employee relations.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/history.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>History</h3>
                                <div class="text">The study of past events and their impact on the present.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/language_studies.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Language Studies</h3>
                                <div class="text">The exploration of languages, their structure, and usage.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/mathematics.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Mathematics</h3>
                                <div class="text">The study of numbers, quantities, and patterns.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/biotech.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Biotechnology</h3>
                                <div class="text">The application of biology and technology for innovation.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/interior_design.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Interior Design</h3>
                                <div class="text">The art of enhancing interior spaces to be aesthetically pleasing and functional.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/music.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Music</h3>
                                <div class="text">The art of arranging sounds to create harmony and express emotions.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/multimedia.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Multimedia</h3>
                                <div class="text">The integration of various media forms like text, images, audio, and video.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/nanotech.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Nanotechnology</h3>
                                <div class="text">The science of manipulating matter at the atomic level.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/nursing.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Nursing</h3>
                                <div class="text">The profession focused on caring for individuals' health and well-being.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/nutrition.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Nutrition</h3>
                                <div class="text">The science of food and its effects on health. It involves studying dietary needs and promoting healthy eating.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/pharmacy.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Pharmacy</h3>
                                <div class="text">The field that focuses on preparing and dispensing medications.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/physics.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Physics</h3>
                                <div class="text">The study of matter, energy, and their interactions.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/physiology.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Physiology</h3>
                                <div class="text">The branch of biology that studies how living organisms function.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/tourism.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Tourism</h3>
                                <div class="text">The business of providing travel and hospitality services.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-block-two col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="content">
                                <div class="icon-box">
                                    <img src="{{ asset('images/courses/veterinary.jpg') }}" alt="Business Transformation Icon" />
                                </div>
                                <h3>Veterinary</h3>
                                <div class="text">The medical field dedicated to animal health.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
