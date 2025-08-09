@extends('layouts.empresa')

@section('title', 'Configuración del Negocio')

@section('content')
    <div class="px-8 py-10 min-h-screen">
        {{-- Mensajes --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 rounded px-4 py-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-800 rounded px-4 py-3 mb-4">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Encabezado --}}
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-indigo-700">⚙️ Configuración del Website</h2>
            <p class="text-sm text-gray-600">Personaliza tu website con las plantillas que tenemos para ti.</p>
        </div>

        <div class="w-full md:w-[80%]">
            <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">

                {{-- EL FORMULARIO AHORA ENVUELVE LA SECCIÓN DE PLANTILLAS --}}
                <form action="{{ route('website.guardar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="empresa_id" value="{{ $empresa->id }}">

                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Selecciona una Plantilla</h3>

                    {{-- NUEVA SECCIÓN DE PLANTILLAS CON RADIO BUTTONS --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">

                        {{-- Iteramos sobre todas las plantillas disponibles --}}
                        @foreach ($plantillas as $plantilla)
                            {{-- La etiqueta <label> permite seleccionar el radio al hacer clic en cualquier parte de la tarjeta --}}
                            <label for="plantilla-{{ $plantilla->id }}"
                                class="border rounded-lg p-4 cursor-pointer hover:shadow-lg transition-shadow duration-200
                                   {{-- LÓGICA DE SELECCIÓN --}}
                                   {{-- Se comprueba si existe una plantilla seleccionada y si su ID coincide con el de la iteración actual --}}
                                   @if (isset($plantillaSeleccionada) && $plantilla->id == $plantillaSeleccionada->id) border-indigo-600 ring-2 ring-indigo-500  {{-- Estilo para la plantilla seleccionada --}}
                                   @else
                                       border-gray-200  {{-- Estilo para las no seleccionadas --}} @endif
                            ">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-semibold text-gray-800">{{ $plantilla->nombre }}</h4>

                                    {{-- RADIO BUTTON --}}
                                    <input type="radio" name="plantilla_id" {{-- Importante: Mismo 'name' para todas --}}
                                        id="plantilla-{{ $plantilla->id }}" value="{{ $plantilla->id }}"
                                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300"
                                        {{-- El atributo 'checked' se añade si la plantilla es la seleccionada --}} @if (isset($plantillaSeleccionada) && $plantilla->id == $plantillaSeleccionada->id) checked @endif>
                                </div>
                                <p class="text-sm text-gray-600 mt-1">{{ $plantilla->descripcion }}</p>
                            </label>
                        @endforeach
                    </div>

                    {{-- BOTÓN DE GUARDAR --}}
                    <div>
                        <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm px-5 py-2 rounded-md transition-colors">
                            Guardar Cambios
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- Puedes eliminar el JavaScript si ya no necesitas un botón de "Editar" separado --}}
    {{-- Si lo mantienes, asegúrate de que muestre y oculte el formulario que ahora contiene todo --}}
@endsection
