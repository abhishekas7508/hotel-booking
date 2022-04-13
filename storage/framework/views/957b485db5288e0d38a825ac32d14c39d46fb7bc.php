<div class="container-fluid">
    <form action="/" method="POST">
      <?php echo csrf_field(); ?>
    <div class="row">
      <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="username" class="form-control shadow-none">
      </div>
      <div class="col-md-6 p-0 mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control shadow-none">
      </div>
      <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Phone Number</label>
        <input type="number" name="phone_no" class="form-control shadow-none">
      </div>
      <div class="col-md-6 p-0 mb-3">
        <label class="form-label">Profile picture</label>
        <input type="file"class="form-control shadow-none">
      </div>
      <div class="col-md-12 p-0 mb-3">
        <label class="form-label">Address</label>
        <textarea type="file" name="address" class="form-control shadow-none" rows="1"></textarea>
      </div>
      <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Pincode</label>
        <input type="number" name="pincode" class="form-control shadow-none">
      </div>
      <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Date of Birth</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control shadow-none">
      </div>
      <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control shadow-none">
      </div>
      <div class="text-center my-1">
        <button type="submit" class="btn btn-dark">Register</button>
      </div>
    </div><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/pages/register.blade.php ENDPATH**/ ?>