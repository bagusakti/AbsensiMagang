@extends('auth.partials.main')

@section('content')
    <div class="login form">
        <header>{{ $title }}</header>
        <form action="{{ route('UserLogin') }}" method="post">
          @csrf
          <div>
            <label for="email" >Masukkan Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " value="{{ Session::get('email') }}" placeholder="Email" required="" />
            @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
          <div>
            <label for="password" >Masukkan Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required="" />
            @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
          </div>
          <div style="margin-left: 39%;">
            <button type="submit" class="btn btn-success submit">Log in</button>
            {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
          </div>
        </form>
        <div class="signup">
          <span class="signup">Belum Memiliki Akun ?
          <a href="{{ route('UserRegister') }}"><label for="check">Daftar</label></a>
          </span>
        </div>
      </div>    
@endsection
