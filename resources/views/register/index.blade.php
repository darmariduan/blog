@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
             
          
            
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid
                @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            </div>  
                @enderror
                
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username')is-invalid
                @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            </div>  
                @enderror
              

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid
                @enderror" id="email" placeholder="user@mail.com" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            </div>  
                @enderror
             

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid
                @enderror" id="password" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            </div>  
                @enderror
              
            
              
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
          
              {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
            </form>
            <small class="d-block text-center mt-4">Already Registered? <a href="/login">Log in</a></small>
          </main>
    </div>
</div>

@endsection