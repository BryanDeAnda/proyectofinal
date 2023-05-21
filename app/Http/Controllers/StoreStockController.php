<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\stock;

class StoreStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();
        $stocks = Stock::all();
        return view('storeStock', compact('stores', 'stocks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $store = Store::find($request->input('id'));
        $stock = Stock::find($request->input('id'));
        $cantidad = $request->input('cantidad');

        $store->stocks()->attach($stock, ['cantidad' => $cantidad]);

        return redirect()->route('storeStock')->with('success', 'La relación se creó correctamente.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
