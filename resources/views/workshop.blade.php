<!DOCTYPE html>
<html>
<body class="bg-gray-200">
    <title>Talleres Disponibles | Telesecundaria Justo Sierra</title>
<body>
    @include('layout.main_template')
<main class="mx-auto mt-10 p-20 bg-white rounded-lg shadow-lg max-w-7xl" style="width: 95%">
    <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Talleres Disponibles</h1>
    <p class="text-lg text-gray-600 text-center mb-10">
        Explora los talleres que ofrecemos para enriquecer la educación y el desarrollo personal de nuestros estudiantes.
    </p>

    {{-- Apartado para visualización de talleres --}}
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 justify-center">
        @forelse ($workshops as $workshop)
            <div class="bg-gray-100 rounded-xl shadow-lg p-6 flex flex-col items-center hover:scale-105 transition-transform duration-300 w-80">
                <img src="/image/workshops/{{$workshop->image_workshop}}"
                     alt="Imagen de {{ $workshop->name_workshop }}"
                     class="w-full h-64 object-cover mb-6 rounded-lg">

                <h2 class="text-2xl font-bold mb-3 text-gray-800 text-center w-full">
                    {{ $workshop->name_workshop }}
                </h2>

                <p class="text-gray-700 text-center mb-4 w-full whitespace-normal break-words" title="{{ $workshop->description_workshop }}">
                    {{ $workshop->description_workshop }}
                </p>

                <p class="text-sm text-gray-500 mt-auto w-full text-center">📅 Fecha de publicación:
                     {{ \Carbon\Carbon::parse($workshop->date_workshop)->format('d/m/Y') }}
                </p>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-400 py-10 text-lg">
                No hay talleres registrados.
            </div>
        @endforelse
    </div>

                <div class="flex justify-center mt-4 ">
                    <a href="{{ url('/workshop_activities') }}" class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center width-64">
                       Ver actividades de los talleres
                    </a>
                </div>
</main>
    @include('layout.footer_template')
</body>
</html>
