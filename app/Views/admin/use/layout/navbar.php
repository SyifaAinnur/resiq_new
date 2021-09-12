
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="<?= base_url('admin/dashboard'); ?>"><h4>Resiq.id</h4></a></div>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <ul class="horizontal-menu">
                        <li class="level-menu outside"><a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Menu</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                <li><a href="#!" data-original-title="" title=""> <i data-feather="box"></i><span>Quisioner</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Quisioner</span></a></li>
                                        <li><a class="btn btn-primary" href="<?= base_url('admin/quisioner/add'); ?>"> <span>Create New</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#!" data-original-title="" title=""> <i data-feather="file-text"></i><span>Forms</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Produk</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Penjualan Produk</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Pembelian Sampah</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#!" data-original-title="" title=""> <i data-feather="server"></i><span>Table</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Produk</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Penjualan Produk</span></a></li>
                                        <li><a href="file-manager.html" data-original-title="" title=""> <span>Pembelian Sampah</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li><i data-feather="message-square"></i>
                                    <h6 class="f-18 mb-0">Message Box </h6>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3" src="<?= base_url(); ?>/assets/admin/images/user/1.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Erica Hughes</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3" src="<?= base_url(); ?>/assets/admin/images/user/2.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Kori Thomas</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">1 hr ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3" src="<?= base_url(); ?>/assets/admin/images/user/4.jpg" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="media-body"><span>Ain Chavez</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-danger">32 mins ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10" src="<?= base_url(); ?>/assets/admin/images/dashboard/profile.jpg" alt="">
                                <div class="media-body"><span>Resiq.id</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Profile </span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="#"><i data-feather="log-out"> </i><span>Log out</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="<?= base_url('admin/dashboard'); ?>"><h4>Resiq.id</h4></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="dashboard"><img class="img-fluid" src="<?= base_url(); ?>/assets/admin/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                        <p class="lan-2">Dashboards</p>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="<?= base_url('admin/dashboard'); ?>"><i data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-8">Applications</h6>
                                        <p class="lan-9">Ready to use Apps</p>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <label class="badge badge-danger">New</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>Quisioner</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="<?= base_url('admin/quisioner'); ?>">Quisioner</a></li>
                                        <li><a href="<?= base_url('admin/quisioner/add'); ?>">Create new</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <label class="badge badge-danger">New</label><a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>Jawaban</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="<?= base_url('admin/jawaban/rumah_tangga'); ?>">Rumah Tangga</a></li>
                                        <li><a href="<?= base_url('admin/jawaban/pengepul'); ?>">Pengepul</a></li>
                                        <li><a href="<?= base_url('admin/jawaban/pemulung'); ?>">Pemulung</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Forms & Table</h6>
                                        <p>Ready to use froms & tables </p>
                                    </div>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="file-text"></i><span>Forms</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="submenu-title" href="#">Produk<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        <li><a class="submenu-title" href="#">Penjualan Produk<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        <li><a class="submenu-title" href="#">Pembelian Sampah<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="server"></i><span>Tables</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="submenu-title" href="#">Produk<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        <li><a class="submenu-title" href="#">Penjualan Produk<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                        <li><a class="submenu-title" href="#">Pembelian Sampah<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
