
@section('title')
    Login
@endsection

@extends('layouts.app')

@section('content')


<section class="my-5">
<div class="container" id="container">
    <div class="overlay-container">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" class="login_form" action="{{ route('login') }}">
            @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="inputEmail3" name="email" :value="old('email')" required="true">
          {{-- Validation  --}}
            @if ($errors->has('email'))
                <p class="text-danger">
                    {{ $errors->first('email') }}
                </p>
            @endif
            {{-- end of validation  --}}
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword3" name="password" required autocomplete="current-password">
          {{-- Validation  --}}
            @if ($errors->has('password'))
                <p class="text-danger">
                    {{ $errors->first('password') }}
                </p>
            @endif
            {{-- end of validation  --}}
        </div>

        <div>
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <button type="submit" class="btn btn-outline-primary" style="margin-left: 100%;">Login</button>
        </div>
      </form>
    </div>

    <div class="form-container log-in-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <h1>Merry Meal </h1>
        </div>
      </div>
    </div>

</div>

</section>

@endsection

