@extends('layouts.app')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container mt-4">
    <h2 class="mb-4">List Users</h2>
    <a href="{{ url('admin/home') }}" class="btn btn-outline-danger">Back</a><br><br>
    @forelse($users as $user)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">
                ID: {{ $user->id }} <br>
                Email: {{ $user->email }}<br>
                City: {{ $user->city }}<br>
                Role: {{ $user->role }}
            </p>

            <div class="btn-group-toggle" role="group">
                <a href="{{ url('users/show', $user->id) }}" class="btn btn-outline-primary">Show</a>
                <a href="{{ url('users/edit', $user->id) }}" class="btn btn-outline-warning">Edit</a>
                <form action="{{ url('users/destroy', $user->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-warning">
        <p class="mb-0">Nenhum usuário encontrado!</p>
    </div>
    @endforelse

    {!! $users->links('pagination::bootstrap-4') !!}
</div>

@endsection