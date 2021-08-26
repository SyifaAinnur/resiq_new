<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url(); ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/admin/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url(); ?>/assets/admin/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/admin/css/responsive.css">
</head>
<body onload="startTime()">
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <!-- Page Sidebar Ends-->
            <?= $this->include('admin/use/layout/navbar') ?>

            <!-- Ambil data konten -->
                <!-- Container-fluid Ends-->
            <?= $this->renderSection('content') ?>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2020 © Cuba theme by pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url(); ?>/assets/admin/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url(); ?>/assets/admin/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url(); ?>/assets/admin/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?= base_url(); ?>/assets/admin/js/scrollbar/simplebar.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url(); ?>/assets/admin/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?= base_url(); ?>/assets/admin/js/sidebar-menu.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/chart/chartist/chartist.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/chart/knob/knob.min.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/chart/knob/knob-chart.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/dashboard/default.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/notify/index.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/typeahead/handlebars.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/typeahead/typeahead.custom.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/typeahead-search/handlebars.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/tooltip-init.js"></script>
    <script src="<?= base_url(); ?>//assets/admin/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url(); ?>/assets/admin/js/script.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>
</html>
