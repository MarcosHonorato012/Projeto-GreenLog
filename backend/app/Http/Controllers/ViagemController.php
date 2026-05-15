<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Viagem;
use App\Models\Veiculo;

class ViagemController extends Controller
{

    public function index()
    {

        $viagems = Viagem::all();

        $veiculos = Veiculo::all();

        return view(
            'viagems.index',
            compact(
                'viagems',
                'veiculos'
            )
        );

    }

    public function store(Request $request)
    {

        Viagem::create([

            'veiculo_id' => $request->veiculo_id,

            'data_criacao' => $request->data_criacao,

            'partida' => $request->partida,

            'destino' => $request->destino,

            'distancia_km' => $request->distancia_km,

            'conclusao' => $request->conclusao,

            'observacao' => $request->observacao

        ]);

        return redirect('/viagems');

    }

}
