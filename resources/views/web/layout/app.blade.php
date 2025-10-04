<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    @include('web.layout.partials.head')
</head>

<body>
    <div class="main-wrapper">
        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="header" class="section header-section header-section-06">
            @include('web.layout.partials.header-top')
            @include('web.layout.partials.header')
        </div>
        <!-- Header End -->
        @include('web.layout.partials.mobile-header')
        @yield('content')
        <!-- Cta Start -->
        <div class="section techwix-cta-section-02 section-padding-02">
            <div class="container">
                <!-- Cta Wrap Start -->
                <div class="cta-wrap" style="background-image: url(assets/images/bg/cta-bg.jpg);">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <!-- Cta Content Start -->
                            <div class="cta-content">
                                <div class="cta-icon">
                                    <img src="assets/images/cta-icon2.png" alt="">
                                </div>
                                <p>We’re Delivering the best customer Experience</p>
                            </div>
                            <!-- Cta Content End -->
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Cta Button Start -->
                            <div class="cta-btn">
                                <a class="btn btn-white" href="#">+91 9935791911</a>
                            </div>
                            <!-- Cta Button End -->
                        </div>
                    </div>
                </div>
                <!-- Cta Wrap End -->
            </div>
        </div>
        <!-- Cta End -->
        <!-- Footer Section Start -->
        <div class="section footer-section footer-section-03 footer-section-05" style="background-image: url(assets/images/bg/footer-bg.jpg);">

            <div class="container">
                <!-- Footer Widget Wrap Start -->
                <div class="footer-widget-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget-about">
                                <a class="footer-logo" href="{{url('/')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a>
                                <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent.</p>
                                <div class="footer-social">
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Links</h4>

                                <div class="widget-link">
                                    <ul class="link">
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">About Company</a></li>
                                        <li><a href="#">Payment Gatway</a></li>
                                        <li><a href="#">Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Our Services</h4>

                                <div class="widget-link">
                                    <ul class="link">
                                        <li><a href="#">Data Security</a></li>
                                        <li><a href="#">IT Managment</a></li>
                                        <li><a href="#">Outsourcing</a></li>
                                        <li><a href="#">Networking</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Contact Information</h4>

                                <div class="widget-info">
                                    <ul>
                                        <li>
                                            <div class="info-icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="info-text">
                                                <span><a href="#">+91 993 579 1911</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-icon">
                                                <i class="far fa-envelope-open"></i>
                                            </div>
                                            <div class="info-text">
                                                <span><a href="#">info@haritrust.org</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info-icon">
                                                <i class="flaticon-pin"></i>
                                            </div>
                                            <div class="info-text">
                                                <span>1107 skyline plaza 3 near lulu mall lucknow</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Wrap End -->
            </div>

            <!-- Footer Copyright Start -->
            <div class="footer-copyright-area">
                <div class="container">
                    <div class="footer-copyright-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <!-- Footer Copyright Text Start -->
                                <div class="copyright-text text-center">
                                    <p>© Copyrights 2022 haritrust All rights reserved. </p>
                                </div>
                                <!-- Footer Copyright Text End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>
        <!-- Footer Section End -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

    </div>

    <!-- JS
    ============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/back-to-top.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/appear.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>