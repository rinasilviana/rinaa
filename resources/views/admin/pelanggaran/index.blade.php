<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Data pelanggaran</h1>
  <a href="{{ route('admin\dashboard') }}">Menu Utama</a>
  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
  <br><br>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
  </form>
  <br><br>
  <form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="cari">
  </form>
  <br><br>
  <a href="{{ route('pelanggaran.create') }}">Tambah pelanggaran</a>
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif
  <table class="table">
    <tr>
      <th>jenis</th>
      <th>konsekuensi</th>
      <th>poin</th>
      <th>aksi</th>
      </tr>
       @forelse ($pelanggarans as $pelanggaran)
       <tr>
        <td>{{ $pelanggaran->jenis }}</td>
        <td>{{ $pelanggaran->konsekuensi }}</td>
        <td>{{ $pelanggaran->poin }}</td>
        <td>
          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pelanggaran.destroy', $pelanggaran->id) }}" method="POST">
            <a href="{{ route('pelanggaran.edit', $pelanggaran->id) }}" class="btn btn-sm btn-primary">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit">HAPUS</button>
          </form>
        </td>
       </tr>
        @empty
        <tr>
          <td>
            <p>Data tidak ditemukan</p>
          </td>
          <td>
            <a href="{{ route('pelanggaran.index') }}">kembali</a>
          </td>
        </tr>
  @endforelse
  </table>
  {{ $pelanggarans->links() }}
</body>
</html>