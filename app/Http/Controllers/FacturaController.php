<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Status;
use App\Models\Factura;
use App\Models\ControladorInvoice;

class FacturaController extends Controller
{
    //
    public $quantidade_de_factura_por_mostrar = 5;
           
    protected $request;
    private $repository;

    public function __construct(Request $request, Factura $user)
    {

        $this->request = $request;
        $this->repository = $user;
    }


    public function factura()
    {

        $users = User::all();
        $status = Status::all();

        $facturas = Factura::all();
        return view('cliente.facturacao', compact('facturas', 'users', 'status'));
     
        //$facturas = Factura::paginate($this->quantidade_de_factura_por_mostrar);
        //return view('cliente.facturacao', compact('facturas', 'users', 'status') )->with('i', (request()->input('page', 1) - 1) * $users->perPage());
     

    }

    public function criar()
    {
        // Gere um novo número de fatura
        $invoiceNumber = ControladorInvoice::generateInvoiceNumber();

        //dd($invoiceNumber);
        
        $data = [
            'factura_n' => $invoiceNumber,
            'descricao' => request ('descricao'),
            'data_emissao' => request ('data_emissao'),
            'data_vencimento' => request ('data_vencimento'),
            'user_id' => request ('user_id'),
            'total' => request ('total'),
            'status_id' => request ('status_id'),
  
        ];
        
        Factura::create($data);
        return redirect()->route('cliente.facturacao')->with('success', ' utilizador registado com sucesso! ');
       
    }
}
