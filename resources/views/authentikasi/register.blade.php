@extends('layouts.main-register')
@section('container')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          </div>  
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register</h5>
            </div>
            <div class="card-body">
              <form role="form" action="{{Route('register.authentikasi')}}" method="post">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" name="nama" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password">
                </div>
                <div class="mb-3">
                  <input type="number" class="form-control" placeholder="No HP" name="no_hp" aria-label="No HP">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Address" mame="alamat" aria-label="Address">
                </div>
                <div class="mb-3">
                  <input type="file" class="form-control" placeholder="Picture" name="foto" aria-label="Picture">
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="/login" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection