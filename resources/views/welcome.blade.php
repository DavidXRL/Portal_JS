@vite('resources/css/app.css')

<body class="bg-green-50 text-gray-900">

@include('layout.main_template')

<main class="mx-auto mt-10 p-6 md:p-20 bg-white rounded-2xl shadow-xl w-[97%]">

    {{-- Hero / Introducción --}}
    <section class="mb-12">
        <div class="flex flex-col md:flex-row items-center gap-10 bg-gradient-to-r from-[#10621E]/10 via-[#51A35F]/10 to-[#82C38D]/10 rounded-2xl shadow-md p-8 md:p-12">
            <div class="w-full md:w-2/3 mx-auto">
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#00410B] drop-shadow-lg mb-6 text-center md:text-left leading-tight">
                    🎓 Bienvenidos a la<br class="block md:hidden"> Escuela Telesecundaria<br class="block md:hidden"> Justo Sierra
                </h1>
                <p class="text-gray-900 text-lg md:text-xl leading-relaxed text-center md:text-justify">
                    En la Escuela Telesecundaria Justo Sierra nos dedicamos a ofrecer una educación de calidad, promoviendo valores, el desarrollo integral y el pensamiento crítico en nuestros estudiantes.<br class="hidden md:block">
                    Nuestro equipo docente está comprometido con la formación académica y humana, en un ambiente seguro y motivador.
                </p>
            </div>
        </div>
    </section>

    {{-- Carrusel de imágenes --}}
    <section class="mb-12">
        <div id="carousel" class="relative w-full max-w-7xl mx-auto rounded-2xl shadow-lg overflow-hidden">
            <div class="flex transition-transform duration-700 ease-in-out" id="carousel-images" style="transform: translateX(0);">
                @for ($i = 1; $i <= 6; $i++)
                <img src="{{ asset('img/img_esc' . $i . '.jpg') }}" alt="Imagen {{ $i }}" class="w-full flex-shrink-0 object-cover h-[32rem]" style="min-width:100%; max-width:100%;">
                @endfor
            </div>
            <!-- Controles -->
            <button id="carousel-prev" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-90 rounded-full p-2 shadow-lg hover:bg-blue-200 transition border-2 border-blue-400" aria-label="Anterior">
                <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="carousel-next" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-90 rounded-full p-2 shadow-lg hover:bg-blue-200 transition border-2 border-blue-400" aria-label="Siguiente">
                <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
            </button>
            <!-- Indicadores -->
            <div class="flex justify-center mt-3 gap-2">
                @for ($i = 0; $i < 6; $i++)
                <button class="w-3 h-3 rounded-full bg-gray-400 border-2 border-blue-400 transition" data-carousel-indicator="{{ $i }}"></button>
                @endfor
            </div>
        </div>
    </section>

    {{-- ¿Por qué elegirnos? --}}
    <section class="mb-12">
        <h2 class="text-3xl font-extrabold text-[#10621E] mb-6 text-center drop-shadow-md">🌟 ¿Por qué elegirnos?</h2>
        <ul class="grid md:grid-cols-3 gap-6 text-lg text-gray-700">
            <li class="bg-[#E6F4EC] rounded-2xl p-6 shadow flex items-start gap-4">
                <span class="text-4xl">👩‍🏫</span>
                <div>
                    <span class="font-semibold text-[#00410B]">Docentes calificados:</span>
                    Nuestro personal está altamente capacitado y comprometido con la educación.
                </div>
            </li>
            <li class="bg-[#E6F4EC] rounded-2xl p-6 shadow flex items-start gap-4">
                <span class="text-4xl">🛡️</span>
                <div>
                    <span class="font-semibold text-[#00410B]">Ambiente seguro:</span>
                    Fomentamos el respeto, la inclusión y la sana convivencia.
                </div>
            </li>
            <li class="bg-[#E6F4EC] rounded-2xl p-6 shadow flex items-start gap-4">
                <span class="text-4xl">🤝</span>
                <div>
                    <span class="font-semibold text-[#00410B]">Participación familiar:</span>
                    Promovemos la colaboración entre escuela y familia para el desarrollo de los estudiantes.
                </div>
            </li>
        </ul>
    </section>

    {{-- Talleres --}}
    <section class="bg-[#f0fdf4] rounded-2xl shadow-xl p-10 my-12">
        <h2 class="text-3xl font-extrabold text-[#10621E] mb-6 text-center drop-shadow-md">🛠️ Descubre Nuestros Talleres</h2>
        <p class="text-gray-900 mb-8 font-semibold text-center max-w-3xl mx-auto">
            Ofrecemos una variedad de talleres diseñados para fomentar el aprendizaje y la creatividad en nuestros estudiantes.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @php
                $talleres = [
                    ['icon' => '💻', 'title' => 'Computación', 'desc' => 'Habilidades digitales, manejo de software y herramientas tecnológicas.'],
                    ['icon' => '💃', 'title' => 'Danza', 'desc' => 'Expresión artística y cultural, trabajo en equipo y confianza.'],
                    ['icon' => '🥁', 'title' => 'Banda de Guerra', 'desc' => 'Disciplina, coordinación y trabajo en equipo en la banda de guerra escolar.'],
                    ['icon' => '🤖', 'title' => 'Robótica', 'desc' => 'Innovación y lógica construyendo y programando robots.'],
                ];
            @endphp
            @foreach ($talleres as $taller)
                <div class="bg-white rounded-3xl p-6 shadow-lg flex flex-col items-center hover:shadow-2xl transition">
                    <div class="bg-[#d1f2d8] rounded-full p-5 mb-4 text-4xl">
                        {{ $taller['icon'] }}
                    </div>
                    <h3 class="text-xl font-semibold text-[#10621E] mb-2 text-center">{{ $taller['title'] }}</h3>
                    <p class="text-gray-700 text-center text-lg">{{ $taller['desc'] }}</p>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-10">
            <a href="{{ url('/workshop') }}" class="bg-[#10621E] hover:bg-[#00410B] text-white font-semibold py-3 px-10 rounded-full shadow-lg transition text-lg flex items-center gap-3">
                🔎 Ver todos los talleres
            </a>
        </div>
    </section>

    {{-- Información de contacto --}}
    <section id="contact-info" class="my-12 px-4 md:px-8">
        <h2 class="text-3xl font-extrabold text-[#10621E] mb-10 text-center drop-shadow-md">📞 Información de Contacto</h2>
        <div class="flex flex-col md:flex-row items-start gap-12 max-w-6xl mx-auto">

            {{-- Mapa --}}
            <div class="w-full md:w-1/2 rounded-2xl overflow-hidden shadow-xl h-[350px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.523615185297!2d-97.086612!3d20.4436762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dbb336b0b95a85%3A0xa3693e1b7aabd870!2sEscuela%20Telesecundaria%20Justo%20Sierra!5e0!3m2!1ses!2smx!4v1747069694177!5m2!1ses!2smx"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            {{-- Datos contacto --}}
            <div class="w-full md:w-1/2 bg-[#E6F4EC] rounded-2xl shadow-lg p-8 space-y-8">
                <div>
                    <h4 class="text-xl font-semibold text-[#00410B] flex items-center gap-3 mb-3">
                        📍 Dirección
                    </h4>
                    <p class="text-gray-900 leading-relaxed">
                        Calle De La Juventud S/N, Colonia Hidalgo,<br>
                        93550 Gutiérrez Zamora, Veracruz, México
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#00410B] flex items-center gap-3 mb-3">
                        ⏰ Horario de atención
                    </h4>
                    <ul class="text-gray-900 leading-relaxed space-y-2 list-disc list-inside">
                        <li>Lunes a Viernes: <span class="font-medium">8:00 am - 2:00 pm</span></li>
                        <li>Sábado y Domingo: <span class="font-medium">Cerrado</span></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#00410B] flex items-center gap-3 mb-3">
                        ☎️ Contacto rápido
                    </h4>
                    <ul class="text-gray-900 leading-relaxed space-y-2">
                        <li><span class="font-semibold">Teléfono:</span> <a href="tel:7668451494" class="underline"> (766) 845-1494 </a></li>
                        <li><span class="font-semibold">Correo:</span> <a href="mailto:30dtv0296r@secundaria.msev.gob.mx" class="underline">30dtv0296r@secundaria.msev.gob.mx</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>

@include('layout.footer_template')

</body>
