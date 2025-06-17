<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Data pelanggaran</h1>
  <a href="<?php echo e(route('admin\dashboard')); ?>">Menu Utama</a>
  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
  <br><br>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  </form>
  <br><br>
  <form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="cari">
  </form>
  <br><br>
  <a href="<?php echo e(route('pelanggaran.create')); ?>">Tambah pelanggaran</a>
  <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(Session::get('success')); ?>

    </div>
  <?php endif; ?>
  <table class="table">
    <tr>
      <th>jenis</th>
      <th>konsekuensi</th>
      <th>poin</th>
      <th>aksi</th>
      </tr>
       <?php $__empty_1 = true; $__currentLoopData = $pelanggarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
       <tr>
        <td><?php echo e($pelanggaran->jenis); ?></td>
        <td><?php echo e($pelanggaran->konsekuensi); ?></td>
        <td><?php echo e($pelanggaran->poin); ?></td>
        <td>
          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('pelanggaran.destroy', $pelanggaran->id)); ?>" method="POST">
            <a href="<?php echo e(route('pelanggaran.edit', $pelanggaran->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">HAPUS</button>
          </form>
        </td>
       </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td>
            <p>Data tidak ditemukan</p>
          </td>
          <td>
            <a href="<?php echo e(route('pelanggaran.index')); ?>">kembali</a>
          </td>
        </tr>
  <?php endif; ?>
  </table>
  <?php echo e($pelanggarans->links()); ?>

</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/pelanggaran/index.blade.php ENDPATH**/ ?>