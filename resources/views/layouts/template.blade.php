<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('judul') - Reservasi Bengkel Bubut</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/tema/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/tema/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="tema/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tema/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="tema/vendor/aos/aos.css" rel="stylesheet">
    <link href="tema/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="tema/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="tema/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="ikhlasulamalawaludin@gmail.com">ikhlasulamalawaludin@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 895423001065</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="tema/img/logo.png" alt=""> -->

            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li><a href="{{ url('login') }}">Login</a></li> --}}
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat Datang!<span> Bengkel Bubut Iskandar Jaya Logam</span></h2>
                    <p>Ayo, Lakukan Reservasi Layanan Bubut disini!</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <button class="btn-get-started" onclick="window.location.href = '{{ url('login') }}'">Login</button>
                        {{-- <a href="" class="btn-get-started" style="margin-left: 10px;" data-bs-toggle="modal"
                            data-bs-target="#reservasiModal">Reservasi</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="tema/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="tema/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="tema/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">


            </div>
        </section><!-- End Stats Counter Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                    </a>
                    <p>Bengkel Bubut Iskandar Jaya Logam adalah penyedia jasa layanan bubut terpercaya</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        {{-- <li><a href="{{ url('login') }}">Login</a></li> --}}
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Jasa Las</a></li>
                        <li><a href="#">Jasa Bubut</a></li>
                        <li><a href="#">Jasa Tune Up</a></li>
                        <li><a href="#">Jasa Bore Up</a></li>
                        <li><a href="#">Jasa Balance Kruk As</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Jalan Raya Singkil<br>
                        Adiwerna<br>
                        Kabupaten Tegal<br><br>
                        <strong>Phone:</strong>+62 895423001065<br>
                        <strong>Email:</strong>ikhlasulamalawaludin@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Ikhlasul Amal</span></strong>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="tema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="tema/vendor/aos/aos.js"></script>
    <script src="tema/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="tema/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="tema/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="tema/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="tema/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="tema/js/main.js"></script>

</body>

</html>
