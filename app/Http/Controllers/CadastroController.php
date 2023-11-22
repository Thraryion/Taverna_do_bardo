<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastrarUsuario(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|cpf|unique:users',
            'email' => 'required|email|unique:users',
            'senha' => 'required|string|min:6',
        ]);

        $usuario = new User();
        $usuario->nome = $request->input('nome');
        $usuario->cpf = $request->input('cpf');
        $usuario->email = $request->input('email');

        $senhaConcatenada = $request->input('senha') . $request->input('cpf');
        $usuario->senha = bcrypt($senhaConcatenada);

        $usuario->nivel_usuario = 1;

        $usuario->save();

        return response()->json(['mensagem' => 'Usuário cadastrado com sucesso'], 201);
    }
}
