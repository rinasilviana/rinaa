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
  <a href="{{ route ('siswa.index') }}">Kembali</a>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h2>Data siswa</h2>
    <label>Foto siswa</label><br>
    <img src="{{ asset('storage/siswas/'.$siswa->image) }}" width="120px" height="120px" alt=""><br><br>
    <input type="file" name="image" accept="image/*"> <br><br>
    <label>NIS Siswa</label>
    <input type="text"name="nis" value="{{ old('nis',$siswa->nis) }}"> <br><br>
    <label>Nama lengkap</label>
    <input type="text" id="name" name="name" value="{{ old('name',$siswa->name) }}" required> <br><br>
    <label> Tingkatan</label><br>
    <select name="tingkatan" required>
      <option {{ 'X' == $siswa->tingkatan  ? 'selected' : '' }} value="X"> X </option>
      <option  {{ 'XI'== $siswa->tingkatan  ? 'selected' : '' }} value="XI"> XI </option>
      <option  {{ 'XII' == $siswa->tingkatan  ? 'selected' : '' }} value="XII"> XII </option>
    </select>
    <br><br>  
    <label>Jurusan</label><br>
    <select name="jurusan" required>
      <option  {{ 'RPL' == $siswa->jurusan  ? 'selected' : '' }} value="RPL"> RPL </option>
      <option  {{  'TBSM' ==$siswa->jurusan  ? 'selected' : '' }} value="TBSM"> TBSM </option>
      <option  {{ 'TKJ' ==$siswa->jurusan  ? 'selected' : '' }} value="TKJ"> TKJ </option>
      <option  {{  'TOI' ==$siswa->jurusan  ? 'selected' : '' }} value="TOI"> TOI </option>
      <option  {{ 'DKV' ==$siswa->jurusan  ? 'selected' : '' }} value="DKV"> DKV </option>
      </select>
      <br><br>
    <label>Kelas</label><br>
    <select name="kelas" required>
      <option {{ '1' == $siswa->kelas  ? 'selected' : '' }} value="1"> 1 </option>
      <option {{ '2' == $siswa->kelas  ? 'selected' : '' }} value="2"> 2 </option>
      <option {{ '3' == $siswa->kelas  ? 'selected' : '' }} value="3"> 3 </option>  
      <option {{ '4' == $siswa->kelas  ? 'selected' : '' }} value="4"> 4 </option>
    </select>
    <br><br>
    <label>No Hp</label>
    <input type="text" name="hp" value="{{ old('hp',$siswa->hp) }}" required> <br><br>

    <label>Status</label>
    <select name="status" required>
      <option {{ '1' == $siswa->status  ? 'selected' : '' }} value="1"> Aktif </option>
      <option {{ '0' == $siswa->status  ? 'selected' : '' }} value="0"> Non Aktif </option>
    </select><br><br>
    <button type="submit">simpan data</button>
    <button type="reset">reset</button>
</body>
</html>