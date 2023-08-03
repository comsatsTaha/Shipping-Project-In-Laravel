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
                            <div class="col-md-12 pr-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input edit-checkbox" type="checkbox">
                                        <span class="form-check-sign">Edit Order</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <form  method="POST" action="<?php echo e(route('order.update')); ?>" >
                            <?php echo csrf_field(); ?>
                            
                            <input type="hidden" name="id" value="<?php echo e($package_details->id); ?>">
                        <div class="row">

                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Shipping Company')); ?></label>
                                    <input type="text" name="" class="form-control"
                                        value="<?php echo e($package_details->shipping); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <?php
                                $array = ['', 'Placed', 'Accepted By Shipping Company', 'Shipping', 'In-Transit', 'Arrived at Destination', 'Out of Delivery', 'Ready to Pick Up', 'Delivered', 'Picked-up', 'Cancelled'];
                            ?>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Order Status')); ?></label>
                                    <input type="text" name="" class="form-control"
                                        value="<?php echo e($array[$package_details->status]); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Sender Name')); ?></label>
                                    <input type="text" name="sender_name" class="form-control edit-form"
                                        value="<?php echo e($package_details->sender_name); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Sender Phone No')); ?></label>
                                    <input type="tel" name="sender_phone_no" class="form-control edit-form"
                                        value="<?php echo e($package_details->sender_phone_no); ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender Address')); ?></label>
                                    <input type="text" name="sender_street" class="form-control edit-form"  
                                        value="<?php echo e($package_details->sender_street); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender City')); ?></label>
                                    <input type="text" name="sender_city" class="form-control edit-form"  
                                        value="<?php echo e($package_details->sender_city); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender Province')); ?></label>
                                    <input type="text" name="sender_province" class="form-control edit-form"  
                                        value="<?php echo e($package_details->sender_province); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Sender Postcode')); ?></label>
                                    <input type="text" name="sender_postcode" class="form-control edit-form"  
                                        value="<?php echo e($package_details->sender_postcode); ?>" disabled>
                                     
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Reciver Name')); ?></label>
                                    <input type="text" name="reciver_name" class="form-control edit-form"
                                        value="<?php echo e($package_details->reciver_name); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Reciver Phone No')); ?></label>
                                    <input type="tel" name="reciver_phone_no" class="form-control edit-form"
                                        value="<?php echo e($package_details->reciver_phone_no); ?>" disabled>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver Address')); ?></label>
                                    <input type="text" name="reciver_street" class="form-control edit-form"  
                                        value="<?php echo e($package_details->reciver_street); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver City')); ?></label>
                                    <input type="text" name="reciver_city" class="form-control edit-form"  
                                        value="<?php echo e($package_details->reciver_city); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver Province')); ?></label>
                                    <input type="text" name="reciver_province" class="form-control edit-form"  
                                        value="<?php echo e($package_details->reciver_province); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Reciver Postcode')); ?></label>
                                    <input type="text" name="reciver_postcode" class="form-control edit-form"  
                                        value="<?php echo e($package_details->reciver_postcode); ?>" disabled>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input edit-form" type="checkbox" name="wants_contact_before_delivery"
                                            <?php if($package_details->wants_contact_before_delivery == 1): ?> checked <?php endif; ?> disabled>
                                        <span class="form-check-sign">Call Reciver Before Delivery</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Parcel Height')); ?></label>
                                    <input type="number" min="0" name="height" class="form-control edit-form"  
                                        value="<?php echo e($package_details->height); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Parcel Width')); ?></label>
                                    <input type="number" min="0" name="width" class="form-control edit-form"  
                                        value="<?php echo e($package_details->width); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Parcel Length')); ?></label>
                                    <input type="number" min="0" name="length" class="form-control edit-form"  
                                        value="<?php echo e($package_details->length); ?>" disabled>
                                     
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label><?php echo e(__('Shipping Cost')); ?></label>
                                    <input type="name" min="0" name="total_value" class="form-control edit-form"
                                        placeholder="Shipping Cost" value="<?php echo e($package_details->total_value); ?>" disabled>

                                </div>
                            </div>
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo e(__('Comment')); ?></label>
                                    <textarea name="content" class="form-control edit-form" cols="5" placeholder="" disabled><?php echo e($package_details->content); ?></textarea>
                                    <?php echo $__env->make('alerts.feedback', ['field' => 'content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <input type="submit"
                                class="btn btn-primary btn-round edit-button" style="display: none" value="<?php echo e(__('Update Order')); ?>">
                        </div>

                        </form>
                        <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
                            <?php if($package_details->status < 4): ?>
                                <div class="card-footer ">
                                    <a href="/cancelled/<?php echo e($package_details->id); ?>"
                                        class="btn btn-primary btn-round"><?php echo e(__('Cancel Order')); ?></a>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if (\Illuminate\Support\Facades\Blade::check('shipperandadmin')): ?>
                            
                            <form method="POST" action="<?php echo e(route('order.cost')); ?>"
                                style="<?php if(!empty($package_details->total_value)): ?> display:none <?php endif; ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="order_id" value="<?php echo e($package_details->id); ?>">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label><?php echo e(__('Add Shipping Cost')); ?></label>
                                        <input type="text" min="0" name="cost" class="form-control"
                                            placeholder="Shipping Cost" value="<?php echo e($package_details->total_value); ?>"
                                            <?php if(!empty($package_details->total_value)): ?> disabled <?php endif; ?>>

                                    </div>
                                    <?php if(empty($package_details->total_value)): ?>
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="btn btn-primary btn-round"><?php echo e(__('Save')); ?></button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </form>

                            
                            
                            <form method="POST" action="<?php echo e(route('order.status')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="order_id" value="<?php echo e($package_details->id); ?>">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label><?php echo e(__('Update Order Status ')); ?></label>

                                        <select name="status_id" class="form-control" required
                                            <?php if($package_details->status == 10 || $package_details->status == 8): ?> disabled <?php endif; ?>>
                                            <option selected="true" disabled="disabled"> Select Order Status </option>

                                            <option value="2"> Accepted By Shipping Company</option>
                                            <option value="3"> Shipping</option>
                                            <option value="4"> In-Transit</option>
                                            <option value="5"> Arrived at Destination</option>
                                            <option value=6> Out For Delivery</option>
                                            <option value="7"> Ready to Pickup</option>
                                            <option value="8"> Delivired </option>
                                            <option value="9"> Picked-up</option>
                                            <option value="10"> Cancelled</option>



                                        </select>
                                        <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                                <?php if($package_details->status != 10 && $package_details->status != 8): ?>
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-primary btn-round"><?php echo e(__('Save')); ?></button>
                                        </div>
                                    </div>
                                <?php endif; ?>






                            </form>
                        <?php endif; ?>
                        
                        <hr class="half-rule" />
                        <h5 class="title"><?php echo e(__('Track Record')); ?></h5>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Status
                                    </th>
                                    <th class="text-right">
                                        Date and Time
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $track_record; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($record->status_message); ?>

                                            </td>


                                            <td class="text-right">
                                                <?php echo e($record->created_at); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </tbody>
                            </table>
                        </div>









                        <?php if (\Illuminate\Support\Facades\Blade::check('client')): ?>
                            <?php if($package_details->rating_star == null && ($package_details->status == 10 || $package_details->status == 8)): ?>
                                <hr class="half-rule" />

                                <h5 class="title"><?php echo e(__('Rating')); ?></h5>

                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="stars">
                                            <form action="<?php echo e(route('review.add')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <label><?php echo e(__('Overall Experience')); ?></label>
                                                <div>
                                                    <input class="star star-5" id="star-5" type="radio" name="star"
                                                        value="5" />
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"
                                                        value="4" />
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"
                                                        value="3" />
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"
                                                        value="2" />
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"
                                                        value="1" />
                                                    <label class="star star-1" for="star-1"></label>
                                                </div>


                                                <textarea name="remarks" class="form-control" cols="5" placeholder="Remarks"></textarea>
                                                <input type="hidden" name="order_id" value="<?php echo e($package_details->id); ?>">

                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-round"><?php echo e(__('Save')); ?></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>


                        <?php if($package_details->rating_star != null): ?>
                            <hr class="half-rule" />

                            <h5 class="title"><?php echo e(__('Rating')); ?></h5>
                            <div class="row">
                                <div class="col-md-6 ">

                                    <div>
                                        <input class="star star-5" id="star-5" type="radio" name="star"
                                            value="5" <?php echo e($package_details->rating_star == 5 ? 'checked' : ''); ?> disabled />
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star"
                                            value="4" <?php echo e($package_details->rating_star == 4 ? 'checked' : ''); ?> disabled />
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star"
                                            value="3" <?php echo e($package_details->rating_star == 3 ? 'checked' : ''); ?> disabled />
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star"
                                            value="2" <?php echo e($package_details->rating_star == 2 ? 'checked' : ''); ?> disabled />
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star"
                                            value="1" <?php echo e($package_details->rating_star == 1 ? 'checked' : ''); ?> disabled />
                                        <label class="star star-1" for="star-1"></label>
                                    </div>
                                    <textarea name="remarks" class="form-control" cols="5" placeholder="Remarks" disabled><?php echo e($package_details->rating_review); ?></textarea>
                                </div>
                            </div>
                        <?php endif; ?>


                    </div>


                </div>
            </div>

        </div>
    </div>
    <?php $__env->startPush('js'); ?>
    <script>
    $( document ).ready(function() {


        $('.edit-checkbox').change(function() {
            let isChecked = $('.edit-checkbox').prop('checked');
            
            if(isChecked){
                $( ".edit-form" ).prop( "disabled", false );
                $(".edit-button").css('display',"block")
            }else{
                $( ".edit-form" ).prop( "disabled", true );
                $(".edit-button").css('display',"none")
            }
});


    });

    </script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', [
    'class' => '',
    'namePage' => 'Pakages',
    'activePage' => 'pakages',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8.1\htdocs\shiping\resources\views/client/packagesdetails.blade.php ENDPATH**/ ?>