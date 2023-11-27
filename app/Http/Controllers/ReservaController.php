<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Reserva;

class ReservaController extends Controller
{
    public function fazerReserva(Request $request){
            
            $cliente =$request->input('cliente');
            $data = $request->input('data');
            $hora = $request->input('hora');
            $numero_pessoas = $request->input('numero_pessoas');

        $reserva = new Reserva();
        $reserva->cliente = $request->input('cliente');
        $reserva->data = $request->input('data');
        $reserva->hora = $request->input('hora');
        $reserva->numero_pessoas = $request->input('numero_pessoas');

        $reserva->save();

    return redirect('/Reserva')->with('msg', 'Produto Cadastrado com sucesso');
}
}
