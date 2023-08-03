<?php $__env->startSection('content'); ?>
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title"><?php echo e(__('Packages Details')); ?></h5>
                    </div>
                    <div class="card-body">


                        <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="row">
                        </div>
                        <div class="row">

                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Sender Name')); ?></label>
                                    <input type="text" name="name" class="form-control"
                                        value="<?php echo e($package_details->sender_name); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Sender Phone No')); ?></label>
                                    <input type="text" name="name" class="form-control"
                                        value="<?php echo e($package_details->sender_phone_no); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender Address')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->sender_street); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender City')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->sender_city); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender Province')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->sender_province); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender Postcode')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->sender_postcode); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Reciver Name')); ?></label>
                                    <input type="text" name="name" class="form-control"
                                        value="<?php echo e($package_details->reciver_name); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Reciver Phone No')); ?></label>
                                    <input type="text" name="name" class="form-control"
                                        value="<?php echo e($package_details->reciver_phone_no); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver Address')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->reciver_street); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver City')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->reciver_city); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver Province')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->reciver_province); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver Postcode')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->reciver_postcode); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" <?php if($package_details->wants_contact_before_delivery == 1): ?> checked <?php endif; ?> disabled>
                                        <span class="form-check-sign">Call Reciver Before Delivery</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Parcel Height')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->height); ?> " disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Parcel Width')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value=" <?php echo e($package_details->width); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Parcel Length')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e($package_details->length); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Comment')); ?></label>
                                    <textarea name="content" class="form-control" cols="5" placeholder=""
                                        disabled><?php echo e($package_details->content); ?></textarea>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>

                        
                        <?php
                            $lenght = count($track_record);
                            
                        ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('shipper')): ?>
                        <?php if($lenght == 0): ?>
                        <div class="row">
                            <form method="POST" action="<?php echo e(route('package.qoute')); ?>" class="col-md-12">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="order_id" value="<?php echo e($package_details->id); ?>">
                            <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo e(__('Estimated Price')); ?></label>
                            <input type="number" name="estmiated" min="0"
                            class="form-control" placeholder="Estimated Price">
                            </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Remarks')); ?></label>
                                    <textarea name="remarks" class="form-control" cols="5" placeholder="Remarks"
                                        ></textarea>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'remarks'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            </div>
                            <div class="card-footer ">
                            <button type="submit" class="btn btn-primary
                            btn-round"><?php echo e(__('Save')); ?></button>
                            </div>
                            </form> 
                        <?php endif; ?>
                            <?php endif; ?>

                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                        
                        <div class="row">
                            <form method="POST" action="<?php echo e(route('package.qoute')); ?>" class="col-md-12">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="order_id" value="<?php echo e($package_details->id); ?>">
                            <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo e(__('Estimated Price')); ?></label>
                            <input type="number" name="estmiated" min="0"
                            class="form-control" placeholder="Estimated Price">
                            </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Remarks')); ?></label>
                                    <textarea name="remarks" class="form-control" cols="5" placeholder="Remarks"
                                        ></textarea>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'remarks'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            </div>
                            <div class="card-footer ">
                            <button type="submit" class="btn btn-primary
                            btn-round"><?php echo e(__('Save')); ?></button>
                            </div>
                            </form> 
                        

                        <?php endif; ?>


                        
                        
                        <hr class="half-rule" />
                        <h5 class="title"><?php echo e(__('Quotations by Shipping Company')); ?></h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Company Name
                                    </th>
                                    <th>
                                        Estimate Shipping Price
                                    </th>
                                    <th>
                                        Remarks
                                    </th>
                                    <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
                                    <th class="text-right">
                                        Action
                                    </th>
                                    <?php endif; ?>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $track_record; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($record->shipping); ?>

                                            </td>
                                            <td>
                                                <?php echo e($record->est_price); ?>

                                            </td>
                                            <td>
                                                <?php echo e($record->remarks); ?>

                                            </td>
                                            <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
                                            <td class="text-right">
                                                <a class="btn btn-primary btn-round text-white pull-right"
                                                    href="/place-order/<?php echo e($record->id); ?>">Place Order</a>
                                            </td>
                                            <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', [
'class' => '',
'namePage' => 'Pakages Estimation Details',
'activePage' => 'pakages',
'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmedpc/Desktop/fyp/shiping/resources/views/client/estiamtiondetails.blade.php ENDPATH**/ ?>