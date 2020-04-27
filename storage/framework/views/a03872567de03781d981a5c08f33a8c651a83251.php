<?php $__env->startSection('title-block'); ?> <?php echo e($data->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($data->name); ?></h1>
    <div class="alert alert-info">
        <p><?php echo e($data->description); ?></p>
        <p><?php echo e($data->owner); ?></p>
        <p><?php echo e($data->status); ?></p>
        <p><smal><?php echo e($data->todo_date); ?></smal></p>
        <a href="<?php echo e(route('task-update-process', $data->id)); ?>"><button class="btn btn-primary">Edit</button></a>
        <a href="<?php echo e(route('task-delete-process', $data->id)); ?>"><button class="btn btn-danger">Delete</button></a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/one-taskProcess.blade.php ENDPATH**/ ?>