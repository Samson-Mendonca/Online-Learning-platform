@extends('layout.app')
<link href="../css/app2.css" rel="stylesheet">
@section('content')
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">{{ __('Register') }}</h5>
            <form method="POST" action="{{ route('register') }}" class="form-signin">
            @csrf
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control @error('name') is-invalid @enderror" placeholder="Username" required name="name" value="{{ old('name') }}" autofocus>
                <label for="inputUserame">{{ __('Name') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>





              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email address" required>
                <label for="inputEmail"> {{ __('E-Mail Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password" required>
                <label for="inputPassword">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              
              
              
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password" >
                <label for="inputConfirmPassword">{{ __('Confirm Password') }}</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"> {{ __('Register') }}</button>
              <a class="d-block text-center mt-2 small" href="/login"> {{ __('Sign in') }}</a>
              {{-- <hr class="my-4"> --}}
              {{-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button> --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection
