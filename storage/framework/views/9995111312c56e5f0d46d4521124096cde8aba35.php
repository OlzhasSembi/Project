<?php $__env->startSection('title-block'); ?> Update contact <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Update contact</h1>

    <form action="<?php echo e(route('contact-update-submit', $data->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input class="form-control" type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Enter name" id="name">
        </div>
        <div class="form-group">
            <label for="name">Enter email</label>
            <input class="form-control" type="text" name="email" value="<?php echo e($data->email); ?>" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="subject">Topic of message</label>
            <input class="form-control" type="text" name="subject" value="<?php echo e($data->subject); ?>" placeholder="Topic message" id="subject">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Enter message"><?php echo e($data->message); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/update-message.blade.php ENDPATH**/ ?>