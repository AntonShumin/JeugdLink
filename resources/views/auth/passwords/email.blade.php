@extends('layouts.app')

<!-- Main Content -->
@section('content')

    <div class="col-md-6 col-lg-4 col-center mx-auto">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" id="email" placeholder="Email address" class="form-control @if($errors->has('email')) is-invalid @endif">
            </div>
            <button type="submit" class="btn btn-primary">Send password reset email</button>
        </form>
    </div>

@endsection
