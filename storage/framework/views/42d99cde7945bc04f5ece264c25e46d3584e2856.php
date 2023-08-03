<?php $__env->startComponent('mail::message'); ?>
Hello

You Have Got A new Package By:

Customer Details:<br>
Name:  <?php echo e($user['name']); ?><br>
Email: <?php echo e($user['email']); ?><br>
Phone Number : <?php echo e($user['phone_no']); ?><br>

ThankYou

<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xampp\htdocs\laravel\shiping\resources\views/emails/order-shipper.blade.php ENDPATH**/ ?>