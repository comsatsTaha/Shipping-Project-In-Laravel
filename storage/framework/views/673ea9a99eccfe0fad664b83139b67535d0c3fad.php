<?php if(!\Schema::hasTable((new \App\Models\User)->getTable())): ?>
    <div class="alert alert-danger fade show" role="alert">
        <?php echo e(__('You did not run the migrations and seeders! The login information will not be available!')); ?>

    </div>
<?php endif; ?><?php /**PATH D:\FYPS Project\shiping\resources\views/alerts/migrations_check.blade.php ENDPATH**/ ?>