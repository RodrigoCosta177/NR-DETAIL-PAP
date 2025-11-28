@extends('layouts.app')

@section('content')
<div class="text-center py-20">
    <h1 class="text-5xl font-bold text-black">Bem-vindo à NR DETAIL</h1>
    <p class="text-xl mt-4 text-gray-600">O melhor cuidado para o teu carro.</p>

    <a href="/agendamentos/create" 
       class="mt-6 inline-block bg-yellow-400 text-black px-6 py-3 rounded-lg text-lg font-semibold hover:bg-yellow-500">
        Marcar Serviço
    </a>
</div>
@endsection
