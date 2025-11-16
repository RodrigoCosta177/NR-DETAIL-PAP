@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Stands</h1>

    <a href="{{ route('stands.create') }}" class="btn btn-primary mb-3">Adicionar Stand</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stands as $stand)
            <tr>
                <td>{{ $stand->id }}</td>
                <td>{{ $stand->marca }}</td>
                <td>{{ $stand->modelo }}</td>
                <td>{{ $stand->ano }}</td>
                <td>{{ $stand->preco }}</td>
                <td>
                    <a href="{{ route('stands.edit', $stand->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('stands.destroy', $stand->id) }}" method="POST" style="display:inline-block;">
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
