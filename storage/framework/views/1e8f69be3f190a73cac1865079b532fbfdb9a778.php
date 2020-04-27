<?php $__env->startSection('title-block'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Task page</h1>
    <?php echo $__env->make('inc.tasks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('task-form')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Enter name of the Task</label>
            <input class="form-control" type="text" name="name" placeholder="Task name" id="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group">
            <label for="todo_date">Choose Date</label>
            <input class="form-control" type="date" name="todo_date" placeholder="Choose date" id="todo_date">
        </div>
        <input class="form-control" type="hidden" value="<?php echo e(Auth::user()->email); ?>" name="owner">
        <input class="form-control" type="hidden" value="no status" name="status">
        <button type="submit" class="btn btn-success">Create</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/createTask.blade.php ENDPATH**/ ?>