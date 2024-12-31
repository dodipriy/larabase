<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
                </svg>

            </span>
            <span class="app-brand-text demo menu-text fw-bold">Admin</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <?php
        $activeMenu = $menu['breadcrumbs'];
    ?>
    <ul class="menu-inner py-1">
        <?php $__currentLoopData = $menu['parentMenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($value->is_showed): ?>


                <?php $__currentLoopData = $value->access; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($val->id == \Illuminate\Support\Facades\Auth::user()->group_id): ?>
                        <?php if($val->pivot->is_viewable == true): ?>

                            <?php if($value->childs->isEmpty()): ?>
                                <!-- Dashboards -->

                                <li class="menu-item <?php echo e(($value->name == $activeMenu->name ? 'active open' : '')); ?>">
                                    <a class="menu-link" href="<?php echo e(route("$value->route_name")); ?>">
                                        <i class="menu-icon tf-icons ti <?php echo e($value->icon); ?>"></i>
                                        <div data-i18n="<?php echo e($value->name); ?>"><?php echo e($value->name); ?></div>
                                    </a>
                                </li>

                            <?php else: ?>
                                <li class="menu-item <?php echo e((isset($activeMenu->parent) ? ($value->name == $activeMenu->parent->name ? 'active open' : ''):'')); ?>">
                                    <a href="#<?php echo e($value->code); ?>" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ti <?php echo e($value->icon); ?>"></i>
                                        <div data-i18n="<?php echo e($value->name); ?>"><?php echo e($value->name); ?></div>
                                    </a>

                                    <ul class="menu-sub">

                                        <?php $__currentLoopData = $value->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $sub->access; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $subaccess): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($subaccess->count() > 0): ?>
                                                    <?php if($subaccess->id == \Illuminate\Support\Facades\Auth::user()->group_id && $subaccess->pivot->is_viewable == true): ?>
                                                        <li class="menu-item <?php echo e($sub->name == $activeMenu->name ? 'active' : ''); ?>">
                                                            <a class="menu-link" href="<?php echo e(route("$sub->route_name")); ?>">
                                                                <i class="menu-icon tf-icons ti ti-menu-2"></i>
                                                                <div><?php echo e($sub->name); ?></div>
                                                            </a>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php endif; ?>

                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</aside><?php /**PATH /home/dodi/Project/larabasev2/resources/views/admin/templates/sidebar.blade.php ENDPATH**/ ?>