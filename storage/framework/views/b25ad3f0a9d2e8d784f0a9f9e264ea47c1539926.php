<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <form role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="card card-login card-plain">
                        <div class="card-header ">
                            <div class="logo-container">
                                <img src="<?php echo e(asset('assets/img/now-logo.png')); ?>" alt="">
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="card-body">
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="input-group no-border form-control-lg <?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                <span class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </div>
                                </span>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span style="display:block;" class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="card-footer ">
                            <button  type = "submit" class="btn btn-primary btn-round btn-lg btn-block mb-3"><?php echo e(__('Send Password Reset Link')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', [
    'namePage' => 'Reset Password',
    'class' => 'login-page sidebar-mini ',
    'activePage' => '',
    'backgroundImage' => asset('assets') . "/img/bg14.jpg",
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FYPS Project\shiping\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>