@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-4 col-center mx-auto">
        <form role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" name="first_name" id="first_name" placeholder="First name" class="form-control @if($errors->has('first_name')) is-invalid @endif" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" id="last_name" placeholder="First name" class="form-control @if($errors->has('last_name')) is-invalid @endif" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" placeholder="Email address" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control @if($errors->has('password')) is-invalid @endif">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

@endsection
