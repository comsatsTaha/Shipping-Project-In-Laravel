<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-9">
                                <p class="text-lead text-light mt-3 mb-0">
                                    <?php echo $__env->make('alerts.migrations_check', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    
                                    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto">
            <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
            <div class="card card-login card-plain">
                <div class="card-header ">
                <div class="logo-container">
                    <img src="<?php echo e(asset('assets/img/now-logo.png')); ?>" alt="">
                </div>
                </div>
                <div class="card-body ">
                <div class="input-group no-border form-control-lg <?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                    <span class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                    </span>
                    <input class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" type="email" name="email" value="<?php echo e(old('email', 'admin@nowui.com')); ?>" required autofocus>
                </div>
             
                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                <div class="input-group no-border form-control-lg <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                    </div>
                    <input placeholder="Password" class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="<?php echo e(__('Password')); ?>" type="password" value="secret" required>
                </div>
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
                </div>
                <div class="card-footer ">
                <button  type = "submit" class="btn btn-primary btn-round btn-lg btn-block mb-3"><?php echo e(__('Get Started')); ?></button>
                <div class="pull-left">
                    <h6>
                    <a href="<?php echo e(route('register')); ?>" class="link footer-link"><?php echo e(__('Create Account')); ?></a>
                    </h6>
                </div>
                <div class="pull-right">
                    <h6>
                    <a href="<?php echo e(route('password.request')); ?>" class="link footer-link"><?php echo e(__('Forgot Password?')); ?></a>
                    </h6>                
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', [
    'namePage' => 'Login page',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'login',
    'backgroundImage' => asset('assets') . "/ui/images/depot_hero_1.jpg",
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FYPS Project\shiping\resources\views/auth/login.blade.php ENDPATH**/ ?>