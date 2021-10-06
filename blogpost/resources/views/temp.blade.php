<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Aidan Technologies Blog') }}</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Favicons -->
    <link href="img/aidantech_logo2.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">

                <h1><a href="/"><img src="{{ asset('img/aidantech.png') }}" width="70%"></a></h1>
                @include('layouts.navigation')
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href='/index'>
                        {{ config('app.name', 'Aidan Technologies Blog') }}
                    </a>

                </div>

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
                <h1>World-Class Digital Agency Based In Malaysia</h1>
                <h2>We are in the business of digital solutions.</h2>
                <a href="{{ route('login') }}" class="btn-get-started scrollto">Create A Post</a>
                <img src="img/hero-img.png" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
            </div>

        </section><!-- End Hero -->
    </div>
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">


                <div class="content d-flex align-items-stretch text-justify" data-aos="fade-right">
                    <div class="content">
                        <strong>
                            <h2>About us</h2>
                        </strong>
                        <h4>
                            Aidan Technologies is a world-class digital agency based in Kuala Lumpur, Malaysia, that
                            knows about the challenges the digital revolution poses for your business or organization.We
                            work together with you to turn these challenges into opportunities and develop cutting-edge
                            digital solutions that are tailored to you.We began as a small digital firm, and that
                            passion for design continues to define us today.We believe the best interactive experiences
                            come from the sweet harmony of smart design thinking and innovative use of technology. Our
                            work has proved that correct, time and again.
                            Aidan Technologies is subsidiary of <b>Aidan Group of Companies.</b>
                        </h4>
                    </div>
                </div>
                <!-- End .content-->
            </div>
            </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <h5>Aidan Technologies is an award-winning agency that offers cutting-edge digital solutions.</h5>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="img/system_application.png" class="img-fluid" alt="" width="70%">
                    </div>
                    <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
                        <br><br>
                        <h2>System & Application Development</h2>
                        <h5>
                            We develop custom-tailored systems and applications that are smart and scalable using the
                            right technologies.
                        </h5>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="img/website_potal.png" class="img-fluid" alt="" width="70%">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <br><br>
                        <h2>Website & Portal Development</h2>
                        <h5>
                            Our team use pixels and codes to create beautiful things. We design and develop
                            award-winning portals & websites, using the latest technologies, and follow the best web
                            development standards.
                        </h5>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right">
                        <img src="img/analytics_business.png" class="img-fluid" alt="" width="70%">
                    </div>
                    <div class="col-md-7 pt-5" data-aos="fade-left">
                        <br><br>
                        <h2>Analytics & Business Intelligence</h2>
                        <h5>
                            Our team turns ideas into reality. We plan, design and develop your app to suit your needs
                            and recommend the right platforms and solutions for your audience.
                        </h5>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="img/hardware_software.png" class="img-fluid" alt="" width="70%">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <br><br>
                        <h2>Hardware & Software Supplies</h2>
                        <h5>
                            SEO must be optimized to increase the quantity and quality of traffic to agency’s website
                            through organic search engine results.
                        </h5>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5" data-aos="fade-right">
                        <img src="img/mobile_app.png" class="img-fluid" alt="" width="70%">
                    </div>
                    <div class="col-md-7 pt-5" data-aos="fade-left">
                        <br><br>
                        <h2>Mobile App Development</h2>
                        <h5>
                            Our app developers build native and hybrid mobile applications on IOS, Android, and Windows,
                            for a variety of mobile devices and tablets.
                        </h5>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                        <img src="img/security_assessment.png" class="img-fluid" alt="" width="70%">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                        <br><br>
                        <h2>Security Assessment Services</h2>
                        <h5>
                            We provide information testing, initial test, reports & post-hardening test.
                        </h5>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Solutions</h2>
                    <h5>Aidan Technologies is an award-winning agency that offers cutting-edge digital solutions.</h5>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <img src="img/mySistem.jpg" class="img-fluid" alt="" width="70%">
                            <br><br>
                            <h3><a href="http://mysistem.my/">MySistem</a></h3>
                            <h5>A powerful software product suite consisting of several ready-made off-the-shelf
                                web-based applications, ready to be used by organizations, either as is or with
                                customizations.</h5>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <img src="img/borang.jpg" class="img-fluid" alt="" width="70%">
                            <br><br>
                            <h3><a href="https://borang.co/">Borang</a></h3>
                            <h5>An online software to help governments convert paper forms and documents into web forms
                                and transforms their processes into efficient online services.</h5>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Office Address</h3>
                                <h5>Aidan Technologies Sdn Bhd. <br>100-1, Jalan 2/23A, Taman Danau Kota, 53300 Setapak,
                                    Kuala Lumpur, Malaysia
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <h5>+6013-294.6282 (Ali Abid)</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <h5>sales@aidan.com.my</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mt-4 h-80">
                                <i class="bi bi-globe"></i>
                                <h3>Website</h3>
                                <h5><a href>https://aidantech.com/</a></h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Aidan Technologies</h3>
                        <p>
                            Aidan Technologies Sdn Bhd. <br>100-1, Jalan 2/23A, Taman Danau Kota, <br>53300 Setapak,
                            Kuala Lumpur, Malaysia<br>
                            <strong>Phone:</strong> +6013-294.6282 (Ali Abid)<br>
                            <strong>Email:</strong> sales@aidan.com.my<br>
                            <strong>Website:</strong> <a href>https://aidantech.com/</a><br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">About</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Solutions</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/posts">Blog</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Website & Portal Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">System & Application Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Mobile Application Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Security Assessment</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Analytics & Business Intelligence</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Hardware & Software Supplies</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Fadzrina Hisham</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
