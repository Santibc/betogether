{{-- resources/views/profile/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Mi Perfil')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile/profile-perfil.css') }}">
@endpush

@section('content')
    <div class="background-animation">
        @for ($i = 1; $i <= 12; $i++)
            <div class="particle"></div>
        @endfor
    </div>

    <div class="container py-4">
        <h2 class="mb-4 text-primary" id="header_perfil"><i class="fas fa-user-cog"></i> Mi Perfil</h2>

        {{-- Flash global --}}
        @if (session('status'))
            <div class="alert alert-success" role="alert" style="border-radius: 10px;">
                {{ session('status') }}
            </div>
        @endif

        {{-- ✅ 1. Actualizar datos personales --}}
        <div class="card mb-4" id="card_datos_perfil">
            <div class="card-header fw-bold">Datos Personales</div>
            <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    {{-- Foto --}}
                    <div class="mb-3" id="group_photo_perfil">
                        <label for="foto" class="form-label">Foto de perfil</label><br>
                        @php($foto = auth()->user()->foto)
                        <img src="{{ $foto ?: asset('images/avatar-placeholder.png') }}" width="100"
                            class="rounded-circle mb-2" id="preview_photo_perfil" alt="Foto de perfil">
                        <input type="file" class="form-control mt-2" name="foto" id="foto" accept="image/*">
                        @error('foto')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Nombre --}}
                    <div class="mb-3" id="group_name_perfil">
                        <label for="name_perfil" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name_perfil"
                            value="{{ old('name', auth()->user()->name) }}" required>
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3" id="group_email_perfil">
                        <label for="email_perfil" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email_perfil"
                            value="{{ old('email', auth()->user()->email) }}" required>
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- DNI --}}
                    <div class="mb-3" id="group_dni_perfil">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control" name="dni" id="dni"
                            value="{{ old('dni', auth()->user()->dni) }}" placeholder="Ej: 12345678">
                        @error('dni')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Celular --}}
                    <div class="mb-3" id="group_celular_perfil">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" name="celular" id="celular"
                            value="{{ old('celular', auth()->user()->celular) }}" placeholder="Ej: +57 300 123 4567">
                        @error('celular')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Ciudad --}}
                    <div class="mb-3" id="group_ciudad_perfil">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad"
                            value="{{ old('ciudad', auth()->user()->ciudad) }}">
                        @error('ciudad')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- País --}}
                    <div class="mb-3" id="group_pais_perfil">
                        <label for="pais" class="form-label">País</label>
                        <input type="text" class="form-control" name="pais" id="pais"
                            value="{{ old('pais', auth()->user()->pais) }}">
                        @error('pais')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Botón Guardar --}}
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
        </div>

        {{-- ✅ 2. Cambiar contraseña --}}
        <div class="card mb-4" id="card_password_perfil">
            <div class="card-header fw-bold">Cambiar Contraseña</div>
            <div class="card-body">
                <form method="POST" {{-- action="{{ route('password.update') }}" --}} id="form_password_perfil">
                    @csrf
                    @method('PUT')

                    <div class="mb-3" id="group_current_password_perfil">
                        <label for="current_password_perfil" class="form-label">Contraseña actual</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="current_password"
                                id="current_password_perfil" required>
                            <button class="btn btn-outline-secondary" type="button" id="toggle_current_perfil">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('current_password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3" id="group_password_perfil">
                        <label for="password_perfil" class="form-label">Nueva contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password_perfil" required>
                            <button class="btn btn-outline-secondary" type="button" id="toggle_password_perfil">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3" id="group_password_confirmation_perfil">
                        <label for="password_confirmation_perfil" class="form-label">Confirmar nueva contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password_confirmation_perfil" required>
                            <button class="btn btn-outline-secondary" type="button" id="toggle_confirmation_perfil">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        @error('password_confirmation')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning" id="btn_cambiar_password_perfil">
                        Cambiar contraseña
                    </button>
                </form>
            </div>
        </div>

        {{-- ✅ 3. Empresas asociadas --}}
        <div class="card" id="card_empresas_perfil">
            <div class="card-header fw-bold d-flex justify-content-between align-items-center">
                <span>Empresas Asociadas</span>
                {{-- Botón SIEMPRE visible para crear nueva --}}
                <a href="{{ route('negocio.create') }}" class="btn btn-success btn-sm" id="btn_crear_negocio_header">
                    <i class="fas fa-plus"></i> Crear negocio
                </a>
            </div>

            <div class="card-body">
                <div id="lista_empresas_perfil">
                    @forelse(auth()->user()->negocios as $negocio)
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2"
                            id="empresa_{{ $negocio->id }}_perfil">
                            <div class="me-2">
                                <strong>{{ $negocio->neg_nombre_comercial ?? 'Sin nombre' }}</strong><br>
                                <small class="text-muted">{{ $negocio->neg_email ?? 'Sin email' }}</small>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                {{-- Ver / Configurar --}}
                                <a href="{{ route('empresa.configuracion', ['id' => $negocio->id]) }}"
                                    class="btn btn-outline-primary btn-sm">
                                    Ver
                                </a>

                                {{-- Eliminar --}}
                                <form action="{{ route('negocio.destroy', $negocio->id) }}" method="POST"
                                    class="form_eliminar_perfil d-inline"
                                    data-empresa="{{ $negocio->neg_nombre_comercial }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm btn_eliminar_perfil"
                                        onclick="return confirm('¿Eliminar {{ $negocio->neg_nombre_comercial ?? 'esta empresa' }}?');">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div id="no_empresas_perfil" class="text-center">
                            <p class="mb-3">No tienes negocios registrados.</p>
                            <a href="{{ route('negocio.create') }}" class="btn btn-success"
                                id="btn_crear_negocio_perfil">
                                <i class="fas fa-plus"></i> Crear mi primer negocio
                            </a>
                        </div>
                    @endforelse
                </div>

                {{-- Además del botón del header, dejamos también uno al final por comodidad --}}
                @if (auth()->user()->negocios->count() > 0)
                    <div class="text-end mt-3">
                        <a href="{{ route('negocio.create') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Crear otro negocio
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/profile/profile-perfil.js') }}"></script>
    @endpush
@endsection
