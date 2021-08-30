
<!-- ================================
         END HEADER AREA
================================= -->
<?= $this->extend('landing_page/layout/MainLayout') ?>

<?= $this->section('content') ?>
<!-- ================================
    START BREADCRUMB TOP BAR
================================= -->
<section class="breadcrumb-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-list breadcrumb-top-list">
                    <ul class="list-items bg-transparent radius-none p-0">
                        <li><a href="index.php">Home</a></li>
                        <li>questioner</li>
                        <li>Pemulung(IPI)</li>
                    </ul>
                </div><!-- end breadcrumb-list -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-top-bar -->
<!-- ================================
    END BREADCRUMB TOP BAR
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-2 py-0">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-btn">
                        <a class="d-none"
                             data-fancybox="gallery"
                             data-src="assets/assets-landing/images/destination-img2.jpg"
                             data-caption="Showing image - 02"
                             data-speed="700"></a>
                    </div><!-- end breadcrumb-btn -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START Data QUIS DETAIL AREA
================================= -->
<section class="tour-detail-area padding-bottom-90px">
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-left: 140px;">
                    <div class="sidebar single-content-sidebar mb-0" >
                        <div class="sidebar-widget single-content-widget" style="width: 900px">
                            <div class="sidebar-widget-item">
                                <div class="sidebar-book-title-wrap mb-3">
                                    <h2 style="text-align: center">QUESTIONER</h2>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="input-box">
                                            <label class="label-text"><b>Nama</b></label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="text" name="text" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text"><b>Usia</b></label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input class="form-control" type="usia" name="usia" placeholder="Usia">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text"><b>Alamat</b></label>
                                                <div class="form-group">
                                                    <span class="la la-pencil form-icon"></span>
                                                    <textarea class="message-control form-control" name="alamat" placeholder="Alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text"><b>Pekerjaan</b></label>
                                                <div class="form-group">
                                                    <span class="la la-envelope-o form-icon"></span>
                                                    <input class="form-control" type="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label class="label-text"><b>Jenis Sampah</b></label>
                                                <form action="proses.php" method="get">
                                                    <p>Organik</p>
                                                    <input type='radio' name='jenis_sampah_anorganik' value='ya' /> Ya <input type='radio' name='jenis_sampah_anorganik' value='tidak' /> Tidak
                                                </form>       
                                                <form action="proses.php" method="get">
                                                    <p>An-Organik</p>
                                                    <input type='radio' name='jenis_sampah_anorganik' value='ya' /> Ya <input type='radio' name='jenis_sampah_anorganik' value='tidak' /> Tidak
                                                </form>
                                            </div><br><br>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar-widget-item">
                                    <div class="sidebar-book-title-wrap mb-3">
                                        <h2 style="text-align: center">PERTANYAAN</h2>
                                    </div>
                                </div>
                                <div class="contact-form-action">
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
                                            <label class="label-text"><b>4. Adakah ada proses pemilahan sampah yang Anda lakukan sebelum sampah rumah tangga dibuang ditempat sampah?</b></label>
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
                                            <label class="label-text"><b>7. Berapa jumlah pemulung yang bertugas mengambil / mengangkut sampah setiap harinya (atau pegawai yang anda miliki)?</b></label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <input class="form-control" type="text" name="text" placeholder=" ">
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>8. Berapa kali setiap minggu pemulung bertugas mengambil sampah mengambil sampah di tempat sampah? (setiap harikah?</b></label>
                                            <div class="form-group"> 
                                                <span class="la la-pencil form-icon"></span>   
                                                <input class="form-control" type="text" name="text" placeholder=" "><br>
                                            </div>
                                        </div>

                                        <div class="input-box">
                                            <label class="label-text"><b>9. Berapa biaya yang Anda bayarkan untuk harga setiap Kg sampah yang dikumpulkan pemulung?</b></label>
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
                            </div>
                            <!-- end sidebar-widget-item -->
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END Data QUIS DETAIL AREA
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
