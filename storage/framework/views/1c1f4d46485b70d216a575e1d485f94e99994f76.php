<div class="wrapper wrapper-full-page ">
    <?php echo $__env->make('layouts.navbars.navs.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="full-page register-page section-image" filter-color="black" data-image="<?php echo e($backgroundImage); ?>">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /Users/ahmedpc/Desktop/fyp/shiping/resources/views/layouts/page_template/guest.blade.php ENDPATH**/ ?>