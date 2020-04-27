<?php $__env->startSection('title-block'); ?> Task page <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Task page</h1>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">
            <h3><?php echo e($task->name); ?></h3>
            <p><?php echo e($task->description); ?></p>
            <p><?php echo e($task->status); ?></p>
            <p><smal><?php echo e($task->todo_date); ?></smal></p>
            <a href="<?php echo e(route('task-data-one-process', $task->id)); ?>"><button class="btn btn-warning">More</button></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/process-task.blade.php ENDPATH**/ ?>