<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
    
    }

    public function create()
    {
        return view('sign.signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ]);

        $usuario = new Usuario();

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = md5($request->senha);

        $usuario->save();

        return redirect()->route('login');

        
    }

    public function show($id)
    {
    
    }

    public function edit($id)
    {
    
    }

    public function update(Request $request, $id)
    {
    
    }

    public function destroy($id)
    {
    
    }
}
