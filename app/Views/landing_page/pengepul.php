
<!-- ================================
         END HEADER AREA
================================= -->
<?= $this->extend('landing_page/layout/MainLayout') ?>

<?= $this->section('content') ?>
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START BOOKING AREA
================================= -->
<section class="booking-area padding-top-100px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                    <h2 style="text-align: center">DATA DIRI</h2>
                    </div><!-- form-title-wrap -->
                    <div class="form-content ">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <div class="input-box">
                                        <label class="label-text"><b>Nama</b></label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="text" placeholder="Nama">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="">
                                    <div class="input-box">
                                        <label class="label-text"><b>Usia</b></label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="Usia">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="input-box">
                                    <div class="input-box">
                                        <label class="label-text"><b>Pekerjaan</b></label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="text" name="text" placeholder="Pekerjaan">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="input-box">
                                    <div class="input-box">
                                        <label class="label-text"><b>Alamat</b></label>
                                        <div class="form-group">
                                            <span class="la la-map-marked form-icon"></span>
                                            <input class="form-control" type="text" name="text" placeholder="Alamat">
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="input-box">
                                    <div class="input-box">
                                        <label class="label-text"><b>Jenis Sampah</b></label>
                                    <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="select-country">Pilih Sampah</option>
                                                    <option value="Afghanistan">Organik</option>
                                                    <option value="Åland Islands">An Organik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="input-box">
                                    <div class="input-box">
                                        <label class="label-text"><b>Sudah Familiar Menggunakan Smartphone?</b></label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="country-code">Pilih Jawaban</option>
                                                    <option value="1">Sudah</option>
                                                    <option value="2">Belum</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 --><br>
                                <div class="form-title-wrap">
                                    <h2 style="text-align: center">PERTANYAAN</h2>
                                </div><!-- form-title-wrap -->
                                <div class="form-content ">
                                    <form method="post">
                                        <div class="input-box">
                                            <label class="label-text"><b>1. Jenis sampah yang dihasilkan / dikumpulkan (organik / anorganik)?</b></label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1">Organik</option>
                                                        <option value="2">An Organik</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text"><b>2. Berapa kapasitas sampah organik yang dikumpulkan per hari untuk setiap jenis jenis sampah tersebut? (Kg)</b></label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <input class="form-control" type="text" name="text" placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text"><b>3. Berapa kapasitas sampah an-organik yang dikumpulkan per har untuk setiap jenis jenis sampah tersebui? (Kg)</b></label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <input class="form-control" type="text" name="text" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>4. Adakah ada proses pemilahan sampah yang Anda lakukan ?</b></label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1">Ada</option>
                                                        <option value="2">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>5. Jika ada proses pemilahan, sampah apa saja yang Anda pilah?</b></label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>    
                                                <input class="form-control" type="text" name="text" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>6. Apakah tempat (area kerja) yang Anda miliki cukup menampung sampah yang Anda kumpulkan setiap harinya?</b></label>
                                            <div class="form-group">
                                                <div class="select-contain w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="1">Ya, Cukup</option>
                                                        <option value="2">Tidak, Tidak Cukup</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>7. Berapa jumlah nasabah yang menyerahkan sampahsetiap harinya (atau nasabah yang anda miliki)?</b></label>
                                            <div class="form-group"> 
                                                <span class="la la-pencil form-icon"></span>   
                                                <input class="form-control" type="text" name="text" placeholder=" "><br>
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>8. Berapa kali setiap harinya rata-rata nasabah yang menyetorkan sampah ke bank sampah Anda? (setiap harikah?</b></label>
                                            <div class="form-group"> 
                                                <span class="la la-pencil form-icon"></span>   
                                                <input class="form-control" type="text" name="text" placeholder=" "><br>
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>9. Berapa biaya yang Anda bayarkan untuk harga setiap Kg sampah yang dikumpulkan nasabah?</b></label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>    
                                                <input class="form-control" type="text" name="text" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>10. Sepengetahuan Anda, jelaskan Alur pembuangan sampah yang ada di wilayah Anda!</b></label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <textarea class="message-control form-control" name="text" placeholder=" "></textarea>
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>11. Berapakah jarak tempat penampungan sampah Anda dengan TPA (tempat Pembuangan Sampah Akhir) dalam satuan meter?</b></label>
                                            <div class="form-group">    
                                                <span class="la la-pencil form-icon"></span>
                                                <input class="form-control" type="text" name="text" placeholder=" ">
                                            </div>
                                        </div>

                                            <button type="submit" class="theme-btn">Kirim</button>
                                    </form>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div>
                </div><!-- end form-box -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar-widget single-content-widget">
                    <h3 class="title stroke-shape">Organized by</h3>
                    <div class="author-content">
                        <div class="d-flex">
                            <div class="author-img">
                                <img src="assets/images/logo-resiq.png" alt="">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title"><a href="#">Resiq.id</a></h4>
                                <span class="author__meta">Since 2021</span>

                            </div>
                        </div>
                    </div>
                </div><!-- end sidebar-widget -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end booking-area -->
<!-- ================================
    END BOOKING AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
       START FOOTER AREA
================================= -->

<!-- ================================
       END FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="replayPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLongTitle3">Replay to review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <div class="form-group mb-0">
                                    <i class="la la-pencil form-icon"></i>
                                    <textarea class="message-control form-control" name="message" placeholder="Write message here..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
                <div class="modal-footer border-top-0 pt-0">
                    <button type="button" class="btn font-weight-bold font-size-15 color-text-2 mr-2" data-dismiss="modal">Cancel</button>
                    <button type="button" class="theme-btn theme-btn-small">Replay</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="sharePopupForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLongTitle4">Share this tour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="copy-to-clipboard-wrap">
                        <div class="copy-to-clipboard">
                            <div class="contact-form-action d-flex align-items-center">
                                <span class="text-success-message">Copied!</span>
                                <input type="text" class="form-control copy-input" value="https://www.tripstar.com/share/101WxMB0oac1hVQQ==/">
                                <div class="btn-box">
                                    <button class="theme-btn theme-btn-light copy-text">Copy</button>
                                </div>
                            </div>
                        </div><!-- end copy-to-clipboard -->
                        <ul class="social-profile text-center">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->
<?= $this->endSection() ?>
