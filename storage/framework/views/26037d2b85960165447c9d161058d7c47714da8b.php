

<link rel="stylesheet" href="<?php echo e(asset('front/css/home.css')); ?>">

<?php $__env->startSection('title'); ?>
    HappyBook - <?php echo e($category->category); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($category->id == 1): ?>
        <div style = "font-size:30px">Education</div><br>
    <?php elseif($category->id == 2): ?>
        <div style = "font-size:30px">Fiction</div><br>
    <?php elseif($category->id == 3): ?>
        <div style = "font-size:30px">History</div><br>
    <?php elseif($category->id == 4): ?>
        <div style = "font-size:30px">Kids</div><br>
    <?php elseif($category->id == 5): ?>
        <div style = "font-size:30px">Romance</div><br>
    <?php endif; ?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" style="width: 60%">Title</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/details/<?php echo e($d->id); ?>" class="book-title-link"><?php echo e($d->title); ?></a></td>
                    <td><?php echo e($d->detail->author); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    <?php if($data->isEmpty()): ?>
    <?php echo 'No Data Available'?>
    <?php endif; ?>
    
    
<?php $__env->stopSection(); ?>

<?php if($category->id == 1): ?>
    <?php $__env->startSection('active1', 'active'); ?>
<?php elseif($category->id == 2): ?>
    <?php $__env->startSection('active2', 'active'); ?>
<?php elseif($category->id == 3): ?>
    <?php $__env->startSection('active3', 'active'); ?>
<?php elseif($category->id == 4): ?>
    <?php $__env->startSection('active4', 'active'); ?>
<?php elseif($category->id == 5): ?>
    <?php $__env->startSection('active5', 'active'); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\HappyBook\resources\views/category.blade.php ENDPATH**/ ?>