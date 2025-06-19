<!DOCTYPE html>
<html>
<head>
    <title>Sobre nosotros | Telesecundaria Justo Sierra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-green-100 min-h-screen">

    @include('layout.main_template')

    <main class="mx-auto mt-10 p-5 bg-white rounded-3xl shadow-2xl" style="width: 95%">

        <!-- TÍTULO -->
        <div class="flex flex-col items-center mb-12">
            <h1 class="text-5xl md:text-6xl font-extrabold text-center text-gray-900 drop-shadow-lg mb-4 mt-9 flex items-center gap-4">
                <span>📚</span>SOBRE NOSOTROS<span>🏫</span>
            </h1>
            <div class="h-2 w-40  rounded-full mb-2"></div>
        </div>

        <!-- NUESTRA HISTORIA -->
        <section class="mb-10">
            <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12 tracking-wide flex items-center justify-center gap-3">
                <span>🕰️</span>NUESTRA HISTORIA
            </h2>
            <div class="relative max-w-5xl mx-auto bg-gradient-to-br from-white via-green-50 to-green-50 rounded-3xl shadow-xl p-8 border border-gray-200">
                <div class="pl-6 border-l-4 border-green-400">
                    <p class="text-lg text-gray-700 text-justify mb-6 leading-relaxed">
                        A lo largo de más de <span class="font-semibold text-gray-900">40 años</span> 🎉, la Escuela Telesecundaria “Justo Sierra” ha sido un pilar educativo en la comunidad, forjando
                        generaciones de estudiantes con valores, compromiso y visión de futuro. Su crecimiento ha sido posible gracias al esfuerzo conjunto de docentes, familias y autoridades,
                        construyendo una institución que hoy sigue avanzando con firmeza hacia una educación de calidad.
                    </p>
                    <p class="text-lg text-gray-700 text-justify mb-6 leading-relaxed">
                        Fundada en <span class="font-semibold text-gray-900">1977</span> 📅 con una matrícula inicial de 40 alumnos, la escuela inició sus actividades en un espacio prestado por el Sindicato de la C.T.M.,
                        bajo la Dirección General para Adultos. La profesora <span class="font-semibold text-gray-900">Úrsula Zaleta Salazar</span> 👩‍🏫, fundadora de la institución, fue clave en esos primeros pasos marcados
                        por la esperanza y el compromiso.
                    </p>
                    <p class="text-lg text-gray-700 text-justify mb-6 leading-relaxed">
                        Gracias al apoyo del Ayuntamiento, padres de familia y la comunidad 🤝, la escuela se estableció en su ubicación actual dentro de la Colonia Hidalgo, donde se construyeron las primeras aulas y servicios sanitarios.
                    </p>
                    <p class="text-lg text-gray-700 text-justify leading-relaxed">
                        Hoy, la Telesecundaria “Justo Sierra” se mantiene a la vanguardia educativa 🚀, fortaleciendo el trabajo en equipo, el respeto y la participación activa de todos los involucrados. Bajo la dirección del
                        profesor <span class="font-semibold text-gray-900">Joel Aguilera Luna</span> 👨‍🏫, se promueve una educación integral que impacta positivamente en el desarrollo de los estudiantes y en el bienestar de la
                        comunidad con humanismo e inclusión ante los retos de la Nueva Escuela Mexicana.
                    </p>
                </div>
            </div>
        </section>

        <!-- MISIÓN Y VISIÓN -->
        <section class="px-6 py-16  text-center flex flex-col items-center rounded-2xl">
            <!-- Misión -->
            <div class="mb-16 w-full max-w-4xl bg-gradient-to-b from-green-100 to-white border border-green-200 rounded-2xl shadow-lg p-10 transition-transform hover:scale-[1.03] duration-300">
                <h3 class="text-4xl font-extrabold text-green-900 uppercase tracking-widest mb-4 flex items-center justify-center gap-2">
                    <span>🎯</span>Misión
                </h3>
                <div class="h-1 w-24 bg-green-400 rounded-full mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Proporcionar una educación de calidad y eficaz en el ámbito formativo para nuestros alumnos. 🌱
                </p>
            </div>

            <!-- Visión -->
            <div class="w-full max-w-4xl bg-gradient-to-b from-green-100 to-white border border-green-200 rounded-2xl shadow-lg p-10 transition-transform hover:scale-[1.03] duration-300">
                <h3 class="text-4xl font-extrabold text-green-900 uppercase tracking-widest mb-4 flex items-center justify-center gap-2">
                    <span>🔭</span>Visión
                </h3>
                <div class="h-1 w-24 bg-green-400 rounded-full mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Ser una institución de alto prestigio y capacidad, enfocada en la formación integral y el desarrollo de habilidades fundamentales en nuestros alumnos, mediante el uso de herramientas pedagógicas y tecnológicas sustentadas en valores universales. 🌟
                </p>
            </div>
        </section>

        <!-- VALORES INSTITUCIONALES -->
        <section class="mb-16 px-6">
            <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12 tracking-tight flex items-center justify-center gap-2">
                <span>💎</span>VALORES INSTITUCIONALES
            </h2>
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">
                <!-- Valor -->
                @php
                $valores = [
                    ['nombre' => 'Solidaridad', 'emoji' => '🤗', 'desc' => 'Promovemos el apoyo mutuo entre alumnos, docentes, padres y autoridades para formar un equipo unido y comprometido.'],
                    ['nombre' => 'Responsabilidad', 'emoji' => '📝', 'desc' => 'Impulsamos el cumplimiento de tareas con orden, puntualidad y compromiso, mejorando cada día por el bien común.'],
                    ['nombre' => 'Justicia', 'emoji' => '⚖️', 'desc' => 'Aplicamos reglas equitativas que fomentan la reflexión, el respeto y la oportunidad de mejorar a través de las experiencias.'],
                    ['nombre' => 'Respeto', 'emoji' => '🙏', 'desc' => 'Escuchamos y valoramos la opinión de los demás, manteniendo una actitud digna y cordial en toda convivencia.'],
                    ['nombre' => 'Tolerancia', 'emoji' => '🤝', 'desc' => 'Fomentamos la aceptación de diferencias y el diálogo como base para una sana convivencia dentro y fuera del aula.'],
                ];
                @endphp

                @foreach ($valores as $valor)
                    <div class="bg-gradient-to-br from-white to-green-50 rounded-2xl shadow-md p-8 hover:shadow-2xl transition duration-300 border border-green-200">
                        <div class="flex items-center justify-center w-16 h-16 mb-4 bg-green-100 rounded-full text-3xl">
                            {{ $valor['emoji'] }}
                        </div>
                        <h3 class="text-2xl font-semibold text-green-700 mb-2">{{ $valor['nombre'] }}</h3>
                        <p class="text-gray-600">{{ $valor['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    @include('layout.footer_template')

</body>
</html>
