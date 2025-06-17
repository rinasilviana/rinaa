<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Tambah siswa</h1>
  <a href="<?php echo e(route('siswa.index')); ?>">kembali</a><br><br>
  <?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
<form action="<?php echo e(route('siswa.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
<h2>
  Akun siswa
</h2>
 <label>Nama lengkap</label>
<input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"> <br><br>
<label>Email Addres</label>
<input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"> <br><br>
<label>Password</label>
<input type="password" id="password" name="password"> <br><br>
<label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">confrim password</label>
<div class="col-md-6">
  <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
</div>
<br><br>
<h2>Data siswa</h2>
<label>Foto siswa</label>
<input type="file" name="image" accept="image/*" required> <br><br>
<label>NIS Siswa</label>
<input type="text"name="nis" value="<?php echo e(old('nis')); ?>"> <br><br>
<label> Tingkatan</label><br>
<select name="tingkatan" required>
  <option value=""> Pilih Tingkatan</option>
  <option value="X"> X </option>
  <option value="XI"> XI </option>
  <option value="XII"> XII </option>
</select>
<br><br>
<label>Jurusan</label><br>
<select name="jurusan" required>
  <option value=""> Pilih Jurusan</option>
  <option value="RPL"> RPL </option>
  <option value="TBSM"> TBSM </option>
  <option value="TKJ"> TKJ </option>
  <option value="TOI"> TOI </option>
  <option value="DKV"> DKV </option>
  </select>
<br><br>
<label>Kelas</label><br>
<select name="kelas" required>
  <option value=""> Pilih Kelas</option>
  <option value="1"> 1 </option>
  <option value="2"> 2 </option>
  <option value="3"> 3 </option>
  <option value="4"> 4 </option>
</select>
<br><br>
<label>No Hp</label>
<input type="text" name="hp" value="<?php echo e(old('hp')); ?>" required><br><br>
<button type="submit">SIMPAN DATA</button>
<button type="reset">RESET FORM</button>
</form>
</body>
</html><?php /**PATH C:\laragon\www\rinaav2\resources\views/admin/siswa/create.blade.php ENDPATH**/ ?>