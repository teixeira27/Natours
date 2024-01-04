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
                    <h5 class="card-title">Compra</h5>
                    <form action="{{ route('checkout.session', ['spot' => $spot->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success btn-block">Comprar</button>
                    </form>
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
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    @if(auth()->check())
                    @if($spot->isFavoritedBy(auth()->user()))
                    <form action="{{ route('favorites.remove', ['spot' => $spot->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary btn-block">Remover dos Favoritos</button>
                    </form>
                    @else
                    <form action="{{ route('favorites.add', ['spot' => $spot->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-block">Favoritar</button>
                    </form>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('comments.store', ['spot' => $spot->id]) }}" method="POST">
                        @csrf

                        <label for="comment">Comentário:</label>
                        <textarea name="comment" id="comment" rows="3" required></textarea>

                        <label for="rating">Avaliação (1-5):</label>
                        <input type="number" name="rating" id="rating" min="1" max="5" required>

                        <button type="submit" class="btn btn-primary btn-block">Enviar Comentário</button>
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
                                <form action="{{ route('checkout.session', ['spot' => $spot->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="slot_id" value="{{ $slot->id }}">
                                    <input type="number" name="quantity" id="quantity" min="0" max="{{ $slot->quantity }}" maxlength="3">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary btn-block">Comprar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
        <div class="col-md-12 mt-4">
            <h3>Rating Spot: {{ number_format($spot->averageRating(), 2) }}/5</h3>
            <h5>Comentários do Spot:</h5>

            @if($comments->isEmpty())
            <p>Nenhum Comentário para este spot.</p>
            @else

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Comentário</th>
                            <th scope="col">Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->userName() }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>{{ $comment->rating }}</td>
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