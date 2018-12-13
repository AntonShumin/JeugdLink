@extends('layouts.app')

@section('content')

    <div class="col-md-6 col-lg-4 col-center mx-auto">
        <form role="form" method="POST" action="{{ Localization::localizeURL('/password/reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
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
            <button type="submit" class="btn btn-primary">Reset password</button>
        </form>
    </div>

@endsection
