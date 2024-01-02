@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit User - {{ $user->id }}</h2>
                <a class="btn btn-primary" href="{{ url('/users') }}">Back</a>
            </div>
            <hr class="mt-2">
        </div>
    </div>

    <form action="{{ url('users/update/'.$user->id) }}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name:</h5>
                        <div class="form-group">
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Email:</h5>
                        <div class="form-group">
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">City:</h5>
                        <div class="form-group">
                            <input type="text" name="city" value="{{ $user->city }}" class="form-control" placeholder="Cidade">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Role:</h5>
                        <div class="form-group">
                            <select name="role" class="form-control">
                                <option value="guest" {{ $user->role == 'guest' ? 'selected' : '' }}>Guest</option>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection