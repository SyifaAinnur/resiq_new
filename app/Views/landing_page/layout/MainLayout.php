<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 11:18:47 GMT -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resiq.id</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>/assets/assets-landing/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/line-awesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/animated-headline.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/assets-landing/css/style.css">
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>

    <?= $this->include('landing_page/layout/navbar') ?>

<!-- Ambil data konten -->
    <!-- Container-fluid Ends-->
    <?= $this->renderSection('content') ?>

    <section class="footer-area section-bg padding-top-100px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.php" class="foot__logo"><h1>Resiq.id</h1></a>
                        </div><!-- end logo -->
                        <p class="footer__desc">Produk hasil karya mahasiswa Fakultas Teknik Universitas Dian Nuswantoro</p>
                        <ul class="list-items pt-3">
                            <li> Jl. Sadewa 2 No.8, Pendrikan Kidul, <br>Kec. Semarang Tengah, Kota Semarang, Jawa Tengah. 50131</li>
                            <li>085xxx xxx xxx</li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Tentang Kami</h4>
                        <ul class="list-items list--items">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Bahan Baku Plastik</a></li>
                            <li><a href="index.php">Produk Luaran</a></li>
                            <li><a href="index.php">Environment Education</a></li>
                            <li><a href="index.php">Quistioner</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Produk</h4>
                        <ul class="list-items list--items">
                            <li><a href="#">Paving Blok</a></li>
                            <li><a href="#">Drum Dryer</a></li>
                            <li><a href="#">Kerajinan</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Subscribe now</h4>
                        <p class="footer__desc pb-3">Subscribe for latest updates & promotions</p>
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                        <button class="theme-btn theme-btn-small submit-btn" type="submit">Go</button>
                                        <span class="font-size-14 pt-1"><i class="la la-lock mr-1"></i>Your information is safe with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Resiq.id 2021
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5" style="margin-top: 20px;">
                    <div class="footer-social-box text-right">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>                            <li><a href="#"><i class="lab la-youtube"></i></a></li>
                        </ul>
                    </div>      
                </div><!-- end col-lg-4 -->
                <!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer-area -->



    <!-- Template JS Files -->
    <script src="<?= base_url(); ?>/assets/assets-landing/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/jquery-ui.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/daterangepicker.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/jquery.countTo.min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/animated-headline.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/jquery.ripples-min.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/quantity-input.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/copy-text-script.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/navbar-sticky.js"></script>
    <script src="<?= base_url(); ?>/assets/assets-landing/js/main.js"></script>
</body>