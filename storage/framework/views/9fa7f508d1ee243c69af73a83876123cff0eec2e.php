<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
  body{
    background-image:url("images/login/loginbg.jpg");
    background-size: cover;
  }
</style>
<body>
  <img src="login/loginbg.jpg" alt="">
  <div class="container bg-white p-4 mt-5 rounded">
    <div class="d-flex align-items-center justify-content-center mb-2">
      <h1>Register</h1>
    </div>

    <form action="register" method="POST">
      <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="username" class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-6 p-0 mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Phone Number</label>
          <input type="number" name="phone_no" class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['phone_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-12 p-0 mb-3">
          <label class="form-label">Address</label>
          <textarea type="file" name="address" class="form-control shadow-none" rows="1"></textarea>
          <span style="color:red;"><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Pincode</label>
          <input type="number" name="pincode" class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['pincode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Date of Birth</label>
          <input type="date" name="dob"class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="col-md-6 ps-0 mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control shadow-none">
          <span style="color:red;"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="text-center my-1">
          <button type="submit" class="btn btn-dark">Register</button>
        </div>
      </div>
    </form>
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/register.blade.php ENDPATH**/ ?>