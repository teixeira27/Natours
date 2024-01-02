@extends('layouts.app')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container mt-4">
    <h2 class="mb-4">List Spots</h2>
    <a href="{{ url('admin/home') }}" class="btn btn-outline-danger">Back</a><br><br>
    @forelse($spots->chunk(2) as $chunk)
    <div class="row mb-3">
        @foreach($chunk as $spot)
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $spot->name }}</h5>

                    <!-- Adicione a classe "spot-image" e o estilo max-width ao elemento img -->
                    <img class="spot-image img-thumbnail" style="max-width: 200px;" src="{{ asset('storage/images/' . $spot->path) }}" alt="{{ $spot->name }}">

                    <p class="card-text">
                        ID: {{ $spot->id }} <br>
                        Cost: {{ $spot->cost }}€<br>
                        City: {{ $spot->city }}<br>
                        Description: {{ $spot->description }}
                    </p>

                    <div class="btn-group-toggle" role="group">
                        <a href="{{ url('spots/show', $spot->id) }}" class="btn btn-outline-primary">Show</a>
                        <a href="{{ url('spots/edit', $spot->id) }}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{ url('spots/destroy', $spot->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Tem certeza?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @empty
    <div class="alert alert-warning">
        <p class="mb-0">Nenhum spot encontrado!</p>
    </div>
    @endforelse

    {!! $spots->links('pagination::bootstrap-4') !!}
</div>

@endsection