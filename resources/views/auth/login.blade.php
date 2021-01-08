@extends('layouts.app')

@section('title',  __('Login'))

@section('assets')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5 py-5">
    <div class="row justify-content-center">
        <div class="card box bg-none">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autocomplete="email" placeholder="E-Mail Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <div class="col-md-4 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                @if (Route::has('password.request'))
                    <a class="forgot text-muted" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <button type="submit" class="btn btn-primary submit">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
