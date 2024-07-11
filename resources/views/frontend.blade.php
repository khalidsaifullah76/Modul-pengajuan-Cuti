<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HexaTech </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/logo3.jpeg')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Hexatech</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Pengajuan Cuti</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li> <a  href="{{ route('login') }}">Login<br></a></li>
          <li> <a  href="{{ route('register') }}">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('frontend/assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Powerful Digital Solutions With HexaTech<span>.</span></h2>
            <p>Empowering Innovation</p>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">Keamanan Cyber</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-bullseye"></i>
              <h3><a href="">Konsultasi IT</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-fullscreen-exit"></i>
              <h3><a href=""> Website</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-card-list"></i>
              <h3><a href="">Aplikasi Mobile</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-gem"></i>
              <h3><a href="">Pengembangan Perangkat Lunak</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Tentang Kami</h3>
            <p>
              HexaTech adalah perusahaan teknologi informasi terdepan yang berfokus pada inovasi dan solusi digital. Kami menyediakan berbagai layanan IT yang dirancang untuk memenuhi kebutuhan bisnis modern dan membantu mereka bertransformasi secara digital.
            </p>
            <h5>Visi</h5>
            <p>
              Menjadi mitra teknologi terpercaya yang mendukung pertumbuhan dan keberhasilan bisnis melalui inovasi dan solusi IT yang canggih.
            </p>
            <h5>Misi</h5>
            
             <ul>
              <li>Memberikan solusi IT berkualitas tinggi yang disesuaikan dengan kebutuhan pelanggan.</li>
              <li>Mendorong inovasi melalui pengembangan teknologi terbaru.</li>
              <li>Menyediakan layanan pelanggan yang unggul dan responsif.</li>
              <li>Membangun kemitraan jangka panjang yang saling menguntungkan.</li>
             </ul>
            
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Layanan Kami</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Pengembangan Perangkat Lunak</h3>
              </a>
              <p>Membuat aplikasi kustom yang sesuai dengan kebutuhan bisnis Anda.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Keamanan Cyber</h3>
              </a>
              <p>Melindungi data dan sistem Anda dari ancaman siber.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Manajemen Infrastruktur IT</h3>
              </a>
              <p>Menyediakan solusi manajemen dan pemeliharaan infrastruktur IT.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Konsultasi IT</h3>
              </a>
              <p>Memberikan saran ahli untuk transformasi digital dan strategi teknologi.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3> Website</h3>
              </a>
              <p>Merancang dan mengembangkan website yang responsif dan user-friendly.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3> Aplikasi Mobile</h3>
              </a>
              <p>Merancang dan mengembangkan aplikasi mobile yang responsif dan user-friendly.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="{{asset('frontend/assets/img/cta-bg.jpg')}}" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>"Empower Your Business - Get in Touch with HexaTech!"</h3>
              <a class="cta-btn" href="#">Get Started</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengajuan Cuti</h2>
        <p>Form Pengajuan cuti</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Jumlah Cuti" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Tanggal Awal" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Tanggal Akhir" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Keterangan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">HexaTech</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan</p>
              <p class="mt-3"><strong>Hotline:</strong> <span>021-786-3191</span></p>
              <p><strong>Email:</strong> <span>HexaTech@example.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>