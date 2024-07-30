<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public $quantidade_de_cliente_por_mostrar = 5;
           
    protected $request;
    private $repository;

    public function __construct(Request $request, User $user)
    {

        $this->request = $request;
        $this->repository = $user;
    }

    public function cliente()
    {
        $users = User::paginate($this->quantidade_de_cliente_por_mostrar);
        return view('cliente.cliente', compact('users') )->with('i', (request()->input('page', 1) - 1) * $users->perPage());

        //$users = User::all();
        //return view('cliente.cliente', compact('users'));
     
        
    }

    //public function actualizar(Request $request, $id)
   // {
    //    $users = User::find($id);

    //    $users->actualizar([
            
    //    ])

    //}



    //
    //public function facturacao()
    //{
    //    return view('cliente.facturacao');
        
    //}

    public function perfil()
    {
        return view('cliente.perfil');
        
    }

 
}
