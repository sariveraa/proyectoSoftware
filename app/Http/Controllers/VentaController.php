<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

/**
 * Class VentaController
 * @package App\Http\Controllers
 */
class VentaController extends Controller
{


    public function vender($codigo){
        $venta = new Venta();
        return view('user.formCompra', compact('codigo', 'venta'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::paginate();

        return view('venta.index', compact('ventas'))
            ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $identidad = $request->input('identidad');
        $nombre = $request->input('nombre');
        $direccion = $request->input('direccion');
        $codigo = $request->input('codigo');
        $total = $request->input('total');

        $venta = new Venta();
        $venta->identidad = $identidad;
        $venta->nombre = $nombre;
        $venta->direccion = $direccion;
        $venta->codigo = $codigo;
        $venta->total = $total;
        $venta->save();
    
        return redirect()->route('catalogoProd')
            ->with('success', 'Compra finalizada con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);

        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        request()->validate(Venta::$rules);

        $venta->update($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'Venta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $venta = Venta::find($id)->delete();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }

    public function prueba(Request $request)
    {
        $codigo = $request->codigo;
        $total =$request->total;
        return view('venta.create', compact('codigo','total'));
    }

}
