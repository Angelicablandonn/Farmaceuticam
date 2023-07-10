<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    public function index()
    {
        // Obtener la lista de órdenes desde la base de datos y pasarla a la vista
        $ordenes = Orden::all();

        return view('ordenes.index', compact('ordenes'));
    }

    public function create()
    {
        // Mostrar el formulario para crear una nueva orden
        return view('ordenes.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos de la nueva orden en la base de datos
        $orden = new Orden;
        // Lógica para guardar los datos de la orden
        $orden->save();

        return redirect()->route('ordenes.index')->with('success', 'Orden creada exitosamente');
    }

    public function show($id)
    {
        // Mostrar los detalles de una orden específica
        $orden = Orden::find($id);

        return view('ordenes.show', compact('orden'));
    }

    public function edit($id)
    {
        // Mostrar el formulario para editar una orden específica
        $orden = Orden::find($id);

        return view('ordenes.edit', compact('orden'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar los datos de una orden específica en la base de datos
        $orden = Orden::find($id);
        // Lógica para actualizar los datos de la orden
        $orden->save();

        return redirect()->route('ordenes.index')->with('success', 'Orden actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar una orden específica de la base de datos
        $orden = Orden::find($id);
        $orden->delete();

        return redirect()->route('ordenes.index')->with('success', 'Orden eliminada exitosamente');
    }
}
