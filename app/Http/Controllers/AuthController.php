<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function index(){

        return view('autenticacao.login');
    }

    public function painel(){

        //$nome = 'João';

        //dd($nome);

        return view('cliente.painel-principal');
    }

    public function mostrarformularioregistro()
    {

        return view('autenticacao.registo');
    }

    public function postlogin(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //return redirect()->route('dashboard.index')->with('success', ' login efectuado com sucesso! ');
            return redirect()->route('welcome')->with('success', ' login efectuado com sucesso! ');
        }
        return back()->with('error', ' email e senha não correspondem. ');
                         
    }

    public function dashboard(){

        if (Auth::check()){

            return view('cliente.painel-principal');
        }
        return view('cliente.painel-principal');
    }


    public function registo(Request $request)
    {
        //$nome = 'João';

        $data = [
            'nome' => request ('nome'),
            'apelido' => request ('apelido'),
            'email' => request ('email'),
            'password' => Hash::make($request->password),
            'telefone' => request ('telefone'),
            'endereco' => request ('endereco'),
            'pais' => request ('pais'),
            'cidade' => request ('cidade'),
            'codigo_postal' => request ('codigo_postal'),
            'empresa' => request ('empresa'),
            'nuit' => request ('nuit'),

            
        ];
        //dd($nome);
    
        User::create($data);
        return redirect()->route('autenticacao.login')->with('success', ' utilizador registado com sucesso! ');
       
    }

    public function logout(Request $request){

        return view('autenticacao.login');
    }
    

}
