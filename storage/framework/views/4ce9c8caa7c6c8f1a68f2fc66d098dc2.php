<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Data user</h1>
  <a href="<?php echo e(route('admin/dashboard')); ?>">Menu utama</a><br>
  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
  <br><br>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  </form>
  <br><br>
  <form action="" method="get">
    <label>Cari</label>
    <input type="text" name="cari">
    <input type="submit" value="cari">
  </form>
  <br><br>
  <a href="<?php echo e(route('akun.create')); ?>">Tambah user</a>
  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(Session::get('success')); ?>

    </div>
  <?php endif; ?>
  <table class="tabel">
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Role</th>
      <th>Aksi</th>
    </tr>
    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <td><?php echo e($user->name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td><?php echo e($user->usertype); ?></td>
      <td>
        <a href="<?php echo e(route ('akun.edit', $user->id )); ?>" class="btn btn-sm btn-primary">Edit</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
      <td>
        <p>data tidak ditemukan</p>
      </td>
      <td>
        <a href="<?php echo e(route('akun.index')); ?>">kembali</a>
      </td>
    </tr>
    <?php endif; ?>
  </table>
  <?php echo e($users ->links()); ?>

</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/akun/index.blade.php ENDPATH**/ ?>