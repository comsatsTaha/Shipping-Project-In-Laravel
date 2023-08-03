
   <?php if(session($key ?? 'errors')): ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
       
            <?php echo e(session($key ?? 'errors')); ?> 
        
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\shiping\resources\views/alerts/errors.blade.php ENDPATH**/ ?>