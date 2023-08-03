<?php $__env->startSection('content'); ?>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><?php echo e(__(" Create Packages")); ?></h5>
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('package.create')); ?>" autocomplete="off"
            enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row">
              </div>
                <div class="row">
                  <div class="col-md-12 pr-1">
                    <div class="form-group">
                        <label><?php echo e(__("Shipping Company")); ?></label>
                            
                            <select name="shop_id" class="form-control"  required> 
                              <option selected="true"  disabled="disabled"> Select Shipping Company </option>
                              <?php $__currentLoopData = $shipper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($item->id); ?>"> <?php echo e($item->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              
                            
                            </select>
                            <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label><?php echo e(__("Sender Name")); ?></label>
                                <input type="text" name="sender_name" class="form-control"  required>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'sender_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label><?php echo e(__("Sender Phone No")); ?></label>
                                <input type="tel" name="sender_phone_no" class="form-control"  required >
                                <?php echo $__env->make('alerts.feedback', ['field' => 'sender_phone_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__("Sender Address")); ?></label>
                      <input type="text" name="sender_street" class="form-control"  required>
                      <?php echo $__env->make('alerts.feedback', ['field' => 'sender_street'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__("Sender City")); ?></label>
                      <input type="text" name="sender_city" class="form-control" required>
                      <?php echo $__env->make('alerts.feedback', ['field' => 'sender_city'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__("Sender Province")); ?></label>
                      <input type="text" name="sender_province" class="form-control"  required >
                      <?php echo $__env->make('alerts.feedback', ['field' => 'sender_province'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                  <div class="col-md-3 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1"><?php echo e(__("Sender Postcode")); ?></label>
                      <input type="number" min="0" name="sender_postcode" class="form-control"  required >
                      <?php echo $__env->make('alerts.feedback', ['field' => 'sender_postcode'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label><?php echo e(__("Reciver Name")); ?></label>
                              <input type="text" name="reciver_name" class="form-control"   required>
                              <?php echo $__env->make('alerts.feedback', ['field' => 'reciver_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>
                  </div>
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label><?php echo e(__("Reciver Phone No")); ?></label>
                              <input type="tel" name="reciver_phone_no" class="form-control"  required>
                              <?php echo $__env->make('alerts.feedback', ['field' => 'reciver_phone_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Reciver Address")); ?></label>
                    <input type="text" name="reciver_street" class="form-control"   required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'reciver_street'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Reciver City")); ?></label>
                    <input type="text" name="reciver_city" class="form-control" required >
                    <?php echo $__env->make('alerts.feedback', ['field' => 'reciver_city'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Reciver Province")); ?></label>
                    <input type="text" name="reciver_province" class="form-control"  required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'reciver_province'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Reciver Postcode")); ?></label>
                    <input type="number" min="0" name="reciver_postcode" class="form-control"  required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'reciver_postcode'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="wants_contact_before_delivery">
                      <span class="form-check-sign">Call Reciver Before Delivery</span>
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Parcel Height")); ?></label>
                    <input type="number" min="0" name="height" class="form-control"   required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'height'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Parcel Width")); ?></label>
                    <input type="number" min="0" name="width" class="form-control"   required>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'width'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Parcel Length")); ?></label>
                    <input type="number" min="0" name="length" class="form-control"  required >
                    <?php echo $__env->make('alerts.feedback', ['field' => 'length'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
                <div class="col-md-12 pr-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__("Comment")); ?></label>
                    <textarea name="content" class="form-control"  cols="5" placeholder="Insert Additional Comments"></textarea>
                    <?php echo $__env->make('alerts.feedback', ['field' => 'content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round"><?php echo e(__('Save')); ?></button>
              </div>
              <hr class="half-rule"/>
            </form>
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
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FYPS Project\shiping\resources\views/client/pakages.blade.php ENDPATH**/ ?>