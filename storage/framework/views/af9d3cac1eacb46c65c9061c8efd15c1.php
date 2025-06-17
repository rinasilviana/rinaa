
<?php $__env->startSection('content'); ?>

<h1>Register</h1>
<a href="<?php echo e(route('login')); ?>">Login</a>
<br><br>

<form action="<?php echo e(route ('store')); ?>" method="POST">
<?php echo csrf_field(); ?>
<label>Nama Lengkap</label><br>
<input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"><br>
<?php if($errors->has('name')): ?>
<span class="text-danger"><?php echo e($errors->first('name')); ?></span>
<?php endif; ?>
<br>
<label>Email Address</label>
<input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"><br>
<?php if($errors->has('email')): ?>
<span class="text-danger"><?php echo e($errors-> first('email')); ?></span>
<?php endif; ?>
<br>
<label>Password</label><br>
<input type="password" name="password" id="password"><br>
<?php if($errors->has('password')): ?>
<span class="text-danger"><?php echo e($errors->first('password')); ?></span>
<?php endif; ?>
<br>
<label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confrim Password</label>
<div class="col-md-6">
  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
</div>
<input type="submit" value="Register">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rinaav2\resources\views/auth/register.blade.php ENDPATH**/ ?>