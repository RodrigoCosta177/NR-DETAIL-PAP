@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Stand</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stands.update', $stand->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $stand->marca) }}" required>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo', $stand->modelo) }}" required>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ old('ano', $stand->ano) }}" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco', $stand->preco) }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('stands.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
