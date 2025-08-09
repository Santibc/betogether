<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Mostrar la vista de login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Procesar la autenticación.
     */
    public function login(Request $request)
    {
        // Validación básica
        $credentials = $request->validate([
            'email'    => ['required', 'email:filter'],
            'password' => ['required'],
        ]);

        // Normalizar email a minúsculas para evitar falsos negativos
        $credentials['email'] = mb_strtolower($credentials['email']);

        // Log seguro (sin contraseña)
        \Log::info('== INTENTANDO LOGIN ==', ['email' => $credentials['email']]);

        // Intento de login
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Flujo requerido: si es Cliente → ir primero a editar perfil
            if ($user->hasRole('Cliente')) {
                \Log::info('== LOGIN OK - CLIENTE ==', ['user_id' => $user->id]);
                return redirect()->route('profile.edit');
            }

            // Admin → dashboard
            if ($user->hasRole('Administrador')) {
                \Log::info('== LOGIN OK - ADMIN ==', ['user_id' => $user->id]);
                return redirect()->intended(route('dashboard'));
            }

            // Otros roles (si los hay) → dashboard por defecto
            \Log::info('== LOGIN OK - OTRO ROL ==', ['user_id' => $user->id, 'roles' => $user->getRoleNames()]);
            return redirect()->intended(route('dashboard'));
        }

        \Log::warning('== CREDENCIALES INVALIDAS ==', ['email' => $credentials['email']]);

        throw ValidationException::withMessages([
            'email' => __('Estas credenciales no coinciden con nuestros registros.'),
        ]);
    }

    /**
     * Cerrar sesión.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
