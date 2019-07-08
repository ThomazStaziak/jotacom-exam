<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    public function index()
    {
        return view('hotsite');
    }

    public function create(Request $request)
    {   
        $request->validate([
            'nome' => 'required|max:100',
            'email' => 'required|unique:leads|max:100',
            'telefone' => 'max:15',
        ]);

        $created = Lead::create([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('telefone'),
            'state' => $request->input('estado'),
            'city' => $request->input('cidade'),
            'contact_time' => $request->input('horario_contato'),
        ]);

        if ($created) return view('hotsite')->with('message', 'Mensagem enviada com sucesso!');

        return view('hotsite');
    }
}
