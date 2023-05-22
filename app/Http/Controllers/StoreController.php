<?php 

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::all();
        return view('store', compact('stores'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/agregarStore');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('success', 'El registro se ha creado correctamente.');
        $request->validate([
            'nombre' => 'string|max:30|required',
            'direccion' => 'string|max:50|required',
            'telefono' => 'integer|required|regex:/^[\d]{0,10}?$/',
        ]);

        $store = new Store();
        $store->nombre = $request->nombre;
        $store->direccion = $request->direccion;
        $store->telefono = $request->telefono;
        $store->save();

        return redirect('/stores');
    }

    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(store $store)
    {
        return view('/editarStore', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, store $store)
    {
        Session::flash('success', 'El registro se ha actualizado correctamente.');
        $request->validate([
            'nombre' => 'string|max:30|required',
            'direccion' => 'string|max:50|required',
            'telefono' => 'integer|required|regex:/^[\d]{0,10}?$/',
        ]);

        $store->nombre = $request->nombre;
        $store->direccion = $request->direccion;
        $store->telefono = $request->telefono;
        $store->save();

        return redirect('/stores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(store $store)
    {
        Session::flash('success', 'El registro se ha eliminado correctamente.');
        $store->delete();
        return redirect()->route('stores.index');
    }
}
