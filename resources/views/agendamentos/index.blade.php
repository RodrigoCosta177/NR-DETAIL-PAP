@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Agendamentos</h1>

    <a href="{{ route('agendamentos.create') }}" class="btn btn-primary mb-3">Adicionar Agendamento</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Serviço</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
            <tr>
                <td>{{ $agendamento->id }}</td>
                <td>{{ $agendamento->cliente->nome ?? '' }}</td>
                <td>{{ $agendamento->servico->nome ?? '' }}</td>
                <td>{{ $agendamento->data }}</td>
                <td>{{ $agendamento->hora }}</td>
                <td>
                    <a href="{{ route('agendamentos.edit', $agendamento->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('agendamentos.destroy', $agendamento->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tens a certeza?')">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
