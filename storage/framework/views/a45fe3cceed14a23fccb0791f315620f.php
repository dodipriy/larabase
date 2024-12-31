<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
      data-assets-path="<?php echo e(asset('vuexy/assets/')); ?>" data-template="vertical-menu-template">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="ws_url" content="<?php echo e(env('WS_URL')); ?>">
    <meta name="user_id" content="<?php echo e(Auth::id()); ?>">

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('vuexy/assets/img/favicon/favicon.ico')); ?>" />
    <!-- Title -->
    <title> <?php echo e(env('APP_NAME')); ?> <?php if (! empty(trim($__env->yieldContent('title')))): ?> - <?php echo $__env->yieldContent('title'); ?> <?php else: ?> - <?php endif; ?> </title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/fonts/fontawesome.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/fonts/tabler-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/fonts/flag-icons.css')); ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/rtl/core.css')); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/rtl/theme-default.css')); ?>" class="template-customizer-theme-css" />
    <!-- <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/rtl/core.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/rtl/theme-default.css')); ?>" /> -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/css/demo.css')); ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/node-waves/node-waves.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/flatpickr/flatpickr.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/select2/select2.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/bootstrap-select/bootstrap-select.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/animate-css/animate.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/sweetalert2/sweetalert2.css')); ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo e(asset('vuexy/assets/vendor/js/helpers.js')); ?>">
    </script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo e(asset('vuexy/assets/js/config.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tables/css/datatable/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tables/css/datatable/responsive.bootstrap4.min.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('lib/charts/css/chart-apex.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/charts/css/apexcharts.css')); ?>">


    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('lib/bootstrap-fileinput/css/fileinput.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('lib/font-awesome/css/font-awesome.min.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('lib/select2/css/select2.min.css')); ?>">

    <?php echo $__env->yieldContent('stylesheet'); ?>

</head>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <?php echo $__env->make('admin.templates.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Layout container -->
        <div class="layout-page">
            <?php echo $__env->make('admin.templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- ========== MAIN CONTENT ========== -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <?php echo $__env->yieldContent('breadcumbs'); ?>

                    <!-- <div class="card"> -->
                    <!-- <h5 class="card-header">Ajax Sourced Server-side</h5> -->

                    <?php echo $__env->yieldContent('content'); ?>
                    <!-- </div> -->
                </div>
                <?php echo $__env->make('admin.templates.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->


<script src="<?php echo e(asset('vuexy/assets/vendor/libs/hammer/hammer.js')); ?>"></script>

<!-- endbuild -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/popper/popper.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/node-waves/node-waves.js')); ?>"></script>

<script src="<?php echo e(asset('vuexy/assets/vendor/libs/hammer/hammer.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/i18n/i18n.js')); ?>"></script>


<script src="<?php echo e(asset('vuexy/assets/vendor/js/menu.js')); ?>"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/select2/select2.js')); ?>"></script>

<script src="<?php echo e(asset('vuexy/assets/vendor/libs/bootstrap-select/bootstrap-select.js')); ?>"></script>

<script src="<?php echo e(asset('vuexy/assets/vendor/libs/bloodhound/bloodhound.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/swiper/swiper.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/sweetalert2/sweetalert2.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/js/extended-ui-sweetalert2.js')); ?>"></script>
<!-- Flat Picker -->
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/moment/moment.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/flatpickr/flatpickr.js')); ?>"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('vuexy/assets/js/main.js')); ?>"></script>
<!-- Page JS -->
<script src="<?php echo e(asset('vuexy/assets/js/dashboards-analytics.js')); ?>"></script>

<!-- Page JS -->
<script src="<?php echo e(asset('vuexy/assets/js/tables-datatables-advanced.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/js/forms-selects.js')); ?>"></script>



<!-- jquery-validation Js -->

<script src="<?php echo e(asset('lib/jquery-validation/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/form/form-validation.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('lib/sweetalert2/sweetalert2.js')); ?>"></script> -->

<!-- JS Front -->
<script src="<?php echo e(asset('tables/js/datatable/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('tables/js/datatable/datatables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('tables/js/datatable/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('tables/js/datatable/responsive.bootstrap4.js')); ?>"></script>
<script src="<?php echo e(asset('js/core.js')); ?>"></script>

<script src="<?php echo e(asset('lib/select2/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('lib/select2/js/form-select2.js')); ?>"></script>

<script src="<?php echo e(asset('lib/bootstrap-fileinput/js/fileinput.js')); ?>"></script>
<script src="<?php echo e(asset('lib/ckeditor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('lib/fa-theme/theme.js')); ?>"></script>
<script src="<?php echo e(asset('lib/charts/js/chart-apex.js')); ?>"></script>
<script src="<?php echo e(asset('lib/charts/js/apexcharts.js')); ?>"></script>


<!-- <script src="<?php echo e(asset('lib/socket/vue.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/socket/socket.io.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/socket/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/socket/chat.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/socket/notif.js')); ?>"></script> -->



<?php echo $__env->yieldContent('script'); ?>
</body>

</html><?php /**PATH /home/dodi/Project/GITHUB/larabase/resources/views/admin/layouts/main.blade.php ENDPATH**/ ?>