<?php $__env->startSection('title-block'); ?> Contact page <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Contact page</h1>

    <form action="<?php echo e(route('contact-form')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter name" id="name">
        </div>
        <div class="form-group">
            <label for="name">Enter email</label>
            <input class="form-control" type="text" name="email" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="subject">Topic of message</label>
            <input class="form-control" type="text" name="subject" placeholder="Topic message" id="subject">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" placeholder="Enter message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/contact.blade.php ENDPATH**/ ?>