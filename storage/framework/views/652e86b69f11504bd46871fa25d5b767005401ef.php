
<?php $__env->startSection('title','Hotel-booking'); ?>
<?php $__env->startSection('content'); ?>

<style>

    .h-line{
        width: 150px;
        margin: 0 auto;
        height: 1.7px;
    }

</style>
<div class="container bg-white mt-5 main p-5 rounded">
    <h2 class="fw-bold text-center">Book Room</h2>
    <div class="h-line bg-dark"> </div>
    <form action="bookroom" method="post">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control shadow-none">
      </div>
      <div class="mb-4">
        <label class="form-label">Room Name</label>
        <select class="form-select" name="roomname">
          <option selected>select</option>
          <option value="1">Single Room</option>
          <option value="2">Double Room</option>
          <option value="3">Triple Room</option>
          <option value="3">Quad Room</option>
          <option value="3">King Room</option>
        </select>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Check-in</label>
          <input type="date" name="check_in" class="form-control shadow-none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Check-out</label>
          <input type="date" name="check_out" class="form-control shadow-none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Adult</label>
          <select name="adult" class="form-select">
            <option selected>select</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight: 500;">Children</label>
          <select name="children" class="form-select">
            <option selected>select</option>
            <option value="0">None</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-center mb-2">
        <button type="submit" class="btn btn-dark">Book Now</button>
      </div>
      </div>
      
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/bookroom.blade.php ENDPATH**/ ?>