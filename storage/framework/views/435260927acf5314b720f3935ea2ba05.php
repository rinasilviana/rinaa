<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Tambah Pelangaran</h1>
  <br><br>
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
  <form action="<?php echo e(route('pelanggaran.store')); ?> " method="POST">
    <?php echo csrf_field(); ?>
    <label>Jenis pelanggaran</label>
    <textarea name="jenis" id="jenis" cols="50" rows="7" value="<?php echo e(old('jenis')); ?>"></textarea>
    <br>

    <br>
    <label>Konsekuensi</label><br>
    <textarea name="konsekuensi" id="konsekuensi" rows="7" cols="50" value="<?php echo e(old('konsekuensi')); ?>"></textarea>
    <br>

    <br>
    <label>Poin</label><br>
    <input type="number" name="poin" id="poin" value="<?php echo e(old('poin')); ?>"><br><br>
    <br>    

    <br>
    <input type="submit" value="Register">
  </form>
</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/pelanggaran/create.blade.php ENDPATH**/ ?>