<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      <?php echo e(__('C2C')); ?>

    </a>
    <a href="#" class="simple-text logo-normal">
      <?php echo e(__('Shipping')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
    
      
          
     <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
     <li class=" ">
      <a href="<?php echo e(route('home')); ?>">
        <i class="now-ui-icons design_app"></i>
        <p><?php echo e(__('Dashboard')); ?></p>
      </a>
    </li>
     <li class="">
      <a href="<?php echo e(route('user.index')); ?>">
        <i class="now-ui-icons design_app"></i>
        <p><?php echo e(__('Users')); ?></p>
      </a>
    </li>
    <li class="">
        <a href="<?php echo e(route('shipper.list')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Shippers')); ?></p>
        </a>
      </li>
    <li class="">
      <a href="<?php echo e(route('package.list')); ?>">
        <i class="now-ui-icons design_app"></i>
        <p><?php echo e(__('Packages List')); ?></p>
      </a>
    </li>
    <li class=" ">
      <a href="<?php echo e(route('estimation.list')); ?>">
        <i class="now-ui-icons design_app"></i>
        <p><?php echo e(__('Estimate Packages')); ?></p>
      </a>
    </li>
    <li class=" ">
      <a href="<?php echo e(route('ships.index')); ?>">
        <i class="now-ui-icons design_app"></i>
        <p><?php echo e(__('Ships')); ?></p>
      </a>
    </li>
    <li class=" ">
      <a href="<?php echo e(route('countries.index')); ?>">
        <i class="now-ui-icons design_app"></i>
        <p><?php echo e(__('Countries')); ?></p>
      </a>
    </li>
    <li class="">
        <a href="<?php echo e(route('messages.index')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Mail Box')); ?></p>
        </a>
      </li>
     <?php endif; ?>
    
       <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
       <li class=" ">
        <a href="<?php echo e(route('client')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li>
      <li class="">
        <a href="<?php echo e(route('package.estimation')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Package Estimation')); ?></p>
        </a>
      </li>
       <li class="">
        <a href="<?php echo e(route('package.add')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Add Package')); ?></p>
        </a>
      </li>
      <li class="">
        <a href="<?php echo e(route('package.history')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Packages History')); ?></p>
        </a>
      </li>

      <li class="">
        <a href="<?php echo e(route('estimation.history')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Estimation History')); ?></p>
        </a>
      </li>
      <li class="">
        <a href="<?php echo e(route('shipper.list')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Shipper Details')); ?></p>
        </a>
      </li>
      <li class="">
        <a href="<?php echo e(route('messages.index')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Mail Box')); ?></p>
        </a>
      </li>
       <?php endif; ?>
       <?php if (\Illuminate\Support\Facades\Blade::check('shipper')): ?>
       <li class=" ">
        <a href="<?php echo e(route('shipper')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li>
      <li class=" ">
        <a href="<?php echo e(route('recived.list')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Recived Packages')); ?></p>
        </a>
      </li>
      <li class=" ">
        <a href="<?php echo e(route('estimation')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Estimate Packages')); ?></p>
        </a>
      </li>


      <li class=" ">
        <a href="<?php echo e(route('ships.index')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Ships')); ?></p>
        </a>
      </li>
      <li class="">
        <a href="<?php echo e(route('messages.index')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Mail Box')); ?></p>
        </a>
      </li>


       <?php endif; ?>
      
    </ul>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\shiping\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>