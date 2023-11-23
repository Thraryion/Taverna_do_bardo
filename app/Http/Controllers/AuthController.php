<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['dashboard', 'profile']); 
    }

    public function login(Request $request)
{
    $credenciais = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ]);

    $usuario = Usuario::where('email', $credenciais['email'])->first();

    if (!$usuario) {
        return back()->withErrors(['email' => 'Credenciais inválidas'])->withInput();
    }
    $senhaConcatenada = $credenciais['senha'] . $usuario->cpf;

    if (Hash::check($senhaConcatenada, $usuario->senha)) {
        Auth::login($usuario);
        $request->session()->regenerate();

        if ($usuario->nivel_usuario == 1) {
            return redirect('/');
        } elseif ($usuario->nivel_usuario == 2) {
            return redirect('/admin');
        }
    }

    return back()->withErrors(['email' => 'Credenciais inválidas'])->withInput();
}
public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
