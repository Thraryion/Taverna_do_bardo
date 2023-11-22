<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastrarUsuario(Request $request)
    {

            $nome =$request->input('nome');
            $cpf = $request->input('cpf');
            $email = $request->input('email');
            $senha = $request->input('senha');

        $usuario = new Usuario();
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
