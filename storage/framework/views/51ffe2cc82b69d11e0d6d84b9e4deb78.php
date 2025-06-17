<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style type="text/css">
  table{
    width: 100%;
    border-collapse: collapse;
    
  }
  tabel,
  th,
  td{
    border: 1px solid;
  }
  </style>
</head>
<body>
  <h1>Edit siswa</h1>
  <a href="<?php echo e(route ('siswa.index')); ?>">Kembali</a>
  <?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
  <form action="<?php echo e(route('siswa.update', $siswa->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <h2>Data siswa</h2>
    <label>Foto siswa</label><br>
    <img src="<?php echo e(asset('storage/siswas/'.$siswa->image)); ?>" width="120px" height="120px" alt=""><br><br>
    <input type="file" name="image" accept="image/*"> <br><br>
    <label>NIS Siswa</label>
    <input type="text"name="nis" value="<?php echo e(old('nis',$siswa->nis)); ?>"> <br><br>
    <label>Nama lengkap</label>
    <input type="text" id="name" name="name" value="<?php echo e(old('name',$siswa->name)); ?>" required> <br><br>
    <label> Tingkatan</label><br>
    <select name="tingkatan" required>
      <option <?php echo e('X' == $siswa->tingkatan  ? 'selected' : ''); ?> value="X"> X </option>
      <option  <?php echo e('XI'== $siswa->tingkatan  ? 'selected' : ''); ?> value="XI"> XI </option>
      <option  <?php echo e('XII' == $siswa->tingkatan  ? 'selected' : ''); ?> value="XII"> XII </option>
    </select>
    <br><br>  
    <label>Jurusan</label><br>
    <select name="jurusan" required>
      <option  <?php echo e('RPL' == $siswa->jurusan  ? 'selected' : ''); ?> value="RPL"> RPL </option>
      <option  <?php echo e('TBSM' ==$siswa->jurusan  ? 'selected' : ''); ?> value="TBSM"> TBSM </option>
      <option  <?php echo e('TKJ' ==$siswa->jurusan  ? 'selected' : ''); ?> value="TKJ"> TKJ </option>
      <option  <?php echo e('TOI' ==$siswa->jurusan  ? 'selected' : ''); ?> value="TOI"> TOI </option>
      <option  <?php echo e('DKV' ==$siswa->jurusan  ? 'selected' : ''); ?> value="DKV"> DKV </option>
      </select>
      <br><br>
    <label>Kelas</label><br>
    <select name="kelas" required>
      <option <?php echo e('1' == $siswa->kelas  ? 'selected' : ''); ?> value="1"> 1 </option>
      <option <?php echo e('2' == $siswa->kelas  ? 'selected' : ''); ?> value="2"> 2 </option>
      <option <?php echo e('3' == $siswa->kelas  ? 'selected' : ''); ?> value="3"> 3 </option>  
      <option <?php echo e('4' == $siswa->kelas  ? 'selected' : ''); ?> value="4"> 4 </option>
    </select>
    <br><br>
    <label>No Hp</label>
    <input type="text" name="hp" value="<?php echo e(old('hp',$siswa->hp)); ?>" required> <br><br>

    <label>Status</label>
    <select name="status" required>
      <option <?php echo e('1' == $siswa->status  ? 'selected' : ''); ?> value="1"> Aktif </option>
      <option <?php echo e('0' == $siswa->status  ? 'selected' : ''); ?> value="0"> Non Aktif </option>
    </select><br><br>
    <button type="submit">simpan data</button>
    <button type="reset">reset</button>
</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/siswa/edit.blade.php ENDPATH**/ ?>