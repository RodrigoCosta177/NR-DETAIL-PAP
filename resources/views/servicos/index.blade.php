@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Serviços</h1>

    <a href="{{ route('servicos.create') }}" class="btn btn-primary mb-3">Adicionar Serviço</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicos as $servico)
            <tr>
                <td>{{ $servico->id }}</td>
                <td>{{ $servico->nome }}</td>
                <td>{{ $servico->descricao }}</td>
                <td>{{ $servico->preco }}</td>
                <td>
                    <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline-block;">
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
