

<?php $__env->startSection('content'); ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
            <form action="<?php echo e(route('employee.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('joining_date') ? ' has-error' : ''); ?>">
                    <label for="joining_date">Joining date</label>
                    <input type="date" name="joining_date" id="joining_date" class="form-control">

                    <?php if($errors->has('joining_date')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('joining_date')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('joining_salary') ? ' has-error' : ''); ?>">
                    <label for="joining_salary">Joining salary</label>
                    <input type="number" name="joining_salary" id="joining_salary" class="form-control">

                    <?php if($errors->has('joining_salary')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('joining_salary')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('is_active') ? ' has-error' : ''); ?>">
                    <label for="is_active">Active</label><br>
                    <input type="checkbox" name="is_active" id="is_active" value="1">
                    <?php if($errors->has('is_active')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('is_active')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Create Employee</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Neuron - NB 129\laravel_example\resources\views/employee/create.blade.php ENDPATH**/ ?>