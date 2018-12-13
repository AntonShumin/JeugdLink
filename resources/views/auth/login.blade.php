@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-4 col-center mx-auto">
        <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" placeholder="Email address" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control @if($errors->has('password')) is-invalid @endif">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input" @if(old('remember')) checked="checked" @endif>
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                Forgot your password?
            </a>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

@endsection
