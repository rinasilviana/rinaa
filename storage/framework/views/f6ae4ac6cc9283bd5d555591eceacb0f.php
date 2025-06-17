<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Data Siswa</h1>
  <a href="<?php echo e(route('admin/dashboard')); ?>">Menu utama</a>
  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
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
  <a href="<?php echo e(route('siswa.create')); ?>">Tambah siswa</a>
  <?php if(Session::has('success')): ?>
    <div class="alert alert-succes" role="alert">
      <?php echo e(Session::get('success')); ?>

    </div>
    <?php endif; ?>
    <table class="tabel">
      <tr>
        <th>Foto</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Kelas</th>
        <th>No Hp</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      <?php $__empty_1 = true; $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td>
          <img src="<?php echo e(asset('storage/siswas/'.$siswa->image)); ?>" width="120px" height="120px" alt="">
      
        </td>
        <td>
          <?php echo e($siswa->nis); ?>

        </td>
        <td>
          <?php echo e($siswa->name); ?>

        </td>
        <td>
          <?php echo e($siswa->email); ?>

        </td>
        <td>
          <?php echo e($siswa->tingkatan); ?> <?php echo e($siswa->jurusan); ?> <?php echo e($siswa->kelas); ?>

        </td>
        <td>
          <?php echo e($siswa->hp); ?>

          <?php if($siswa->status == 1): ?> :
        </td>
        <td>Aktip</td>
        <?php else: ?>
        <td>Tidak Aktip</td>
        <?php endif; ?>
        <td>
          <form onsubmit="return confirm('Apakah adna yakin');" action="<?php echo e(route('siswa.destroy', $siswa->id)); ?>" method="POST">
            <a href="<?php echo e(route('siswa.show', $siswa->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
            <a href="<?php echo e(route('siswa.edit', $siswa->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">HAPUS</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td>
          <p>data tidak di temukan</p>
        </td>
        <td>
          <a href="<?php echo e(route('siswa.index')); ?>">kembali</a>
        </td>
      </tr>
      <?php endif; ?>
    </table>
    <?php echo e($siswas->links ()); ?>

</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/siswa/index.blade.php ENDPATH**/ ?>