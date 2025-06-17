<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <a class="nav-link" href="<?php echo e(route('siswa.index')); ?>">Data siswa</a>
  <a class="nav-link" href="<?php echo e(route('akun.index')); ?>">Data akun</a>
  <a class="nav-link" href="<?php echo e(route('pelanggaran.index')); ?>">Data pelanggaran</a>
  <a href="<?php echo e(route ('logout')); ?>" onclick="event.preventDefault(); document.getElemenById)('logout-form').submit();">Logout</a>
  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
  </form>
  <h1>Dashboard Admin</h1>
  <?php if($message = Session::get('succes')): ?>
  <p><?php echo e($message); ?></p>
  <?php else: ?>
  <p>You are logged in </p>
  <?php endif; ?>

</body>
<footer>
  
</footer>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>