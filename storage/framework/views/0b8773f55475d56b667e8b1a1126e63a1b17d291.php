<?php
$array = array("","Placed","Accepted by Shipping Company","Shipping","In-Transit","Arrived at Destination","Out of Delivery","Ready to Pick Up","Delivered","Picked-up","Cancelled");
?>
<?php $__env->startSection('content'); ?>

  <div class="panel-header panel-header-sm">
    <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
 
</div>
  <div class="content">
    <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
     
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <a class="btn btn-primary btn-round text-white pull-right" href="<?php echo e(route('package.add')); ?>">Add Package</a>
                <?php endif; ?>
                <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
                <a class="btn btn-primary btn-round text-white pull-right" href="<?php echo e(route('package.add')); ?> ">Add Package</a>
                <?php endif; ?>
                <h4 class="card-title"> Packages List</h4>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Sender Name
                      </th>
                      <th>
                        Sender City
                      </th>
                      <th>
                        Reciver Name
                      </th>
                      <th >
                        Reciver City
                      </th>
                      <th style="text-align: center">
                        Status
                      </th>
                      <th  style="text-align: center">
                        Actions
                      </th>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td>
                          <?php echo e($item->sender_name); ?>

                        </td>
                        <td>
                          <?php echo e($item->sender_city); ?>

                        </td>
                        <td>
                          <?php echo e($item->reciver_name); ?>

                        </td>
                        <td >
                          <?php echo e($item->reciver_city); ?>

                        </td>
                        <td style="text-align: center">
                          <?php echo e($array[$item->status]); ?>

                        </td> 
                        <td  style="text-align: center" >
                          <a class="btn btn-primary btn-round text-white " data-id="<?php echo e($item->id); ?>" href="/package-details/<?php echo e($item->id); ?>">Details</a>
                          <a class="btn btn-primary btn-round text-white " data-id="<?php echo e($item->id); ?>" href="/package-delete/<?php echo e($item->id); ?>">Delete</a>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                   
                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
  
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages List',
    'activePage' => 'pakages',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shiping\resources\views/admin/packageslist.blade.php ENDPATH**/ ?>