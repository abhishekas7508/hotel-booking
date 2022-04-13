<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
  body{
    background-image:url("images/login/loginbg.jpg");
    background-size: cover;
  }
  .main{
    max-width: 30%;
    height: auto;
  }
</style>
<body>
  <div class="container bg-white mt-5 main p-5 rounded">
    <div class="d-flex align-items-center justify-content-center mb-2">
      <h1>Login</h1>
    </div>

    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li style="color:red;"><?php echo e($err); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
    <?php endif; ?>

    <form action="login" method="post">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control shadow-none">
      </div>
      <div class="mb-4">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control shadow-none">
      </div>
      <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-dark">Login</button>
        <a href="javascript : void(0)">Forgot password?</a>
      </div>
    </form>
  </div>
  
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php /**PATH E:\installations\xampp installation\htdocs\hotel-booking\resources\views/login.blade.php ENDPATH**/ ?>