

<?php $__env->startSection('content'); ?>
<h3>Register</h3>
<a href="<?php echo e(route('login')); ?>">Login</a>
<br>
<form action="<?php echo e(route('store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label>Nama Lengkap:</label><br>
    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>">
    <?php if($errors->has('name')): ?>
    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
    <?php endif; ?>

    <br>
    <label>Email Address:</label><br>
    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>">
    <?php if($errors->has('email')): ?>
    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
    <?php endif; ?>

    <br>
    <label>Password:</label><br>
    <input type="password" id="password" name="password">
    <?php if($errors->has('password')): ?>
    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
    <?php endif; ?>

    <br>
    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
    <div class="col-md-6">
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
    
    <input type="submit" value="Register">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\rina\resources\views/auth/register.blade.php ENDPATH**/ ?>