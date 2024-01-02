@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Spot - {{ $spot->id }}</h2>
                <a class="btn btn-primary" href="{{ url('/spots') }}">Back</a>
            </div>
            <hr class="mt-2">
        </div>
    </div>

    <form action="{{ url('spots/update/'.$spot->id) }}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name:</h5>
                        <div class="form-group">
                            <input type="text" name="name" value="{{ $spot->name }}" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cost:</h5>
                        <div class="form-group">
                            <input type="number" name="cost" value="{{ $spot->cost }}" class="form-control" placeholder="€" min="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">City:</h5>
                        <div class="form-group">
                            <input type="text" name="city" value="{{ $spot->city }}" class="form-control" placeholder="City">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Description:</h5>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Write the description of the spot" rows="4">{{ $spot->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <label for="image">Alterar imagem:</label>
                        <img class="spot-image img-thumbnail" src="{{ asset('storage/images/' . $spot->path) }}" alt="{{ $spot->name }}" style="max-width: 200px;">
                        <input type="file" name="image" id="image">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
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