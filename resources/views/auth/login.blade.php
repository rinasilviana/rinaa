@extends('auth.layouts')

@section('content')

<h1>Login</h1>
<br><br>
<form action="{{ route ('authenticate') }}" method="post">
  @csrf
  <label>Email Address</label><br>
  <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>
  <label>Password</label>
  <input type="password" name="password" id="password"><br><br>
  <input type="submit" value="login">
</form>
@endsection