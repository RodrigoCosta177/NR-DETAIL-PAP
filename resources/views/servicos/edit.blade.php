@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Serviço</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('servicos.update', $servico->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $servico->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required>{{ old('descricao', $servico->descricao) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco', $servico->preco) }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
