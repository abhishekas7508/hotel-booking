<form action="">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control shadow-none">
    </div>
    <div class="mb-4">
      <label class="form-label">Password</label>
      <input type="password" class="form-control shadow-none">
    </div>
    <div class="d-flex align-items-center justify-content-between mb-2">
      <button type="submit" class="btn btn-dark">Login</button>
      <a href="javascript : void(0)">Forgot password?</a>
    </div>
</form><?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/pages/login.blade.php ENDPATH**/ ?>