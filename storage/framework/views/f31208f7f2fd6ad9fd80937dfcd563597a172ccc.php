
<?php $__env->startSection('title','Hotel-booking'); ?>
<?php $__env->startSection('content'); ?>
<div class='jumbotron text-center m-2'>
    <h1>Welcome to laravel</h1>
    <p><?php echo e($para); ?></p>
    <button class='btn btn-primary'>Submit</button>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking2\resources\views/pages/index.blade.php ENDPATH**/ ?>