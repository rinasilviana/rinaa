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
  <a href="{{ route('akun.index') }}">kembali</a><br><br>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as  $error)
      <li>{{ $error }}</li>
      @endforeach 
    </ul>
  </div>
  @endif
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif
  <form action="{{ route('akun.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h2>Data Akun</h2>
    <label>Nama Lengkap</label><br><br>
    <input type="text" id="name" name="name" value="{{ $akun->name }}"> <br><br>
    <label>Hak Akses</label>
    <select name="usertype" required>
      <option {{ 'admin' == $akun->usertype ? 'selected' : '' }} value="admin">Admin</option>
      <option {{ 'ptk' == $akun->usertype ? 'selected' : '' }} value="ptk">PTK</option>
    </select>
    <button type="submit">simpan data</button>
    <br><br>
  </form>
  <form action="{{ route('updateEmail', $akun->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Email Address</label><br>
    <input type="text" id="email" name="email" value="{{ $akun->email }}"> <br><br>
    <button type="submit">simpan email</button>
    <br><br>
  </form>
  <form action="{{ route('updatePassword', $akun->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
</html>