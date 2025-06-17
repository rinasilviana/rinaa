

<?php $__env->startSection('content'); ?>

<h1>Login</h1>
<br><br>
<form action="<?php echo e(route ('authenticate')); ?>" method="post">
  <?php echo csrf_field(); ?>
  <label>Email Address</label><br>
  <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"><br><br>
  <label>Password</label>
  <input type="password" name="password" id="password"><br><br>
  <input type="submit" value="login">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rinaav2\resources\views/auth/login.blade.php ENDPATH**/ ?>