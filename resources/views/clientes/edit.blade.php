@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $cliente->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $cliente->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="servico_id" class="form-label">Serviço</label>
            <select class="form-control" id="servico_id" name="servico_id" required>
                <option value="">Seleciona um serviço</option>
                @foreach($servicos as $servico)
                    <option value="{{ $servico->id }}" {{ old('servico_id', $cliente->servico_id) == $servico->id ? 'selected' : '' }}>
                        {{ $servico->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
