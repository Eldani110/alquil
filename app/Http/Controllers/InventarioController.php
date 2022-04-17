<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InventarioController extends Controller
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

        $todo_los_inventarios = Inventario::where('id_negocio', $id_negocio)->orderBy('id','desc')->paginate(7);
        
        return view('inventario.inventario', compact('todo_los_inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_negocio = Auth::user()->id_negocio;


        $ultimodato = Inventario::where('id_negocio', $id_negocio)
        ->orderBy('id','desc')->first();
        if($ultimodato == NULL){
            return view('inventario.create');
        }else{
            return view('inventario.create', compact('ultimodato'));
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
        $inventario = new Inventario;

        $inventario->id_producto = $request->id_producto;
        $inventario->nombre = $request->name;
        if (strpos($request->valordiario, ',') == 1 || strpos($request->valordiario, '.') == 1) {
            $inventario->valordiario = str_replace(',','.',$request->valordiario);
        }else {
            $inventario->valordiario = number_format((int)$request->valordiario,0,'','.');
        }
        $inventario->existencia = $request->existencia;
        $inventario->disponible = $request->existencia;
        $inventario->id_negocio = Auth::user()->id_negocio;

        $inventario->save();

        return redirect('/inventario');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);


        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);
        
        $existencia = $inventario->existencia;
        $disponible = $inventario->disponible;
        $resta_de_existencia = $existencia - $request->existencia ;
        $actualizar_disponible = $disponible - $resta_de_existencia;

        $inventario->nombre = $request->name;
        if (strpos($request->valordiario, ',') == 1 || strpos($request->valordiario, '.') == 1) {
            $inventario->valordiario = str_replace(',','.',$request->valordiario);
        }else {
            $inventario->valordiario = number_format((int)$request->valordiario,0,'','.');
        }
        
        $inventario->disponible = $actualizar_disponible;
        $inventario->existencia = $request->existencia;

        $inventario->save();
        return redirect('/inventario/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        
        $inventario->delete();
        return redirect('/inventario');
    }

    public function delate($id){
        $inventario = Inventario::find($id);
        
        return view('inventario.delate', compact('id', 'inventario' ));
    }

    public function busqueda(Request $request){
        $equipo = $request->get('equipo');

        $id_negocio = Auth::user()->id_negocio;
        
        $todo_los_inventarios = Inventario::orderBy('id', 'DESC')
        ->where('id_negocio', $id_negocio)
        ->equipo($equipo)
        ->paginate(4);

        return view('inventario.inventariobusqueda', compact('todo_los_inventarios'));
    }

    public function getInventario(Request $request)
    {
        $id_negocio = Auth::user()->id_negocio;


        $data = Inventario::where('nombre', 'LIKE','%'.$request->keyword.'%')
        ->where('id_negocio', $id_negocio)
        ->get();
        return response()->json($data); 
    }
}
