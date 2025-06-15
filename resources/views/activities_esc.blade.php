<!DOCTYPE html>
<html>
<body class="bg-gray-200">
    <title>Actividades Escolares | Telesecundaria Justo Sierra</title>
<body>
    @include('layout.main_template')

<main class="mx-auto mt-10 p-20 bg-white rounded-lg shadow-lg max-w-7xl" style="width: 95%">

    <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Actividades de la escuela</h1>
    <p class="text-lg text-gray-600 text-center mb-10">
        Conoce las actividades que realiza nuestra escuela para impulsar el crecimiento y la participación de toda la comunidad educativa.
    </p>


    {{-- Apartado para visualización de actividades --}}
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 justify-center">
        @forelse ($activities as $activity)
            <div class="bg-gray-100 rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300 w-80">
                <img src="/image/activities/{{$activity->image_activity}}"
                     alt="Imagen de {{ $activity->name_act }}"
                     class="w-full h-64 object-cover mb-6 rounded-lg">

                <h2 class="text-2xl font-bold mb-3 text-gray-800 text-center w-full">
                    {{ $activity->name_act }}
                </h2>

                <p class="text-gray-700 text-center mb-4 w-full whitespace-normal break-words" title="{{ $activity->description_activity }}">
                    {{ $activity->description_activity }}
                </p>

                <p class="text-sm text-gray-500 mt-auto w-full text-center">📅 Fecha de publicación:
                     {{ \Carbon\Carbon::parse($activity->date_activity)->format('d/m/Y') }}
                </p>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-400 py-10 text-lg">
                No hay actividades registradas.
            </div>
        @endforelse
    </div>

</main>

    @include('layout.footer_template')
</body>
</html>
