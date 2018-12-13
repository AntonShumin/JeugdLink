@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hi, {{ Auth::user()->full_name }}!</h5>
            <p class="mb-0">You are now logged in.</p>
        </div>
    </div>

@endsection
