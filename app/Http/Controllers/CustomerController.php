<?php

namespace SigAtelie\Http\Controllers;


use Illuminate\Http\Request;
use SigAtelie\Entities\Customer;
use SigAtelie\Http\Requests;

class ClienteController extends Controller
{


    public function index()
    {
        $clientes = Customer::all();

        return view('cliente.index')->with("clientes", $clientes);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @return IlluminateHttpResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome'=> 'required',
        ]);

        $customer = new Customer;

        $cliente->create($request->all());
        return redirect('clientes')->with('message','Updated customer');
    }


    public function show($id)
    {
        $cliente = Cliente::find($id);

        // return to 404 page
        if(!$cliente){
            abort(404);
        }

        return view('cliente.detail')->with('cliente',$cliente);
    }

    public function edit($id)
    {
        // edit function here
        $cliente = Cliente::find($id);

        // return to 404 page
        if(!$cliente){
            abort(404);
        }
        // display the article to single page
        return view('cliente.edit')->with('cliente',$cliente);
    }

    public function update(Request $request, $id)
    {
        // we will create validation function here
        $this->validate($request,[
            'nome'=> 'required',

        ]);

        $cliente = Cliente::find($id);
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        // save all data
        $cliente->save();

        //redirect page after save data
        return redirect('clientes')->with('message','Cliente atualizado');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('clientes')->with('message','Cliente removido');
    }
}
