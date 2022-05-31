
<link rel="stylesheet" href="<?php echo e(asset('front/css/home.css')); ?>">

<?php $__env->startSection('title', 'HappyBook - Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="book-list-title">
        <p>Book List</p>
    </div>
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
    <?php echo e($data->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\HappyBook\resources\views/home.blade.php ENDPATH**/ ?>