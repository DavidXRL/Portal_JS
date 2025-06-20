<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar actividad | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css']) <!-- Tailwind CSS activo -->
</head>
<body class="bg-gradient-to-br from-gray-100 to-red-100 min-h-screen flex flex-col">
    @include('layout.main_template-admin')

    <main class="flex flex-1 items-center justify-center px-4 py-12">
        <div class="bg-white border border-red-200 rounded-2xl shadow-2xl w-full max-w-3xl p-6 sm:p-10 space-y-8">

            <!-- Advertencia -->
            <div class="text-center space-y-3">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-red-700">¿Eliminar actividad?</h1>
                <p class="text-gray-600 text-lg">Estás a punto de eliminar esta actividad. <strong>Esta acción no se puede deshacer.</strong></p>
            </div>

            <!-- Imagen centrada -->
            <div class="flex justify-center">
                <img src="/image/activities/{{ $activity->image_activity }}"
                     alt="Imagen de la actividad"
                     class="w-full max-w-xl h-64 sm:h-80 object-cover rounded-xl border-4 border-red-300 shadow-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Información detallada -->
            <div class="bg-gray-50 w-full rounded-xl p-6 shadow-inner space-y-3 text-gray-800">
                <p><span class="font-semibold text-gray-900">Nombre:</span> {{ $activity->name_act }}</p>
                <p><span class="font-semibold text-gray-900">Descripción:</span> {{ $activity->description_activity }}</p>
                <p><span class="font-semibold text-gray-900">Fecha:</span> {{ \Carbon\Carbon::parse($activity->date_activity)->format('d/m/Y') }}</p>
                <p>
                    <span class="font-semibold text-gray-900">Hora de publicación:</span>
                    {{ $activity->time_activity ? \Carbon\Carbon::parse($activity->time_activity)->format('H:i') : 'Sin hora' }}
                </p>
            </div>

            <!-- Botones -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <!-- Cancelar -->
                <form action="{{ route('activities.index') }}" class="w-full sm:w-auto">
                    <button type="submit"
                            class="w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-8 rounded-full shadow transition">
                        No, cancelar
                    </button>
                </form>

                <!-- Eliminar -->
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" class="w-full sm:w-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="w-full bg-red-600 hover:bg-red-500 text-white font-semibold py-2 px-8 rounded-full shadow transition">
                        Sí, eliminar
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
