@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="mb-3">Obrigado!</h2>
            <h3 class="mb-3">Natours orienta a sua viagem!</h3>
            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
        </div>
    </div>
</div>
@endsection