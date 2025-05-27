<!DOCTYPE html>
<html>
<body class="bg-gray-200">
    <title>Sobre nosotros | Telesecundaria Justo Sierra</title>
<body>
    @include('layout.main_template')

    <main class="mx-auto mt-10 p-5 bg-white rounded-lg shadow-lg" style="width: 95%">
    <div class="flex flex-col items-center mb-12">
        <h1 class="text-5xl md:text-6xl font-extrabold text-center text-gray-900 drop-shadow-lg mb-4 mt-9">
            SOBRE NOSOTROS
        </h1>
        <div class="h-2 w-40 bg-gray-900 rounded-full mb-2"></div>
    </div>

    {{-- SECCIÓN DE LA HISTORIA --}}
<section class="mb-10">
  <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-12 tracking-wide">NUESTRA HISTORIA</h2>
  <div class="relative max-w-5xl mx-auto bg-white rounded-2xl shadow-lg p-4 border border-gray-200">
    <div class="pl-6 border-l-4 border-gray-700">
      <p class="text-lg text-gray-700 text-justify mb-6 leading-relaxed">
        A lo largo de más de <span class="font-semibold text-gray-900">40 años</span>, la Escuela Telesecundaria “Justo Sierra” ha sido un pilar educativo en la comunidad, forjando
        generaciones de estudiantes con valores, compromiso y visión de futuro. Su crecimiento ha sido posible gracias al esfuerzo conjunto de docentes, familias y autoridades,
        construyendo una institución que hoy sigue avanzando con firmeza hacia una educación de calidad.
      </p>
      <p class="text-lg text-gray-700 text-justify mb-6 leading-relaxed">
        Fundada en <span class="font-semibold text-gray-900">1977</span> con una matrícula inicial de 40 alumnos, la escuela inició sus actividades en un espacio prestado por el Sindicato de la C.T.M.,
        bajo la Dirección General para Adultos. La profesora <span class="font-semibold text-gray-900">Úrsula Zaleta Salazar</span>, fundadora de la institución, fue clave en esos primeros pasos marcados
        por la esperanza y el compromiso.
      </p>
      <p class="text-lg text-gray-700 text-justify mb-6 leading-relaxed">
        Gracias al apoyo del Ayuntamiento, padres de familia y la comunidad, la escuela se estableció en su ubicación actual dentro de la Colonia Hidalgo, donde se construyeron las primeras aulas y servicios sanitarios.
      </p>
      <p class="text-lg text-gray-700 text-justify leading-relaxed">
        Hoy, la Telesecundaria “Justo Sierra” se mantiene a la vanguardia educativa, fortaleciendo el trabajo en equipo, el respeto y la participación activa de todos los involucrados. Bajo la dirección del
        profesor <span class="font-semibold text-gray-900">Joel Aguilera Luna</span>, se promueve una educación integral que impacta positivamente en el desarrollo de los estudiantes y en el bienestar de la
        comunidad con humanismo e inclusión ante los retos de la Nueva Escuela Mexicana.
      </p>
    </div>
  </div>
</section>



{{-- SECCIÓN DE LA MISIÓN Y VISIÓN  --}}
<section class="px-6 py-16 bg-white text-center flex flex-col items-center">
  <!-- Misión -->
  <div class="mb-16 w-full max-w-4xl bg-gradient-to-b from-gray-100 to-white border border-gray-300 rounded-2xl shadow-lg p-10 transition-transform hover:scale-[1.02] duration-300">
    <h3 class="text-4xl font-extrabold text-gray-900 uppercase tracking-widest mb-4">Misión</h3>
    <div class="h-1 w-24 bg-gray-700 rounded-full mx-auto mb-6"></div>
    <p class="text-lg text-gray-700 leading-relaxed">
      Proporcionar una educación de calidad y eficaz en el ámbito formativo para nuestros alumnos.
    </p>
  </div>

  <!-- Visión -->
  <div class="w-full max-w-4xl bg-gradient-to-b from-gray-100 to-white border border-gray-300 rounded-2xl shadow-lg p-10 transition-transform hover:scale-[1.02] duration-300">
    <h3 class="text-4xl font-extrabold text-gray-900 uppercase tracking-widest mb-4">Visión</h3>
    <div class="h-1 w-24 bg-gray-700 rounded-full mx-auto mb-6"></div>
    <p class="text-lg text-gray-700 leading-relaxed">
      Ser una institución de alto prestigio y capacidad, enfocada en la formación integral y el desarrollo de habilidades fundamentales en nuestros alumnos, mediante el uso de herramientas pedagógicas y tecnológicas sustentadas en valores universales.
    </p>
  </div>
</section>



{{-- SECCIÓN DE VALORES INSTITUCIONALES --}}
<section class="mb-12 px-4">
  <h2 class="text-3xl font-extrabold text-center text-gray-900 mb-10 tracking-wide">
    VALORES INSTITUCIONALES
  </h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
    <!-- Respeto -->
    <div class="flex flex-col items-center bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center justify-center w-16 h-16 mb-4 bg-blue-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-700">
  <path d="M10.5 1.875a1.125 1.125 0 0 1 2.25 0v8.219c.517.162 1.02.382 1.5.659V3.375a1.125 1.125 0 0 1 2.25 0v10.937a4.505 4.505 0 0 0-3.25 2.373 8.963 8.963 0 0 1 4-.935A.75.75 0 0 0 18 15v-2.266a3.368 3.368 0 0 1 .988-2.37 1.125 1.125 0 0 1 1.591 1.59 1.118 1.118 0 0 0-.329.79v3.006h-.005a6 6 0 0 1-1.752 4.007l-1.736 1.736a6 6 0 0 1-4.242 1.757H10.5a7.5 7.5 0 0 1-7.5-7.5V6.375a1.125 1.125 0 0 1 2.25 0v5.519c.46-.452.965-.832 1.5-1.141V3.375a1.125 1.125 0 0 1 2.25 0v6.526c.495-.1.997-.151 1.5-.151V1.875Z" />
</svg>


      </div>
      <span class="text-xl font-bold text-gray-900 mb-2">Respeto</span>
      <p class="text-gray-600 text-center">Fomentamos la tolerancia y la consideración hacia los demás.</p>
    </div>

    <!-- Responsabilidad -->
    <div class="flex flex-col items-center bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center justify-center w-16 h-16 mb-4 bg-green-100 rounded-full">
        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
      </div>
      <span class="text-xl font-bold text-gray-900 mb-2">Responsabilidad</span>
      <p class="text-gray-600 text-center">Asumimos nuestros compromisos y deberes con integridad.</p>
    </div>

    <!-- Trabajo en equipo -->
    <div class="flex flex-col items-center bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center justify-center w-16 h-16 mb-4 bg-yellow-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
  <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
  <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
</svg>


      </div>
      <span class="text-xl font-bold text-gray-900 mb-2 text-center">Trabajo en equipo</span>
      <p class="text-gray-600 text-center">Colaboramos para lograr objetivos comunes y fortalecer la comunidad.</p>
    </div>

    <!-- Inclusión -->
    <div class="flex flex-col items-center bg-white rounded-xl shadow-lg p-8 transition-transform hover:scale-105 hover:shadow-2xl">
      <div class="flex items-center justify-center w-16 h-16 mb-4 bg-purple-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-purple-600">
  <path d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
</svg>

      </div>
      <span class="text-xl font-bold text-gray-900 mb-2">Inclusión</span>
      <p class="text-gray-600 text-center">Valoramos la diversidad y promovemos la igualdad de oportunidades.</p>
    </div>
  </div>
</section>



    </main>
     @include('layout.footer_template')
</body>
</html>
