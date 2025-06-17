<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style type="text/css">
  table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0px;
  }
  table,
  th,
  td {
    border: 1px solid;
  }
  </style>
</head>
<body>
  <h1>Edit pelanggaran</h1>
  <a href="<?php echo e(route('pelanggaran.index')); ?>">Kembali</a><br><br>

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

<form action="<?php echo e(route('pelanggaran.update', $pelanggaran->id)); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <h2>Data Pelanggaran</h2>
  <label>Jenis pelanggaran</label><br>
  <textarea name="jenis" id="jenis" rows="7" cols="50" value="<?php echo e(old('jenis')); ?>"><?php echo e($pelanggaran->jenis); ?></textarea>
  <br><br>
  <label>Konsekuensi Pelanggaran</label><br>
  <textarea name="konsekuensi" id="konsekuensi" rows="7" cols="50" value="<?php echo e(old('konsekuensi')); ?>"><?php echo e($pelanggaran->konsekuensi); ?></textarea>
  <br><br>
  <label>Poin Pelanggaran</label><br>
  <input type="text" name="poin" id="poin" value="<?php echo e($pelanggaran->poin); ?>">
  <button type="submit">Simpan Data</button>
  <br><br>
</form>
</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/pelanggaran/edit.blade.php ENDPATH**/ ?>