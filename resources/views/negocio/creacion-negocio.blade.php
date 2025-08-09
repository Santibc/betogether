@extends('layouts.app')

@section('title', 'Crear Negocio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/negocios/creacion-negocios.css') }}">
    <style>
        .form-wrapper {
            max-width: 960px;
            margin: 2rem auto;
        }

        .elegant-form {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 25px rgba(17, 24, 39, .08);
        }

        .section-title {
            font-size: 1.05rem;
            font-weight: 700;
            margin: 1rem 0 .75rem
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px
        }

        .form-group.full-width {
            grid-column: 1/-1
        }

        .form-label {
            font-weight: 600;
            margin-bottom: .35rem
        }

        .form-input,
        .form-textarea {
            width: 100%;
            border: 1px solid #e5e7eb;
            border-radius: .65rem;
            padding: .65rem .9rem
        }

        .error-message {
            color: #dc2626;
            font-size: .85rem;
            margin-top: .25rem
        }

        /* Imagen de logo */
        .image-container {
            position: relative;
            width: 92px;
            height: 92px;
            border-radius: 9999px;
            overflow: hidden;
            border: 3px solid #e9d5ff;
            background: #faf5ff
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .file-input {
            display: none
        }

        .file-label {
            display: inline-block;
            margin-top: .5rem;
            padding: .45rem .8rem;
            border-radius: .6rem;
            border: 1px solid #ddd;
            cursor: pointer
        }

        /* Banner reducido */
        .banner-container {
            position: relative;
            width: 100%;
            height: 140px;
            border-radius: 14px;
            overflow: hidden;
            border: 2px dashed #e5e7eb;
            background: #fafafa
        }

        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        @media (max-width:640px) {
            .form-grid {
                grid-template-columns: 1fr
            }

            .banner-container {
                height: 110px
            }
        }

        /* Botón */
        .submit-btn {
            display: inline-flex;
            gap: .5rem;
            align-items: center;
            border: 0;
            border-radius: .8rem;
            background: #7c3aed;
            color: #fff;
            padding: .8rem 1.25rem;
            font-weight: 600
        }

        .btn-shimmer {
            width: 8px;
            height: 8px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, .7)
        }
    </style>
@endpush

@section('content')
    <form action="{{ route('negocio.store') }}" method="POST" id="neg_form_creacion" enctype="multipart/form-data">
        @csrf

        {{-- Fondo animado --}}
        <div class="background-animation">
            @for ($i = 1; $i <= 10; $i++)
                <div class="particle"></div>
            @endfor
        </div>

        <div class="container">
            <div class="form-wrapper">
                <div class="elegant-form">

                    <div class="form-header">
                        <h2>Datos del negocio</h2>
                        <p>Completa la información para crear tu perfil público. Puedes cambiarla luego.</p>
                    </div>

                    {{-- Imágenes --}}
                    <div class="section-title">Imágenes</div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label d-block">Logo / Imagen de perfil</label>
                            <div class="image-container mb-2">
                                <img src="{{ asset('images/default-user.png') }}" id="neg_preview_img" alt="Logo"
                                    class="profile-image">
                            </div>
                            <label for="neg_imagen" class="file-label">Subir logo</label>
                            <input type="file" name="neg_imagen" id="neg_imagen" accept="image/*" class="file-input">
                            @error('neg_imagen')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label class="form-label d-block">Banner / Portada</label>
                            <div class="banner-container mb-2">
                                <img src="{{ asset('images/placeholder-banner.jpg') }}" id="neg_preview_portada"
                                    class="banner-image" alt="Portada">
                            </div>
                            <label for="neg_portada" class="file-label">Subir portada</label>
                            <input type="file" name="neg_portada" id="neg_portada" accept="image/*" class="file-input">
                            @error('neg_portada')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div> --}}
                    </div>

                    {{-- Información comercial --}}
                    <div class="section-title">Información comercial</div>

                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="neg_nombre_comercial" class="form-label">Nombre comercial</label>
                            <input type="text" name="neg_nombre_comercial" id="neg_nombre_comercial" class="form-input"
                                value="{{ old('neg_nombre_comercial') }}" required>
                            @error('neg_nombre_comercial')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group full-width">
                            <label for="neg_sitio_web" class="form-label">Sitio web</label>
                            <input type="url" name="neg_sitio_web" id="neg_sitio_web" class="form-input"
                                placeholder="https://tu-dominio.com" value="{{ old('neg_sitio_web') }}">
                            @error('neg_sitio_web')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="neg_facebook" class="form-label">Facebook (URL)</label>
                            <input type="url" name="neg_facebook" id="neg_facebook" class="form-input"
                                value="{{ old('neg_facebook') }}">
                            @error('neg_facebook')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="neg_instagram" class="form-label">Instagram (URL)</label>
                            <input type="url" name="neg_instagram" id="neg_instagram" class="form-input"
                                value="{{ old('neg_instagram') }}">
                            @error('neg_instagram')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group full-width">
                            <label for="neg_categorias" class="form-label">Categorías</label>
                            <textarea name="neg_categorias" id="neg_categorias" class="form-textarea" rows="3"
                                placeholder="Ej: alimentos, artesanías, ropa">{{ old('neg_categorias') }}</textarea>
                            @error('neg_categorias')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="neg_equipo" class="form-label">Equipo (responsables)</label>
                            <input type="text" name="neg_equipo" id="neg_equipo" class="form-input"
                                placeholder="Ej: Juan Pérez; Ana López" value="{{ old('neg_equipo') }}">
                            @error('neg_equipo')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="neg_direccion" class="form-label">Dirección</label>
                            <input type="text" name="neg_direccion" id="neg_direccion" class="form-input"
                                value="{{ old('neg_direccion') }}">
                            @error('neg_direccion')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label d-block">¿Es un negocio virtual?</label>
                            <input type="hidden" name="neg_virtual" value="0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="neg_virtual" name="neg_virtual"
                                    value="1" {{ old('neg_virtual') ? 'checked' : '' }}>
                                <label class="form-check-label" for="neg_virtual">Sí, opero sin dirección física.</label>
                            </div>
                            @error('neg_virtual')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label d-block">Confirmo que la dirección es correcta</label>
                            <input type="hidden" name="neg_direccion_confirmada" value="0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="neg_direccion_confirmada"
                                    name="neg_direccion_confirmada" value="1"
                                    {{ old('neg_direccion_confirmada') ? 'checked' : '' }}>
                                <label class="form-check-label" for="neg_direccion_confirmada">Sí, es correcta</label>
                            </div>
                            @error('neg_direccion_confirmada')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Términos --}}
                    <div class="section-title">Confirmaciones</div>
                    <div class="mb-2">
                        <input type="hidden" name="neg_acepto" value="0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="neg_acepto" name="neg_acepto"
                                value="1" required {{ old('neg_acepto') ? 'checked' : '' }}>
                            <label class="form-check-label" for="neg_acepto">
                                Acepto la política de privacidad y condiciones.
                            </label>
                        </div>
                        @error('neg_acepto')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Enviar --}}
                    <div class="mt-3">
                        <button type="submit" class="submit-btn">
                            <span>Crear negocio</span>
                            <div class="btn-shimmer"></div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>

    @push('scripts')
        <script>
            const imgInput = document.getElementById('neg_imagen');
            const imgPrev = document.getElementById('neg_preview_img');
            imgInput?.addEventListener('change', e => {
                const f = e.target.files?.[0];
                if (!f) return;
                imgPrev.src = URL.createObjectURL(f);
            });

            const portadaInput = document.getElementById('neg_portada');
            const portadaPrev = document.getElementById('neg_preview_portada');
            portadaInput?.addEventListener('change', e => {
                const f = e.target.files?.[0];
                if (!f) return;
                portadaPrev.src = URL.createObjectURL(f);
            });
        </script>
    @endpush
@endsection
