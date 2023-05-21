<?php

namespace App\Http\Controllers;

use App\Models\storeStock;
use App\Models\store;
use App\Models\stock;
use Illuminate\Http\Request;

class StoreStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storeStocks = StoreStock::with('store', 'stock')->get();
        return view('storestock', compact('storeStocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = store::all();
        $stocks = stock::all();

        return view('agregarStoreStock', compact('stores', 'stocks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario de creación
        $request->validate([
            'store_id' => 'required',
            'stock_id' => 'required',
        ]);

        // Crear un nuevo registro en la tabla pivote "store_stock"
        $storeStock = new StoreStock();
        $storeStock->store_id = $request->store_id;
        $storeStock->stock_id = $request->stock_id;
        $storeStock->save();

        return redirect('/storestocks')->with('success', 'Relación creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(storeStock $storeStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(storeStock $storeStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, storeStock $storeStock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $storeStock = StoreStock::findOrFail($id);

        $storeStock->delete(); // Elimina el registro de la tabla pivote
        
        return redirect()->route('storestocks.index');
    }
}
