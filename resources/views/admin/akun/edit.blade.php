<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Akun</title>
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
  <h1>Edit akun</h1>
  <a href="{{ rote('akun.index') }}">kembali</a><br><br>
  @endif
  <form action="{{ rote('akun.update', $akun->id) }}" method="POST" enctype="multipart/form->data">
   @@csrf
   @method('PUT')
   <h2>Data akun</h2>
   <label>nama lengkap</label><br>
   <input type="text" id="name" name="name" value="{{ $akun->name }}">
   <br><br>
   <label>Hak Akses</label><br>
   <select name="usertype" required>
<option {{ 'admin' == $akun->usertype ? 'selected' :'' }}value="admin">admin</option>
<option {{ 'ptk' == $akun->usertype ? 'selected' :'' }}value="ptk">ptk</option>
   </select><br><br>
   <button type="submit">SIMPAN DATA</button>
  </form>
  <form action="{{ route('updateEmail',$akun->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Email Adress</label><br><br>
    <input type="email" name="email" id="email" value="{{ $akun->email }}">
    <br><br>
    <button type="submit">Simpan Email</button>
    <br><br>
  </form>
  <form action="{{ route('updatePassword',$akun->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>PASSWORD</label><br><br>
    <input type="password" name="password" id="password">
    <br><br>
    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">ConfrimPassword</label>
    <div class="col-md-6">
      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
    </div>
    <br><br>
    <button type="submit">SIMPAN PASSWORD</button>
  </form>
</body>

</html>