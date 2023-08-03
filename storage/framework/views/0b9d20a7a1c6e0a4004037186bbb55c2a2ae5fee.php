<?php $__env->startSection('content'); ?>
<?php
  $status = array("Packages for Estimation", "Placed", "Accepted By Shipping Company", "Shipping", "In-Transit", "Arrived at Destination", "Out of Delivery", "Ready to Pick Up", "Delivered", "Picked-up", "Cancelled");
?>
  <div class="panel-header panel-header-sm">
    
  </div>
  <div class="content">
    
    <div class="row">
      <div class="col-md-12">
        <div class="card  card-tasks">
          <div class="card-header ">
            <h5 class="card-category">Shipping Details</h5>
            <h4 class="card-title">Shipping Status</h4>
          </div>
          <div class="card-body ">
            <div class=" table-responsive">
              <table class="table">
                <tbody>
                  <?php for($i=0; $i<=10; $i++ ): ?>
                  <tr>
                    <td class=""><?php echo e($status[$i]); ?></td>
                    <td class="">
                     <?php echo e($data[$i]); ?>

                    </td>
                  </tr>
                  
                <?php endfor; ?>
               
               
                    
                    
                    
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer ">
            <hr>
            <div class="stats">
              <i class="now-ui-icons loader_refresh spin"></i> Updated Few Minutes ago
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', [
    'namePage' => 'Dashboard client',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.1\htdocs\shiping\resources\views/client.blade.php ENDPATH**/ ?>