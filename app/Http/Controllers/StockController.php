<?php 

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('stock', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/agregarStock');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('success', 'El registro se ha creado correctamente.');
        $request->validate([
            'nombre' => 'string|max:30|required',
            'cantidad' => 'numeric|regex:/^[\d]{0,3}?$/|required',
            'precio' => 'numeric|required|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/'
        ]);

        $stock = new Stock();
        $stock->nombre = $request->nombre;
        $stock->cantidad = $request->cantidad;
        $stock->precio = $request->precio;
        $stock->save();

        return redirect('/stocks');
    }

    /**
     * Display the specified resource.
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stock $stock)
    {
        return view('/editarStock', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stock $stock)
    {
        Session::flash('success', 'El registro se ha actualizado correctamente.');
        $request->validate([
            'nombre' => 'string|max:30|required',
            'cantidad' => 'numeric|regex:/^[\d]{0,3}?$/|required',
            'precio' => 'numeric|required|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/'
        ]);

        $stock->nombre = $request->nombre;
        $stock->cantidad = $request->cantidad;
        $stock->precio = $request->precio;
        $stock->save();

        return redirect('/stocks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stock $stock)
    {
        Session::flash('success', 'El registro se ha eliminado correctamente.');
        $stock->delete();
        return redirect()->route('stocks.index');
    }
}
