<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller{
    
    public function sobre() {
        $nome = "Laravel";
        $vantagens = ["Quadro progressivo", "Estrutura escalável", "Quadro comunitário"];
        $padrao = ["Model", "View", "Controller"];

        return view('sobre', ['nm'=>$nome, 'vtg'=>$vantagens, 'pd'=>$padrao]);
    }

    public function exibirUsuarios() {
        $usuarios = Usuario::all();
        return view('usuarios', ['users'=>$usuarios]);
    }

    public function addUsuario(Request $request){

        $usuario = new Usuario();
        $usuario->nome = $request->fnome;
        $usuario->email = $request->femail;
        $usuario->senha = bcrypt($request->fsenha);
        $usuario->save();

        Auth::login($usuario);

        return redirect('/dashboard');
    }

    public function loginUsuario(Request $request){
    $credentials = $request->only('femail', 'fsenha');

        $usuario = Usuario::where('email', $credentials['femail'])->first();

        if ($usuario && password_verify($credentials['fsenha'], $usuario->senha)) {
        Auth::login($usuario); 
        return redirect('/dashboard'); 
        }

        return back()->withErrors(['login' => 'E-mail ou senha incorretos.']); 
    }

    public function editUsuario($id) {
        $usuario = Usuario::findOrFail($id);
        return view('editar', ['user'=>$usuario]);
    }

    public function atualizar(Request $request){
        $usuario = Usuario::findOrFail($request->id);
        $dados = [
        'nome' => $request->fnome,
        'email' => $request->femail
        ];
        $usuario->update($dados);
        return redirect('/usuarios');
    }

    public function delUsuario($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }

    public function dashboard() {
        if (!Auth::check()) {
        return redirect('/')->withErrors(['auth' => 'Você precisa estar logado para acessar esta página.']);
    }

        return view('dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


    public function autenticar(Request $request){
        $credentials = $request->validate([
        'femail' => 'required|email',
        'fsenha' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
        return redirect('/dashboard');
    }

        return back()->withErrors(['login' => 'E-mail ou senha incorretos.']);
    }

    public function loginPage(){
        return view('login');
    }
}
