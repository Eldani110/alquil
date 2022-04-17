<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Equipos_alquilado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntregaController extends Controller
{
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

        $toda_las_facturas = Factura::where('id_negocio', $id_negocio)
        ->orderBy('id','desc')
        ->paginate(7);

        return view('entrega.entrega', compact('toda_las_facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $id_negocio = Auth::user()->id_negocio;


        $ultimodato = Factura::where('id_negocio', $id_negocio)
        ->orderBy('id','desc')->first();
        if($ultimodato == NULL){
            return view('entrega.create');
        }else{
            return view('entrega.create', compact('ultimodato'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
