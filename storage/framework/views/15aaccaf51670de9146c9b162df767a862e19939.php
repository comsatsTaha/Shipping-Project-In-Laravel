

<?php $__env->startSection('content'); ?>
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title"><?php echo e(__(" countries")); ?></h5>
                        <a class="btn btn-primary" href="<?php echo e(route('countries.create')); ?>">Create New country</a>
                      </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <td> Name</td>
                            <td> Code</td>
                            <td> Action</td>
                           

                        </thead>
                        <tbody>
                           
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td> <?php echo e($country->name); ?></td>
                            <td> <?php echo e($country->code); ?></td>

                       
                            <td style="display:flex">
                                                <a href="<?php echo e(route('countries.edit', $country->id)); ?>"><i class="fa fa-edit"></i></a>
                                                <form action="<?php echo e(route('countries.destroy', $country->id)); ?>" method="post">
                                                   <?php echo method_field('DELETE'); ?>
                                                   <?php echo csrf_field(); ?> 
                                                   <button onClick="return confirm('Delete This country.?')" type="submit"><i class="fa fa-trash"></i></button>
                                               </form>
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
 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages',
    'activePage' => 'pakages',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.1\htdocs\shiping\resources\views/countries/index.blade.php ENDPATH**/ ?>