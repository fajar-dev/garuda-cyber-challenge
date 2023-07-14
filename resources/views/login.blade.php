@extends('include/template')
@section('content')

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5 my-5">
        <div class="card my-5">
          <div class="card-body py-4 px-4">
            <form action="{{route('login_action')}}" method="POST">
              @csrf
              <h3 class="fw-bold mb-0 fs-2 mb-2">Sign In</h3>
              <p class="mb-4">Sign in to member access</p>
              @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <div  class="d-flex justify-content-between my-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                  <label class="form-check-label" for="accountActivation"><small>Remember Me</small> </label>
                </div>
                <a href="#"><small>Forgot Password ?</small></a>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" >Sign In</button>
              <div class="text-center">
                <small class="text-muted text-center">don't have an account? <a href="{{route('register')}}">Sign Up</a></small>
              </div>
              <hr class="my-4">
              <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
              <a class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" href="#">
                <i class="bi bi-google"></i>
                Sign in with Google
              </a>
      
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection