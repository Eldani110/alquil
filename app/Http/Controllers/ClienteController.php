<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ClienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_negocio = Auth::user()->id_negocio;

        $todo_los_clientes = Cliente::where('id_negocio', $id_negocio)->orderBy('id','desc')->paginate(7);
        
        return view('cliente.cliente', compact('todo_los_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;

        $cliente->nombre = $request->name;
        $cliente->identifiacion = $request->identificacion;
        $cliente->dirección = $request->direccion;
        $cliente->telefono = $request->telefono;

        $cliente->id_negocio = Auth::user()->id_negocio;

        $cliente->save();
        return redirect('/clientes');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        $todo_los_clientes = Cliente::all();
        
        return view('cliente.cliente', compact('todo_los_clientes'));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);


        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->name;
        $cliente->identifiacion = $request->identificacion;
        $cliente->dirección = $request->direccion;
        $cliente->telefono = $request->telefono;

        $cliente->save();
        return redirect('/clientes/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        
        $cliente->delete();
        return redirect('/clientes');
    }

    public function delate($id){
        $cliente = Cliente::find($id);
        
        return view('cliente.delate', compact('id', 'cliente' ));
    }


    public function busqueda(Request $request){
        $cliente = $request->get('cliente');
        $id_negocio = Auth::user()->id_negocio;

        $clientes = Cliente::orderBy('id', 'DESC')
        ->where('id_negocio', $id_negocio)
        ->cliente($cliente)
        ->paginate(4);

        return view('cliente.clientebusqueda', compact('clientes'));
    }
}
