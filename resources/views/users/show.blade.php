@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Detalhes do Usuário</h2>
                <a class="btn btn-primary" href="{{ url('/users') }}">Voltar</a>
            </div>
            <hr class="mt-2">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nome:</h5>
                    <p class="card-text">{{ $user->name }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Email:</h5>
                    <p class="card-text">{{ $user->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cidade:</h5>
                    <p class="card-text">{{ $user->city }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Role:</h5>
                    <p class="card-text">{{ $user->role }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12">
            <h2>Spots Criados</h2>
            @if(count($user->spots) > 0)
            @foreach($user->spots as $spot)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $spot->name }}</h5>
                    <p class="card-text">Custo: {{ $spot->cost }}</p>
                    <p class="card-text">Cidade: {{ $spot->city }}</p>
                    <p class="card-text">Descrição: {{ $spot->description }}</p>
                </div>
            </div>
            @endforeach
            @else
            <p>O usuário ainda não criou nenhum spot.</p>
            @endif
        </div>
    </div>
</div>
@endsection