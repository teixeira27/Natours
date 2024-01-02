@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Dashboard</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p class="lead">{{ __('Welcome, Admin! You are logged in.') }}</p>
                    <a href="{{ url('/users') }}" class="btn btn-primary btn-lg mt-3">Manage Users</a>
                    <a href="{{ url('/spots') }}" class="btn btn-primary btn-lg mt-3">Manage Spots</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection