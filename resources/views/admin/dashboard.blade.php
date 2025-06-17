<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <a class="nav-link" href="{{ route('siswa.index') }}">Data siswa</a>
  <a class="nav-link" href="{{ route('akun.index') }}">Data akun</a>
  <a class="nav-link" href="{{ route('pelanggaran.index') }}">Data pelanggaran</a>
  <a href="{{ route ('logout') }}" onclick="event.preventDefault(); document.getElemenById)('logout-form').submit();">Logout</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
  </form>
  <h1>Dashboard Admin</h1>
  @if ($message = Session::get('succes'))
  <p>{{ $message }}</p>
  @else
  <p>You are logged in </p>
  @endif

</body>
<footer>
  
</footer>
</html>