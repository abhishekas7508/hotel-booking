
<?php $__env->startSection('title','services'); ?>
<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center m-2 ">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h1>Services</h1>
                <p>this is services page</p>
                <h2>Our Services :</h2>
                <ol class='list-group'>
                <?php $__currentLoopData = $data['services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"> <?php echo e($item); ?> </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol> 
            </div>
        </div>
        
              
    </div>
     
    
<?php $__env->stopSection(); ?>
        

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/pages/services.blade.php ENDPATH**/ ?>