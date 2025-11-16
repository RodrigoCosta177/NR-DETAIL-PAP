<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\Servico;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::with(['cliente', 'servico'])->get();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('agendamentos.create', compact('clientes', 'servicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'servico_id' => 'required|exists:servicos,id',
            'data' => 'required|date',
            'hora' => 'required'
        ]);

        Agendamento::create($request->all());
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso!');
    }

    public function edit(Agendamento $agendamento)
    {
        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('agendamentos.edit', compact('agendamento', 'clientes', 'servicos'));
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'servico_id' => 'required|exists:servicos,id',
            'data' => 'required|date',
            'hora' => 'required'
        ]);

        $agendamento->update($request->all());
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento atualizado com sucesso!');
    }

    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento eliminado com sucesso!');
    }
}
