<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagem;
use App\Models\Veiculo;
use App\Models\Userr;

class ViagemController extends Controller
{
    public function index()
    {
        $viagens = Viagem::with('userr', 'veiculo')->get();

        return view('viagems.index', compact('viagens'));
    }

    public function create()
    {
        $userrs = Userr::all();

        $veiculos = Veiculo::all();

        return view('viagems.create', compact('userrs', 'veiculos'));
    }

    public function store(Request $request)
    {
        Viagem::create([

            'userr_id' => $request->userr_id,
            'veiculo_id' => $request->veiculo_id,
            'nova_viagem' => $request->nova_viagem,
            'lista_viagem' => $request->lista_viagem,
            'data_criacao' => $request->data_criacao,
            'distancia_km' => $request->distancia_km,
            'partida' => $request->partida,
            'destino' => $request->destino,
            'observacao' => $request->observacao,
            'conclusao' => $request->conclusao

        ]);

        return redirect('/viagems');
    }

    public function edit($id)
    {
        $viagem = Viagem::findOrFail($id);

        $userrs = Userr::all();

        $veiculos = Veiculo::all();

        return view('viagems.edit', compact(
            'viagem',
            'userrs',
            'veiculos'
        ));
    }

    public function update(Request $request, $id)
    {
        $viagem = Viagem::findOrFail($id);

        $viagem->update([

            'userr_id' => $request->userr_id,
            'veiculo_id' => $request->veiculo_id,
            'nova_viagem' => $request->nova_viagem,
            'lista_viagem' => $request->lista_viagem,
            'data_criacao' => $request->data_criacao,
            'distancia_km' => $request->distancia_km,
            'partida' => $request->partida,
            'destino' => $request->destino,
            'observacao' => $request->observacao,
            'conclusao' => $request->conclusao

        ]);

        return redirect('/viagems');
    }

    public function destroy($id)
    {
        $viagem = Viagem::findOrFail($id);

        $viagem->delete();

        return redirect('/viagems');
    }
	}
