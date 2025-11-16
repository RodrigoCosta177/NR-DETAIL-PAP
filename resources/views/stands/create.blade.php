@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Stand</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stands.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}" required>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo') }}" required>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ old('ano') }}" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco') }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('stands.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
