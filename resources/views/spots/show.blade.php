@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Detalhes do Spot</h2>
                <a class="btn btn-primary" href="{{ url('/spots') }}">Voltar</a>
            </div>
            <hr class="mt-2">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Criado por</h5>
                    <p class="card-text"><strong>ID:</strong> {{ $spot->user->id }}</p>
                    <p class="card-text"><strong>Nome:</strong> {{ $spot->user->name }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $spot->user->email }}</p>
                    <p class="card-text"><strong>Cidade:</strong> {{ $spot->user->city }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nome</h5>
                    <p class="card-text">{{ $spot->name }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Custo</h5>
                    <p class="card-text">{{ $spot->cost }}€</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cidade</h5>
                    <p class="card-text">{{ $spot->city }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Descrição</h5>
                    <p class="card-text">{{ $spot->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Imagem</h5>
                    <img class="spot-image img-thumbnail" src="{{ asset('storage/images/' . $spot->path) }}" alt="{{ $spot->name }}" style="max-width: 200px;">
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gerar PDF</h5>
                    <form action="{{ route('generate.pdf', ['spot' => $spot->id]) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-block">PDF</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <h3>Slots do Spot</h3>

            @if($slots->isEmpty())
            <p>Nenhum slot disponível para este spot.</p>
            @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Hora de Início</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Quantidade Disponível</th>
                            <th scope="col">Quantidade Pretendida</th>
                            <th scope="col">Compra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slots as $slot)
                        <tr>
                            <td>{{ $slot->start_time }}</td>
                            <td>{{ $spot->duration }}</td>
                            <td>{{ $slot->quantity }}</td>
                            <td>
                                <form action="{{ route('checkout.session', ['slot' => $slot->id, 'quantity' => $quantity_booking]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="slot_id" value="{{ $slot->id }}">
                                    <input type="number" name="quantity_booking" id="quantity_booking" min="0" max="{{ $slot->quantity }}" maxlength="3" value="1">
                            </td>
                            <td>
                                <button type="submit">Comprar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection