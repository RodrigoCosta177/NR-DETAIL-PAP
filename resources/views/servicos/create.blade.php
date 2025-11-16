@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Serviço</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('servicos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required>{{ old('descricao') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco') }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

