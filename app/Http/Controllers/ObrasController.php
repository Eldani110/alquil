<?php

namespace App\Http\Controllers;

use App\Models\Obras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;


class ObrasController extends Controller
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

        $toda_las_obras = Obras::where('obras.id_negocio', $id_negocio)
        ->join('clientes', 'obras.encargado', '=', 'clientes.id')
        ->select("*")
        ->paginate(7);

        return view('obras.obras', compact('toda_las_obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_negocio = Auth::user()->id_negocio;

        $ultimodato = Obras::where('id_negocio', $id_negocio)
        ->orderBy('id','desc')->first();
        if($ultimodato == NULL){
            return view('obras.create');
        }else{
            return view('obras.create', compact('ultimodato'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obras = new Obras;

        $obras->nombre_de_la_obra = $request->name;
        $obras->dirección = $request->direccion;
        $obras->numero_de_contacto = $request->numero_contacto;
        $obras->encargado = $request->encargado;
        $obras->id_negocio = Auth::user()->id_negocio;
        $obras->id_obra = $request->id_obra;

        $obras->save();
        return redirect('/obras');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function show(Obras $obras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obra = Obras::find($id);

        return view('obras.edit', compact('obra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obras $obras, $id)
    {
        $obras = Obras::find($id);

        $obras->nombre_de_la_obra = $request->name;
        $obras->dirección = $request->direccion;
        $obras->numero_de_contacto = $request->numero_contacto;
        $obras->encargado = $request->encargado;
       
        $obras->save();
        return redirect('/obras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obras  $obras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obra = Obras::find($id);
        
        $obra->delete();
        return redirect('/obras');
    }

    public function delate($id){
        $obra = Obras::find($id);
        
        return view('obras.delate', compact('id', 'obra' ));
    }

    public function busqueda(Request $request){
        $obra = $request->get('obra');

        $id_negocio = Auth::user()->id_negocio;
        
        $toda_las_obras = Obras::orderBy('id', 'DESC')
        ->where('id_negocio', $id_negocio)
        ->obra($obra)
        ->paginate(4);

        return view('obras.obrasbusqueda', compact('toda_las_obras'));
    }
    
    public function getObra(Request $request)
    {
        $id_negocio = Auth::user()->id_negocio;


        $data = Obras::where('nombre_de_la_obra', 'LIKE','%'.$request->keyword.'%')
        ->where('id_negocio', $id_negocio)
        ->get();
        return response()->json($data); 
    }
}
