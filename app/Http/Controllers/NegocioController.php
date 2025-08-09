<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use App\Models\Empresa\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Plantilla;

class NegocioController extends Controller
{
    public function show($id, $slug)
    {
        $negocio = Negocio::with(['servicios', 'horarios', 'bloqueos'])->findOrFail($id);

        if (Str::slug($negocio->neg_nombre) !== $slug) {
            return redirect()->route('negocios.show', [
                'id' => $negocio->id,
                'slug' => Str::slug($negocio->neg_nombre)
            ]);
        }

        $empresa = \App\Models\Empresa\Empresa::find($negocio->neg_empresa_id);

        $plantilla = $negocio->plantillas()->first();

        return view('themes.'.$plantilla->nombre.'.profile', [
            'negocio' => $negocio,
            'empresa' => $empresa,
            'currentPage' => 'configuracion',
            'currentSubPage' => 'negocio',
        ]);
    }
}
