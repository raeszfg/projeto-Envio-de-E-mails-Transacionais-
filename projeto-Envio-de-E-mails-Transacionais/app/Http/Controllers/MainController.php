<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Usuario;
use App\Mail\EnvioEmail;  

class MainController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function index()
    {
        return view('cadastro');
    }

    public function homePage()
    {
        return view('home_page');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            'nome_usuario' => 'required|string|max:255',
            'email'        => 'required|string|email|max:255|unique:usuarios,email',
            'senha'        => 'required|string|min:6',
        ], [
            'required'     => 'O campo :attribute é obrigatório.',
            'email.email'  => 'Informe um e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',
            'senha.min'    => 'A senha deve ter pelo menos 6 caracteres.',
        ]);
        $usuario = Usuario::create([
            'nome_usuario' => $request->nome_usuario,
            'email'        => $request->email,
            'senha'        => Hash::make($request->senha),
        ]);

        Mail::to($usuario->email)->send(new EnvioEmail($usuario->nome_usuario));

        session([
            'usuario_id'   => $usuario->id,
            'nome_usuario' => $usuario->nome_usuario,
            'email_usuario' => $usuario->email
        ]);

        return redirect()->route('home')->with('sucesso', 'Cadastro realizado e e-mail enviado com sucesso!');
    }

    public function autenticar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ], [
            'required'    => 'O campo :attribute é obrigatório.',
            'email.email' => 'Informe um e-mail válido.',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario || !Hash::check($request->senha, $usuario->senha)) {
            return back()->withErrors(['email' => 'E-mail ou senha incorretos.'])->withInput();
        }

        session([
            'usuario_id'   => $usuario->id,
            'nome_usuario' => $usuario->nome_usuario,
            'email_usuario' => $usuario->email
        ]);

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}