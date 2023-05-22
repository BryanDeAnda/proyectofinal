<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/agregarEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('success', 'El registro se ha creado correctamente.');
        $request->validate([
            'nombre' => 'string|max:50|required',
            'telefono' => 'integer|required|regex:/^[\d]{0,10}?$/',
            'sueldo' => 'numeric|required|regex:/^[\d]{0,4}?$/'
        ]);

        $employee = new Employee();
        $employee->nombre = $request->nombre;
        $employee->telefono = $request->telefono;
        $employee->sueldo = $request->sueldo;
        $employee->save();

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        $stores = Store::all();
        return view('/editarEmployee', compact('employee', 'stores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employee $employee)
    {
        Session::flash('success', 'El registro se ha actualizado correctamente.');
        $request->validate([
            'nombre' => 'string|max:50|required',
            'telefono' => 'integer|required|regex:/^[\d]{0,10}?$/',
            'sueldo' => 'numeric|required|regex:/^[\d]{0,4}?$/'
        ]);

        $employee->nombre = $request->nombre;
        $employee->telefono = $request->telefono;
        $employee->sueldo = $request->sueldo;
        $employee->store_id = $request->input('store');
        $employee->save();

        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        Session::flash('success', 'El registro se ha eliminado correctamente.');
        $employee->delete();
        return redirect()->route('employees.index');
    }



}
