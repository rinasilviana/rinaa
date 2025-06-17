<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Register</h1>
  <br><br>
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
   <form action="{{  route('akun.store') }}" method="POST">
    @csrf
    <label>Nama Lengkap</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"> <br>

    <br>
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"> <br>
    
    <br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"> <br>
    <br>

    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confrim Password</label><br>
    <div class="col-md-6">
      <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
    </div>
    <label>Hak Akses</label>
    <select name="usertype" required>
      <option value=""> Pilih Hak Akses</option>
      <option value="admin"> Admin </option>
      <option value="ptk"> PTK </option>
    </select>
    <br><br>
    <input type="submit" value="Register">
   </form>
</body>
</html>