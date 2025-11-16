<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\StandController;

// Página inicial → redireciona para serviços
Route::get('/', function () {
    return redirect()->route('servicos.index');
});

// Rotas Resource
Route::resource('servicos', ServicoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('agendamentos', AgendamentoController::class);
Route::resource('stands', StandController::class);
