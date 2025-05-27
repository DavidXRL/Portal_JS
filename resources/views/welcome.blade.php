@vite('resources/css/app.css')

<body class="bg-gray-200">
    <title>Inicio | Telesecundaria Justo Sierra</title>

@include('layout.main_template')

<main class="mx-auto mt-10 p-20 bg-white rounded-lg shadow-lg" style="width: 97%">
    <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Bienvenidos a la Escuela Telesecundaria Justo Sierra</h1>
    <section class="mb-15">
        <p class="text-lg text-gray-700 mb-8  text-justify">
            En la Escuela Telesecundaria Justo Sierra nos dedicamos a ofrecer una educación de calidad, promoviendo valores, el desarrollo integral y el pensamiento crítico en nuestros estudiantes. Nuestro equipo docente está comprometido con la formación académica y humana, en un ambiente seguro y motivador.
        </p>

        <!-- Carrusel de imágenes -->
        <div id="carousel" class="relative w-full max-w-7xl mx-auto mb-10">
            <div class="overflow-hidden rounded-lg shadow-lg">
            <div class="flex transition-transform duration-700 ease-in-out" id="carousel-images" style="transform: translateX(0);">
                @for ($i = 1; $i <= 6; $i++)
                <img src="{{ asset('img/img_esc' . $i . '.jpg') }}" alt="Imagen {{ $i }}" class="w-full flex-shrink-0 object-cover h-[32rem]" style="min-width:100%;max-width:100%;">
                @endfor
            </div>
            </div>
            <!-- Controles -->
            <button id="carousel-prev" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-80 rounded-full p-2 shadow hover:bg-gray-100 transition" aria-label="Anterior">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="carousel-next" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-80 rounded-full p-2 shadow hover:bg-gray-100 transition" aria-label="Siguiente">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
            </button>
            <!-- Indicadores -->
            <div class="flex justify-center mt-3 gap-2">
            @for ($i = 0; $i < 6; $i++)
                <button class="w-3 h-3 rounded-full bg-gray-400 border-2 border-gray-600 transition" data-carousel-indicator="{{ $i }}"></button>
            @endfor
            </div>
        </div>
    </section>

    <section class="mb-10">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">¿Por qué elegirnos?</h2>
        <ul class="grid md:grid-cols-3 gap-6 text-lg text-gray-700">
            <li class="bg-gray-50 rounded-lg p-4 shadow">
                <span class="font-semibold text-gray-800">Docentes calificados:</span> Nuestro personal está altamente capacitado y comprometido con la educación.
            </li>
            <li class="bg-gray-50 rounded-lg p-4 shadow">
                <span class="font-semibold text-gray-800">Ambiente seguro:</span> Fomentamos el respeto, la inclusión y la sana convivencia.
            </li>
            <li class="bg-gray-50 rounded-lg p-4 shadow">
                <span class="font-semibold text-gray-800">Participación familiar:</span> Promovemos la colaboración entre escuela y familia para el desarrollo de los estudiantes.
            </li>
        </ul>
    </section>
    <section class="bg-gray-100 rounded-2xl shadow-lg p-8 my-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Talleres y Actividades</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Computación -->
            <div class="bg-white rounded-xl p-5 shadow flex flex-col items-center hover:shadow-lg transition">
                <div class="bg-gray-100 rounded-full p-4 mb-3">
                    <svg class="w-12 h-12 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="12" rx="2" stroke="currentColor" fill="none"/>
                        <path d="M8 20h8M12 16v4" stroke="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1 text-center">Computación</h3>
                <p class="text-gray-600 text-center text-sm">
                    Habilidades digitales, manejo de software y herramientas tecnológicas.
                </p>
            </div>
            <!-- Danza / Baile -->
            <div class="bg-white rounded-xl p-5 shadow flex flex-col items-center hover:shadow-lg transition">
                <div class="bg-gray-100 rounded-full p-4 mb-3">
                    <svg class="w-12 h-12 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9 18V5l12-2v13" stroke="currentColor"/>
                        <circle cx="6" cy="18" r="3" stroke="currentColor"/>
                        <circle cx="18" cy="16" r="3" stroke="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1 text-center">Danza</h3>
                <p class="text-gray-600 text-center text-sm">
                    Expresión artística y cultural, trabajo en equipo y confianza.
                </p>
            </div>
            <!-- Banda de Guerra -->
            <div class="bg-white rounded-xl p-5 shadow flex flex-col items-center hover:shadow-lg transition">
                <div class="bg-gray-100 rounded-full p-4 mb-3">
                    <svg class="w-12 h-12 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <ellipse cx="12" cy="7" rx="8" ry="3" stroke="currentColor" fill="white"/>
                        <rect x="4" y="7" width="16" height="8" rx="4" stroke="currentColor" fill="none"/>
                        <ellipse cx="12" cy="15" rx="8" ry="3" stroke="currentColor" fill="white"/>
                        <line x1="4" y1="7" x2="4" y2="15" stroke="currentColor"/>
                        <line x1="20" y1="7" x2="20" y2="15" stroke="currentColor"/>
                        <line x1="7" y1="3" x2="17" y2="9" stroke="currentColor"/>
                        <line x1="17" y1="3" x2="7" y2="9" stroke="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1 text-center">Banda de Guerra</h3>
                <p class="text-gray-600 text-center text-sm">
                    Disciplina, coordinación y trabajo en equipo en la banda de guerra escolar.
                </p>
            </div>
            <!-- Robótica -->
            <div class="bg-white rounded-xl p-5 shadow flex flex-col items-center hover:shadow-lg transition">
                <div class="bg-gray-100 rounded-full p-4 mb-3">
                    <svg class="w-12 h-12 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="6" y="8" width="12" height="8" rx="2" stroke="currentColor"/>
                        <rect x="9" y="16" width="6" height="3" rx="1" stroke="currentColor"/>
                        <circle cx="9" cy="12" r="1" fill="currentColor"/>
                        <circle cx="15" cy="12" r="1" fill="currentColor"/>
                        <path d="M12 8V5M7 5h10" stroke="currentColor"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-1 text-center">Robótica</h3>
                <p class="text-gray-600 text-center text-sm">
                    Innovación y lógica construyendo y programando robots.
                </p>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <a
               href="{{ url('/workshop') }}"
               class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-3 px-8 rounded-full shadow transition text-lg">
            Saber más
            </a>
        </div>
    </section>

  <section class="my-12 px-4 md:px-8" id="contact-info">
    <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">INFORMACIÓN DE CONTACTO</h2>
    <div class="flex flex-col md:flex-row items-start gap-10">

        <!-- Mapa -->
        <div class="w-full md:w-1/2">
            <div class="w-full h-[350px] rounded-2xl overflow-hidden shadow-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.523615185297!2d-97.086612!3d20.4436762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85dbb336b0b95a85%3A0xa3693e1b7aabd870!2sEscuela%20Telesecundaria%20Justo%20Sierra!5e0!3m2!1ses!2smx!4v1747069694177!5m2!1ses!2smx"
                    width="100%" height="100%" style="border:0;"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Información de contacto -->
        <div class="w-full md:w-1/2 bg-gray-50 rounded-2xl shadow-lg p-8 space-y-6">

            <!-- Dirección -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 flex items-center gap-2 mb-2">
                    <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z"/>
                    </svg>
                    Dirección
                </h4>
                <p class="text-gray-700 leading-relaxed">
                    Calle De La Juventud S/N, Colonia Hidalgo,<br>
                    93550 Gutiérrez Zamora, Veracruz, México
                </p>
            </div>

            <!-- Horario -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 flex items-center gap-2 mb-2">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5zm7 14v-4h4v4m-4-4V7h4v8"/>
                    </svg>
                    Horario de atención
                </h4>
                <ul class="text-gray-700 leading-relaxed space-y-1">
                    <li>Lunes a Viernes: <span class="font-medium">8:00 am - 2:00 pm</span></li>
                    <li>Sábado y Domingo: <span class="font-medium">Cerrado</span></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h4 class="text-lg font-semibold text-gray-800 flex items-center gap-2 mb-2">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M22 16.92V19a2 2 0 0 1-2.18 2A19.72 19.72 0 0 1 3 5.18 2 2 0 0 1 5 3h2.09a2 2 0 0 1 2 1.72c.13 1.05.37 2.07.72 3.06a2 2 0 0 1-.45 2.11l-1.27 1.27a16 16 0 0 0 6.29 6.29l1.27-1.27a2 2 0 0 1 2.11-.45c.99.35 2.01.59 3.06.72A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Contacto rápido
                </h4>
                <ul class="text-gray-700 leading-relaxed space-y-1">
                    <li><span class="font-semibold">Teléfono:</span> <a class="text-gray-800">(766) 845-1494</a></li>
                    <li class="break-words">
  <span class="font-semibold">Correo:</span>
  <span class="text-gray-800 ml-1 break-words">
    30dtv0296r@secundaria.msev.gob.mx
  </span>
</li>

                </ul>
            </div>

        </div>
    </div>
</section>



    <section class="mb-12">

    </section>
</main>
@include('layout.footer_template')

</body
