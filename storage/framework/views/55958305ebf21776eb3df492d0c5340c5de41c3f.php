<?php $__env->startSection('title-block'); ?> <?php echo e($data->subject); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($data->subject); ?></h1>
        <div class="alert alert-info">
            <p><?php echo e($data->message); ?></p>
            <p><?php echo e($data->email); ?>-<?php echo e($data->name); ?></p>
            <p><smal><?php echo e($data->created_at); ?></smal></p>
            <a href="<?php echo e(route('contact-update', $data->id)); ?>"><button class="btn btn-primary">Edit</button></a>
            <a href="<?php echo e(route('contact-delete', $data->id)); ?>"><button class="btn btn-danger">Delete</button></a>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/one-message.blade.php ENDPATH**/ ?>