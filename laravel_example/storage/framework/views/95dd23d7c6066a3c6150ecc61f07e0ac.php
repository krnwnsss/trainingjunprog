

<?php $__env->startSection('content'); ?>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <strong>Employee List</strong>
            <a href="<?php echo e(route('employee.create')); ?>" class="btn btn-primary btn-xs pull-right py-0">Create Employee</a>
            <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($employee->id); ?></td>
                        <td><?php echo e($employee->name); ?></td>
                        <td><?php echo e($employee->email); ?></td>
                        <td><?php echo e($employee->joining_date); ?></td>
                        <td><span type="button" class="btn btn-<?php echo e($employee->is_active ? 'success' : 'danger'); ?> btn-xs py-0"><?php echo e($employee->is_active ? 'Active' : 'Inactive'); ?></span></td>
                        <td>
                            <a href="<?php echo e(route('employee.show',$employee->id)); ?>" class="btn btn-primary btn-xs py-0">Show</a>
                            <a href="<?php echo e(route('employee.edit',$employee->id)); ?>" class="btn btn-warning btn-xs py-0">Edit</a>
                            <form action="<?php echo e(route('employee.destroy',$employee->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($employees->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Neuron - NB 129\laravel_example\resources\views/employee/index.blade.php ENDPATH**/ ?>