

<?php $__env->startSection('content'); ?>
    <h1>Posts</h1>
    <ul class="list-group">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <li class="list-group-item"><?php echo e($item->title); ?><br><?php echo e($item->body); ?><br><small>Written on: <?php echo e($item->created_at); ?></small></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </ul>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/posts/index.blade.php ENDPATH**/ ?>