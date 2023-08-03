<?php
$array = array("","Placed","Accepted by Shipping Company","Shipping","In-Transit","Arrived at Destination","Out of Delivery","Ready to Pick Up","Delivered","Picked-up","Cancelled");
?>
<?php $__env->startSection('content'); ?>

  <div class="panel-header panel-header-sm">
    <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
</div>
  <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               
                <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
                <a class="btn btn-primary btn-round text-white pull-right" href="/package-estimation ">Add Package Estimation</a>
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
                     
                      <th>
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
                        <td >
                          <?php if (\Illuminate\Support\Facades\Blade::check('clientandadmin')): ?>
                          <a class="btn btn-primary btn-round text-white " data-id="<?php echo e($item->id); ?>" href="/package-estimation-details/<?php echo e($item->id); ?>">Details</a>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('shipper')): ?>
                        <a class="btn btn-primary btn-round text-white "  href="/package-estimation-qoute/<?php echo e($item->id); ?>">Details</a>
                        <?php endif; ?>
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
    'namePage' => 'Pakages Estimation List',
    'activePage' => 'pakages',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FYPS Project\shiping\resources\views/admin/estimationlist.blade.php ENDPATH**/ ?>