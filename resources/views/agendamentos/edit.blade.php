@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Agendamento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('agendamentos.update', $agendamento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $agendamento->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="servico_id" class="form-label">Serviço</label>
            <select name="servico_id" id="servico_id" class="form-control" required>
                @foreach($servicos as $servico)
                    <option value="{{ $servico->id }}" {{ $agendamento->servico_id == $servico->id ? 'selected' : '' }}>{{ $servico->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ $agendamento->data }}" required>
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" name="hora" id="hora" class="form-control" value="{{ $agendamento->hora }}" required>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('agendamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
