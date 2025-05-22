<footer class="main-footer">
    <div class="contact-section" style="background-color: #0a2642; padding: 40px 0;">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Get in Touch Column -->
                <div class="contact-info-column col-md-4 col-sm-12 col-xs-12">
                    <h2 class="contact-title">Get in Touch</h2>
                    <ul class="contact-info">
                        <li>
                            <span class="icon fa fa-clock-o"></span>
                            <span class="text">Mon - Friday, 8am - 5pm</span>
                        </li>
                        <li>
                            <span class="icon fa fa-envelope"></span>
                            <span class="text">syllaglobaledservices24@gmail.com</span>
                        </li>
                        <li>
                            <span class="icon fa fa-phone"></span>
                            <span class="text">+60 17 302 5968</span>
                        </li>
                        <li>
                            <span class="icon fa fa-map-marker"></span>
                            <span class="text">NEU Suites, 55000 KL, MY</span>
                        </li>
                    </ul>
                    <div class="social-links-footer" style="margin-top: 20px;">
                        <h4 style="color: #fff; margin-bottom: 10px;">Follow Us</h4>
                        <a href="http://facebook.com/share/pu55xiG3sM7mTgHG/?mibextid=LQQJ4d" style="color: #fff; margin-right: 15px; font-size: 18px;">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                        <a href="http://instagram.com/syllaglobaledservices?igsh=MTA5dzk4bWp6bmZvNA%3D%3D" style="color: #fff; margin-right: 15px; font-size: 18px;">
                            <span class="fa fa-instagram"></span>
                        </a>
                        <a href="http://tiktok.com/@syllaglobaledservices24?_t=8n8VlfhakRW&_r=1" style="color: #fff; font-size: 18px;">
                            <span class="fa fa-tiktok"></span>
                        </a>
                    </div>
                    <div class="footer-logo-small" style="margin-top: 20px;">
                        <img src="{{ asset('images/logo_footer.png') }}" alt="Logo" style="max-width: 200px;">
                    </div>
                </div>

                <!-- Contact Form Column -->
                <div class="contact-form-column col-md-8 col-sm-12 col-xs-12">
                    <h2 class="contact-title">Have an inquiry?</h2>
                    
                    <!-- Success/Error Messages -->
                    @if(session('success'))
                        <div class="alert alert-success" style="color: #fff; background-color: #28a745; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" style="color: #fff; background-color: #dc3545; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger" style="color: #fff; background-color: #dc3545; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
                            <ul style="margin: 0; padding-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="contact-form">
                        <form id="contact-form" method="POST" action="{{ route('enquiry.store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone No." value="{{ old('phone') }}" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" rows="4" required>{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">Copyright &copy; SyllaGlobalEd Services | All Right Reserved</div>
                </div>
                <div class="column col-md-6 col-sm-6 col-xs-12">
                    <ul class="footer-nav">
                        <li style="color: black;">Engineered by THIANA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>