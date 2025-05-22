@extends('layout.app')
@section('main')
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <h1>Frequestly Asked Questions</h1>
        </div>
    </section>

    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="pull-left">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Students FAQ’s</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section style-two">
        <div class="auto-container">
            <h2>Customers FAQ’s</h2>

            <ul class="accordion-box style-five">
                <!-- Existing FAQ Blocks -->
                <!-- Add New FAQ Blocks Below -->

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>Where is Malaysia?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>Malaysia is located in Southeast Asia, neighboring Singapore, Thailand, and Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>What are the study choices & accreditations of the programmes?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>Malaysia offers a qualification that is well-recognised globally as Malaysia’s higher education institutions continue to make great strides in the international rankings. More than 20 higher education institutions are listed in the QS World University Rankings and Times Higher Education (THE) World University Rankings.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>What are the intake dates?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>Most Universities in Malaysia offer 3 enrolment dates per year – January/February/March; May/June/July & September/October/November. Students are advised to start their enrolment process at least 6 to 3 months prior to intake to avoid late registration.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>What is the first step?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p> Contact SyllaGlobalEd Services’ team for FREE consultation & application step-by-step guidance.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>How to obtain a student visa to study in Malaysia?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p> SyllaGlobalEd Services will apply for student visa on your behalf via Education Malaysia Global Services (EMGS). Student is required to submit all the documents & visa application payment to university. Process takes at least 4 to 6 weeks.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>Does the university assist students to secure internships?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>Yes, most of the universities have a wide range of industrial partners who are eager to take our students for internship programme – 12-16 weeks. These internships are part of the study programme and could be both paid & unpaid.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>Can I work during study?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>International students can work up to 20 hours per week during the semester and 40 hours during breaks, with immigration permission.</p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>Can students work in Malaysia upon completion of their studies?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>Students can apply for jobs in Malaysia and attend several interviews, our friendly lectureres and professors can support your application with recommendation letters, and if you are one of the talented students with demanded skills and good study achievements, that chance is there!
                                    However, your future employer must apply for a work permit with the authorities and guide you through the work permit regulations of Malaysia!
                                </p>
                            </div>
                        </div>
                    </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                    <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon flaticon-minus flaticon-line"></span></div>What is the cost of living in Malaysia?</div>
                    <div class="acc-content">
                        <div class="content">
                            <div class="text">
                                <p>
                                    Cost of living estimations:<br>
                                    - Rental: USD150-250/month (single room)<br>
                                    - Public Transport: max USD50/month (50% student discount)<br>
                                    - Meals: USD2-5 per meal<br>
                                    - Bread: USD1/loaf<br>
                                    - Rice: USD1-2/kg<br>
                                    - Eggs: USD1-2 for 10<br>
                                    - Whole chicken: USD2-4<br>
                                    - Milk: USD1.5/litre
                                </p>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </section>
@endsection
