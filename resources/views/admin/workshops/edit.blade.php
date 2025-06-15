<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Detalles del Taller | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-gray-100 via-white to-gray-200 min-h-screen">
    @include('layout.main_template')

    <main class="flex items center justify-center min-h-screen">
        <section class="w-full max-w-2xl bg-white/90 rounded-3xl shadow-2xl p-10 border border-gray-200">
            <h1 class="text-4xl font-extrabold text-center text-gray-700 mb-10 drop-shadow-lg">
                Editar Información del Taller
            </h1>

            @if ($errors->any())
                <div class="mb-6 bg-red-50 border border-red-300 text-red-700 px-4 py-3 rounded-xl shadow">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('workshops.update', $workshop->id) }}" method="POST" enctype="multipart/form-data" class="space-y-7">
                @csrf
                @method('PUT')

                <div>
                    <label for="name_workshop" class="block text-base font-semibold text-gray-800 mb-2">Nombre del taller</label>
                    <input
                        type="text"
                        name="name_workshop"
                        id="name_workshop"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('name_workshop', $workshop->name_workshop) }}"
                    >
                </div>
                <div>
                    <label for="description_workshop" class="block text-base font-semibold text-gray-800 mb-2">Descripción</label>
                    <textarea
                        name="description_workshop"
                        id="description_workshop"
                        rows="4"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                    >{{ old('description_workshop', $workshop->description_workshop) }}</textarea>
                </div>
                <div>
                    <label for="date_workshop" class="block text-base font-semibold text-gray-800 mb-2">Fecha de publicación</label>
                    <input
                        type="date"
                        name="date_workshop"
                        id="date_workshop"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('date_workshop', $workshop->date_workshop) }}"
                    >
                </div>


                <div>
                    <label for="image_workshop" class="block text-base font-semibold text-gray-800 mb-2">Imagen del taller</label>
                    <input
                        type="file"
                        name="image_workshop"
                        id="image_workshop"
                        accept="image/*"
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('image_workshop', $workshop->image_workshop) }}"
                    >

                    <p class="text-center font-bold text-gray-700 mt-8">Imagen actual:</p>
                    <div class="flex justify-center">
                        <img src="/image/workshops/{{ $workshop->image_workshop }}"
                            alt="Imagen del taller"
                            class="max-w-full max-h-80 md:max-h-96 h-auto object-contain rounded-xl border-2 border-gray-200 shadow-md" />
                    </div>
                </div>

                 <div>
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all"
                    >Guardar Cambios
                    </button>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="{{ route('activities.index') }}"
                       class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center"
                    >
                        Volver a la vista de talleres
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
