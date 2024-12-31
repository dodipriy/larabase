<?php $__env->startSection('breadcumbs'); ?>
<?php
$breadrumbs = $menu['breadcrumbs'];
?>

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <?php if(!empty($breadrumbs->parent)): ?>
                    <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?php echo e(ucfirst($breadrumbs->parent->name)); ?> /&nbsp;</span></h4> -->
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo e(ucfirst($breadrumbs->parent->name)); ?></a></li>
                    <?php endif; ?>
                    <!-- <h4 class="fw-bold py-3 mb-4"><?php echo e(ucfirst($breadrumbs->name)); ?></h4> -->
                    <li class="breadcrumb-item active"><?php echo e(ucfirst($breadrumbs->name)); ?></li>

                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Datatables</li> -->
                </ol>
            </div>
            <h4 class="page-title"><?php echo e(ucfirst($breadrumbs->name)); ?></h4>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?><?php /**PATH /home/dodi/Project/GITHUB/larabase/resources/views/admin/templates/breadcrumbs.blade.php ENDPATH**/ ?>