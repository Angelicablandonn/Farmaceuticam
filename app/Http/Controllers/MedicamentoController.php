<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    public function index()
    {
        // Obtener la lista de medicamentos desde la base de datos y pasarla a la vista
        $medicamentos = Medicamento::all();

        return view('medicamentos.index', compact('medicamentos'));
    }

    public function create()
    {
        // Mostrar el formulario para crear un nuevo medicamento
        return view('medicamentos.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos del nuevo medicamento en la base de datos
        $medicamento = new Medicamento;
        $medicamento->nombre = $request->input('nombre');
        // Otros campos del medicamento
        $medicamento->save();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado exitosamente');
    }

    public function show($id)
    {
        // Mostrar los detalles de un medicamento específico
        $medicamento = Medicamento::find($id);

        return view('medicamentos.show', compact('medicamento'));
    }

    public function edit($id)
    {
        // Mostrar el formulario para editar un medicamento específico
        $medicamento = Medicamento::find($id);

        return view('medicamentos.edit', compact('medicamento'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar los datos de un medicamento específico en la base de datos
        $medicamento = Medicamento::find($id);
        $medicamento->nombre = $request->input('nombre');
        // Otros campos del medicamento
        $medicamento->save();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar un medicamento específico de la base de datos
        $medicamento = Medicamento::find($id);
        $medicamento->delete();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento eliminado exitosamente');
    }

    // Otros métodos para las operaciones relacionadas con órdenes y facturación
}
