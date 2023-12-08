<?php
// app/Http/Controllers/citacontroller.php

// app/Http/Controllers/CitaController.php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function guardarCita(Request $request)
    {
        // Valida los datos del formulario si es necesario
        $request->validate([
            'nombreMascota' => 'required|string',
            'tipoServicio' => 'required|string',
            'fechaCita' => 'required|date',
            'horaCita' => 'required|date_format:H:i',
            'malestar' => 'boolean',
            'numeroTelefono' => 'required|string',
        ]);

        // Crea una nueva instancia de Cita y guarda los datos
        $cita = Cita::create($request->all());

        return response()->json($cita, 201);
    }
}
