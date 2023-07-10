<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facturacion;

class FacturacionController extends Controller
{
    public function index()
    {
        // Obtener la lista de registros de facturación desde la base de datos y pasarla a la vista
        $registrosFacturacion = Facturacion::all();

        return view('facturacion.index', compact('registrosFacturacion'));
    }

    public function create()
    {
        // Mostrar el formulario para crear un nuevo registro de facturación
        return view('facturacion.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos del nuevo registro de facturación en la base de datos
        $registroFacturacion = new Facturacion;
        // Lógica para guardar los datos del registro de facturación
        $registroFacturacion->save();

        return redirect()->route('facturacion.index')->with('success', 'Registro de facturación creado exitosamente');
    }

    public function show($id)
    {
        // Mostrar los detalles de un registro de facturación específico
        $registroFacturacion = Facturacion::find($id);

        return view('facturacion.show', compact('registroFacturacion'));
    }

    public function edit($id)
    {
        // Mostrar el formulario para editar un registro de facturación específico
        $registroFacturacion = Facturacion::find($id);

        return view('facturacion.edit', compact('registroFacturacion'));
        <?php

        namespace App\Http\Controllers;
        
        use Illuminate\Http\Request;
        use App\Models\Facturacion;
        
        class FacturacionController extends Controller
        {
            public function index()
            {
                // Obtener la lista de registros de facturación desde la base de datos y pasarla a la vista
                $registrosFacturacion = Facturacion::all();
        
                return view('facturacion.index', compact('registrosFacturacion'));
            }
        
            public function create()
            {
                // Mostrar el formulario para crear un nuevo registro de facturación
                return view('facturacion.create');
            }
        
            public function store(Request $request)
            {
                // Validar y guardar los datos del nuevo registro de facturación en la base de datos
                $registroFacturacion = new Facturacion;
                // Lógica para guardar los datos del registro de facturación
                $registroFacturacion->save();
        
                return redirect()->route('facturacion.index')->with('success', 'Registro de facturación creado exitosamente');
            }
        
            public function show($id)
            {
                // Mostrar los detalles de un registro de facturación específico
                $registroFacturacion = Facturacion::find($id);
        
                return view('facturacion.show', compact('registroFacturacion'));
            }
        
            public function edit($id)
            {
                // Mostrar el formulario para editar un registro de facturación específico
                $registroFacturacion = Facturacion::find($id);
        
                return view('facturacion.edit', compact('registroFacturacion'));
            }
        
            public function update(Request $request, $id)
            {
                // Validar y actualizar los datos de un registro de facturación específico en la base de datos
                $registroFacturacion = Facturacion::find($id);
                // Lógica para actualizar los datos del registro de facturación
                $registroFacturacion->save();
        
                return redirect()->route('facturacion.index')->with('success', 'Registro de facturLos modelos son clases en Laravel que representan las tablas en tu base de datos. Te permiten interactuar con los datos de la base de datos de una manera orientada a objetos. 
        
