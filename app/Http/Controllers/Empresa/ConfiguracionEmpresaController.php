<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Negocio;
use App\Models\Plantilla;

class ConfiguracionEmpresaController extends Controller
{
    public function guardarConfiguracion(Request $request, $id)
    {
        $negocio = Negocio::findOrFail($id);

        $request->validate([
            'bloques' => 'required|array',
            'bloques.*' => 'string|in:servicios,galeria,horario,ubicacion,contacto'
        ]);

        $negocio->configuracion_bloques = json_encode($request->bloques);
        $negocio->save();

        return response()->json([
            'success' => true,
            'message' => 'Configuración guardada exitosamente'
        ]);
    }

    public function obtenerConfiguracion($id)
    {
        $negocio = Negocio::findOrFail($id);
        $bloques = json_decode($negocio->configuracion_bloques, true) ?? [];

        return response()->json([
            'bloques' => $bloques
        ]);
    }

    public function vistaPrevia($id)
    {
        $negocio = Negocio::with('servicios')->findOrFail($id);
        $bloques = json_decode($negocio->configuracion_bloques, true) ?? [];

        return view('empresa.vista-previa', compact('negocio', 'bloques'));
    }

    public function configurarWebsite($id)
    {
        $empresa = Negocio::with('plantillas')->findOrFail($id);

        $plantillaSeleccionada = $empresa->plantillas->first();

        $plantillas = Plantilla::all();

        return view('empresa.configuracion.website', compact('empresa', 'plantillas', 'plantillaSeleccionada'));
    }

    public function guardarConfiguracionWebsite(Request $request)
    {
        $datosValidados = $request->validate([
            'empresa_id' => 'required|exists:negocios,id',
            'plantilla_id' => 'required|exists:plantillas,id',
        ]);

        $negocio = Negocio::findOrFail($datosValidados['empresa_id']);
        $negocio->plantillas()->sync([$datosValidados['plantilla_id']]);

        return redirect()->route('empresa.configuracion.website', $negocio->id)
            ->with('success', 'La plantilla del website se ha guardado exitosamente.');
    }

}
