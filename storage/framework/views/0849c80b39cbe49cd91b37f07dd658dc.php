<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
  table{
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
  }
  table,
  th,
  td {
    border: 1px solid black;
  }
  </style>
</head>
<body>
  <h1>Edit Akun</h1>
  <a href="<?php echo e(route('akun.index')); ?>">kembali</a><br><br>
  <?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </ul>
  </div>
  <?php endif; ?>
  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(Session::get('success')); ?>

    </div>
  <?php endif; ?>
  <form action="<?php echo e(route('akun.update', $akun->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <h2>Data Akun</h2>
    <label>Nama Lengkap</label><br><br>
    <input type="text" id="name" name="name" value="<?php echo e($akun->name); ?>"> <br><br>
    <label>Hak Akses</label>
    <select name="usertype" required>
      <option <?php echo e('admin' == $akun->usertype ? 'selected' : ''); ?> value="admin">Admin</option>
      <option <?php echo e('ptk' == $akun->usertype ? 'selected' : ''); ?> value="ptk">PTK</option>
    </select>
    <button type="submit">simpan data</button>
    <br><br>
  </form>
  <form action="<?php echo e(route('updateEmail', $akun->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label>Email Address</label><br>
    <input type="text" id="email" name="email" value="<?php echo e($akun->email); ?>"> <br><br>
    <button type="submit">simpan email</button>
    <br><br>
  </form>
  <form action="<?php echo e(route('updatePassword', $akun->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label>Password</label><br>
    <input type="password" id="password" name="password"> <br><br>
    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confrim Password</label><br>
    <div class="col-md-6">
      <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
    </div>
    <br><br>
    <button type="submit">simpan password</button>
    <br><br>
  </form>
</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/akun/edit.blade.php ENDPATH**/ ?>