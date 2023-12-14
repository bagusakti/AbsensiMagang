@extends('auth.partials.main')

@section('content')
    <div class="login form">
        <header>{{ $title }}</header>
        <form action="{{ route('UserCreate') }}" method="post">
          @csrf
          {{-- <input type="text" for="nama" name="nama" placeholder="Masukkan Nama">
          <input type="text" for="asal" name="asal" placeholder="Masukkan Asal Sekolah">
          <input type="email" for="email" name="email" placeholder="Masukkan Email">
          <input type="password" for="password" name="password" placeholder="Masukkan Password">
          <input type="button" class="button" value="Login"> --}}
          <div>
            <label for="name" >Masukkan Nama</label>
            <input type="text" name="name" class="form-control" value="{{ Session::get('name') }}" placeholder="Nama" required="" />
          </div>
          <div>
            <label for="asal" >Masukkan Asal Sekolah</label>
            <input type="text" name="asal" class="form-control" value="{{ Session::get('asal') }}" placeholder="Asal Sekolah" required="" />
          </div>
          <div>
            <label for="email" >Masukkan Email</label>
            <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}" placeholder="Email" required="" />
          </div>
          <div>
            <label for="password" >Masukkan Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
          </div>
          <div style="margin-left: 39%;">
            <button type="submit" class="btn btn-success">Daftar</button>
            {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
          </div>
        </form>

        <div class="signup">
          <span class="signup">Sudah Memiliki Akun ?
          <a href="{{ route('UserAuth') }}"><label for="check">Login</label></a>
          </span>
        </div>
      </div>    
@endsection
