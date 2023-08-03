<?php $__env->startSection('content'); ?>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><?php echo e(__(" Edit Profile")); ?></h5>
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('profile.update')); ?>" autocomplete="off"
            enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-7 pr-1">
                        <div class="form-group">
                            <label><?php echo e(__(" Name")); ?></label>
                                <input type="text" name="name" class="form-control" value="<?php echo e(old('name', auth()->user()->name)); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__(" Email address")); ?></label>
                      <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email', auth()->user()->email)); ?>">
                      <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
                <?php if (\Illuminate\Support\Facades\Blade::check('shipper')): ?>
                <div class="row">
                  <div class="col-md-7 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__("Description")); ?></label>
                      <textarea name="address" class="form-control" placeholder="Description...."><?php echo e(old('address', auth()->user()->address)); ?></textarea>
                      <?php echo $__env->make('alerts.feedback', ['field' => 'address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round"><?php echo e(__('Save')); ?></button>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          <div class="card-header">
            <h5 class="title"><?php echo e(__("Password")); ?></h5>
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('profile.password')); ?>" autocomplete="off">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <?php echo $__env->make('alerts.success', ['key' => 'password_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <label><?php echo e(__(" Current Password")); ?></label>
                    <input class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="old_password" placeholder="<?php echo e(__('Current Password')); ?>" type="password"  required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'old_password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7 pr-1">
                  <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <label><?php echo e(__(" New password")); ?></label>
                    <input class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('New Password')); ?>" type="password" name="password" required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-7 pr-1">
                <div class="form-group <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                  <label><?php echo e(__(" Confirm New Password")); ?></label>
                  <input class="form-control" placeholder="<?php echo e(__('Confirm New Password')); ?>" type="password" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <button type="submit" class="btn btn-primary btn-round "><?php echo e(__('Change Password')); ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="<?php echo e(asset('assets')); ?>/img/bg5.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="<?php echo e(asset('assets')); ?>/img/default-avatar.png" alt="...">
                <h5 class="title"><?php echo e(auth()->user()->name); ?></h5>
              </a>
              <p class="description">
                  <?php echo e(auth()->user()->email); ?>

              </p>
            </div>
          </div>
          <hr>
          <div class="button-container">
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-facebook-square"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-twitter"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
              <i class="fab fa-google-plus-square"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'User Profile',
    'activePage' => 'profile',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FYPS Project\shiping\resources\views/profile/edit.blade.php ENDPATH**/ ?>