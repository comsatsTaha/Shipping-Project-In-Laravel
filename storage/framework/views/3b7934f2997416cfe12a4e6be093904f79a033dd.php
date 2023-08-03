

<?php $__env->startSection('content'); ?>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><?php echo e(__(" Create Ship")); ?></h5>
          </div>
          <div class="card-body">
            <form method="post" action="<?php echo e(route('ships.store')); ?>" autocomplete="off"
            enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="row">
              </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black;"><?php echo e(__("Ship Name")); ?></label>
                                <input type="text" name="name" class="form-control"  required>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label style="color: black;"><?php echo e(__("Type")); ?></label>
                            <select class="form-control" name="type">
                              <option value="Import">Import</option>
                              <option value="Export">Export</option>
                              <option value="Both">Both</option>
                            </select>
                                <?php echo $__env->make('alerts.feedback', ['field' => 'sender_phone_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>


                <div class="row">
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color: black;"><?php echo e(__("Price From:")); ?></label>
                              <input type="number" name="price_from" class="form-control"  required>
                              <?php echo $__env->make('alerts.feedback', ['field' => 'sender_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>
                  </div>
                  <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label style="color: black;"><?php echo e(__("Price To")); ?></label>
                              <input type="number" name="price_to" class="form-control"  required >
                              <?php echo $__env->make('alerts.feedback', ['field' => 'price_to'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      </div>
                  </div>
              </div>
              <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
              <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
              <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                        <label style="color: black;"><?php echo e(__("Countries:")); ?></label>
                          <select class="form-control" name="country_id[]" multiple>
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                            <?php echo $__env->make('alerts.feedback', ['field' => 'sender_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    'namePage' => 'Pakages Estimation',
    'activePage' => 'pakages',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shiping\resources\views/ships/create.blade.php ENDPATH**/ ?>