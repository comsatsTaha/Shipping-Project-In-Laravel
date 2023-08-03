<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets')); ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo e(asset('assets')); ?>/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <title>
    Now UI Dashboard byC2C Shipping
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo e(asset('assets')); ?>/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo e(asset('assets')); ?>/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo e(asset('assets')); ?>/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <style>
    div.stars {
  width: 270px;
  display: inline-block;
}
input.star { display: none; }
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: rgb(189, 189, 189);
  transition: all .2s;
}
input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}
input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}
input.star-1:checked ~ label.star:before { color: #F62; }
label.star:hover { transform: rotate(-15deg) scale(1.3); }
label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
    </style>
</head>

<body class="<?php echo e($class ?? ''); ?>">
  <div class="wrapper">
    <?php if(auth()->guard()->check()): ?>
    <?php echo $__env->make('layouts.page_template.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
    <?php echo $__env->make('layouts.page_template.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
        
    
      
  
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo e(asset('assets')); ?>/js/core/jquery.min.js"></script>
  <script src="<?php echo e(asset('assets')); ?>/js/core/popper.min.js"></script>
  <script src="<?php echo e(asset('assets')); ?>/js/core/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('assets')); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo e(asset('assets')); ?>/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo e(asset('assets')); ?>/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo e(asset('assets')); ?>/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo e(asset('assets')); ?>/demo/demo.js"></script>
  <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH D:\FYPS Project\shiping\resources\views/layouts/app.blade.php ENDPATH**/ ?>