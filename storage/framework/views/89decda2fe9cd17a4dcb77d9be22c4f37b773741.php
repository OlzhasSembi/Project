<?php $__env->startSection('title-block'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Update page</h1>
    <?php echo $__env->make('inc.tasks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('task-update-submit-process', $data->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Enter name of the Task</label>
            <input class="form-control" type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Task name" id="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description"><?php echo e($data->description); ?></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="<?php echo e($data->status); ?>"><?php echo e($data->status); ?></option>
                <option value="no status">no status</option>
                <option value="Done">Done</option>
            </select>
        </div>
        <div class="form-group">
            <label for="todo_date">Choose Date</label>
            <input class="form-control" type="date" name="todo_date" value="<?php echo e($data->todo_date); ?>" placeholder="Choose date" id="todo_date">
        </div>
        <input class="form-control" type="hidden" value="<?php echo e(Auth::user()->email); ?>" name="owner">
        <button type="submit" class="btn btn-success">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/update-taskProcess.blade.php ENDPATH**/ ?>