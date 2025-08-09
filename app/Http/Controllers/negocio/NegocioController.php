<?php

namespace App\Http\Controllers\negocio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Negocio;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class NegocioController extends Controller
{
    public function create()
    {
        $user = auth()->user();

        return view('negocio.creacion-negocio', compact('user'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        // Normalizador simple para URLs
        $normalizeUrl = function ($u) {
            if (!$u) {
                return null;
            }
            $u = trim($u);
            if ($u === '') {
                return null;
            }
            if (!preg_match('~^https?://~i', $u)) {
                $u = 'https://' . $u;
            }
            return $u;
        };

        // Subidas (disk public) -> requiere `php artisan storage:link`
        $logoUrl = null;
        if ($request->hasFile('neg_imagen')) {
            try {
                $path = $request->file('neg_imagen')->store('negocios/logos', 'public');
                $logoUrl = '/storage/' . $path;
            } catch (\Throwable $e) {
                // si falla subir, lo ignoramos
            }
        }

        $portadaUrl = null;
        if ($request->hasFile('neg_portada')) {
            try {
                $path = $request->file('neg_portada')->store('negocios/portadas', 'public');
                $portadaUrl = '/storage/' . $path;
            } catch (\Throwable $e) {
            }
        }

        // Nombre / Apellido (defaults para NOT NULL)
        $parts    = preg_split('/\s+/', (string)($user->name ?? ''), 2);
        $nombre   = $parts[0] ?? 'N/A';
        $apellido = $parts[1] ?? '';

        // Construir entidad
        $negocio = new Negocio([
            'neg_nombre'               => $nombre,
            'neg_apellido'             => $apellido,
            'neg_email'                => $user->email ?? 'no-email@local.test',
            'neg_telefono'             => $user->celular ?? '',
            'neg_pais'                 => $user->pais ?? 'Colombia',

            'neg_imagen'               => $logoUrl,
            'neg_portada'              => $portadaUrl,

            'neg_nombre_comercial'     => $request->input('neg_nombre_comercial'),
            'neg_sitio_web'            => $normalizeUrl($request->input('neg_sitio_web')),
            'neg_facebook'             => $normalizeUrl($request->input('neg_facebook')),
            'neg_instagram'            => $normalizeUrl($request->input('neg_instagram')),
            'neg_categorias'           => $request->input('neg_categorias'),
            'neg_equipo'               => $request->input('neg_equipo'),
            'neg_direccion'            => $request->input('neg_direccion'),
            'neg_virtual'              => (bool) $request->boolean('neg_virtual'),
            'neg_direccion_confirmada' => (bool) $request->boolean('neg_direccion_confirmada'),
            'neg_acepto'               => (bool) ($request->input('neg_acepto', 1) ? 1 : 0),
        ]);

        try {
            // Asociación directa: setea automáticamente user_id
            $user->negocios()->save($negocio);

            // Guarda en sesión para el siguiente paso del flujo
            session(['negocio_id' => $negocio->id]);

            return redirect()
            ->route('empresa.configuracion', ['id' => $negocio->id])
            ->with('status', 'Negocio creado. ¡Configúralo aquí!');

        } catch (\Throwable $e) {
            // Limpieza si algo falló al guardar
            if ($logoUrl) {
                $p = ltrim(str_replace('/storage/', '', $logoUrl), '/');
                Storage::disk('public')->delete($p);
            }
            if ($portadaUrl) {
                $p = ltrim(str_replace('/storage/', '', $portadaUrl), '/');
                Storage::disk('public')->delete($p);
            }

            report($e);
            return back()->with('error', 'No se pudo crear el negocio.')->withInput();
        }
    }



    public function datosNegocio()
    {
        return view('negocio.datos-negocio');
    }

    public function guardarNombre(Request $request)
    {
        $request->validate([
            'neg_nombre_comercial' => 'required|string|max:255',
            'neg_sitio_web' => 'nullable|url|max:255',
        ]);

        $negocio = \App\Models\Negocio::where('user_id', auth()->id())->firstOrFail();

        $negocio->update([
            'neg_nombre_comercial' => $request->neg_nombre_comercial,
            'neg_sitio_web' => $request->neg_sitio_web,
        ]);

        return redirect()->route('negocio.categorias')->with('success', 'Datos guardados correctamente.');
    }

    public function categorias()
    {
        return view('negocio.categorias');
    }

    public function guardarCategorias(Request $request)
    {
        $request->validate([
            'neg_categorias' => 'required|array|min:1|max:4',
        ]);

        session(['negocio_categorias' => $request->neg_categorias]);

        return redirect()->route('negocio.equipo');
    }

    public function equipo()
    {
        return view('negocio.equipo');
    }

    public function guardarEquipo(Request $request)
    {
        $request->validate([
            'neg_equipo' => 'required|string|max:50',
        ]);

        session(['negocio_equipo' => $request->neg_equipo]);

        return redirect()->route('negocio.ubicacion');
    }

    public function ubicacion()
    {
        return view('negocio.ubicacion');
    }

    public function guardarUbicacion(Request $request)
    {
        $request->validate([
            'neg_direccion' => 'nullable|string|max:255',
            'neg_virtual'   => 'nullable|in:1',
        ]);

        session([
            'negocio_direccion' => $request->neg_direccion,
            'negocio_virtual'   => $request->neg_virtual ? true : false,
        ]);

        return redirect()->route('negocio.verificacion');
    }




    public function verificarDireccion()
    {
        return view('negocio.verificar-direccion');
    }

    public function guardarVerificacion(Request $request)
    {
        $negocioId = session('negocio_id');

        $empresa = Negocio::where('id', $negocioId)
            ->where('user_id', auth()->id())
            ->first();

        if (!$empresa) {
            return redirect()->route('negocio.create')
                ->withErrors(['No se encontró ningún negocio válido en progreso.']);
        }

        $direccion = session('negocio_direccion');
        $esVirtual = session('negocio_virtual');

        if ($direccion !== null || $esVirtual !== null) {
            $empresa->neg_direccion = $direccion;
            $empresa->neg_virtual   = $esVirtual ? 1 : 0;
            $empresa->save();

            Log::debug('✅ Negocio actualizado desde sesión', [
                'id' => $empresa->id,
                'neg_direccion' => $empresa->neg_direccion,
                'neg_virtual' => $empresa->neg_virtual,
            ]);
        }

        // Limpieza de sesión
        session()->forget(['negocio_direccion', 'negocio_virtual', 'negocio_id']);

        return redirect()->route('empresa.dashboard', ['id' => $empresa->id]);
    }

    public function index()
    {
        $misEmpresas = \App\Models\Negocio::where('user_id', auth()->id())->get();

        return view('empresa.dashboard', compact('misEmpresas'));
    }

    public function show($id)
    {
        $empresa = \App\Models\Negocio::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail(); // Seguridad: solo puede ver empresas propias

        return view('empresa.dashboard-empresa', compact('empresa'));
    }

    public function destroy(Negocio $negocio)
    {
        if ($negocio->user_id !== auth()->id()) {
            abort(403);
        }

        $negocio->delete();

        return back()->with('status', 'negocio-eliminado');
    }
}
