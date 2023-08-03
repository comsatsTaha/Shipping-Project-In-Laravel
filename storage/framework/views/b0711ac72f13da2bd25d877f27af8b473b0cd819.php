

<?php $__env->startSection('content'); ?>
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title"><?php echo e(__(" Ships")); ?></h5>
                        
                      </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <td> Ship Name</td>
                            <td> Ship Type</td>
                            <td> Price form</td>
                            <td> Price To</td>
                            <td> Action</td>

                        </thead>
                        <tbody>
                           
                            <?php $__currentLoopData = $ships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td> <?php echo e($ship->name); ?></td>
                            <td> <?php echo e($ship->type); ?></td>
                            <td> <?php echo e($ship->price_from); ?></td>
                            <td> <?php echo e($ship->price_to); ?></td>
                            <td></td>
                        </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages',
    'activePage' => 'pakages',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.1\htdocs\shiping\resources\views/ships/estimatesofships.blade.php ENDPATH**/ ?>