@extends('layouts.app')

@section('title', __('Register'))


@section('assets')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5 py-5">
    <div class="row justify-content-center">
        <div class="card box bg-none">
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-primary submit">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
