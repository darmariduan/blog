@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          
        </button>
      </div>
@endif


  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{ session('loginError') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      
    </button>
  </div>
@endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="post">
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
             @csrf
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid
                  
                @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                {{-- <label for="floatingInput">Email address</label> --}}
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                {{-- <label for="floatingPassword">Password</label> --}}
              </div>
          
              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> --}}
              <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
              {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
            </form>
            <small class="d-block text-center mt-4">Not Registered? <a href="/register">Register Now!</a></small>
          </main>
    </div>
</div>

@endsection