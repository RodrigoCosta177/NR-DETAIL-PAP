<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Servico;

class ClienteController extends Controller
{
    // Mostrar lista de clientes
    public function index()
    {
        $clientes = Cliente::with('servico')->get(); // Puxa também os serviços
        return view('clientes.index', compact('clientes'));
    }

    // Formulário para criar novo cliente
    public function create()
    {
        $servicos = \App\Models\Servico::all(); // pega todos os serviços do banco
        return view('clientes.create', compact('servicos'));
    }

    // Guardar novo cliente na BD
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'servico_id' => 'required|exists:servicos,id',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }

    // Formulário para editar cliente existente
    public function edit(Cliente $cliente)
    {
        $servicos = Servico::all();
        return view('clientes.edit', compact('cliente', 'servicos'));
    }

    // Atualizar cliente na BD
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'servico_id' => 'required|exists:servicos,id',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    // Apagar cliente da BD
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente removido com sucesso!');
    }
}
