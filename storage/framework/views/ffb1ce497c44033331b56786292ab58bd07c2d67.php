

<?php $__env->startSection('title', 'HappyBook - Details'); ?>

<?php $__env->startSection('content'); ?>
    <div style = "font-size:30px">Book Details</div><br>
    <p><b>Title:</b> <?php echo e($data->title); ?></p>
    <p><b>Author:</b> <?php echo e($data->detail->author); ?></p>
    <p><b>Publisher:</b> <?php echo e($data->detail->publisher); ?></p>
    <p><b>Year:</b> <?php echo e($data->detail->year); ?></p>
    <p><b>Description:</b></p>
    <p><?php echo e($data->detail->description); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\HappyBook\resources\views/details.blade.php ENDPATH**/ ?>