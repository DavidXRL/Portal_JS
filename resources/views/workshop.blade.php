<!DOCTYPE html>
<html>
<body class="bg-gray-200">
    <title>Talleres | Telesecundaria Justo Sierra</title>
<body>
    @include('layout.main_template')

    <main class="mx-auto mt-10 p-20 bg-white rounded-lg shadow-lg" style="width: 95%">
        <section class="container mx-auto my-10">
            <h1 class="text-4xl font-extrabold mb-10 text-center text-gray-800 tracking-wide drop-shadow">
                Nuestros Talleres
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Computación -->
                <div class="bg-gray-100 rounded-xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <img src="#" alt="Imagen de Computación" class="w-full h-56 object-cover mb-6 rounded-lg bg-gray-200">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Computación</h2>
                    <p class="text-gray-700 text-center">
                        Aprende a usar computadoras, programas básicos y navega por internet de forma segura. Ideal para desarrollar habilidades digitales útiles en la vida diaria y escolar.
                    </p>
                </div>
                <!-- Robótica -->
                <div class="bg-gray-100 rounded-xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('img/img_rob.jpg') }}" alt="Imagen de Robótica" class="w-full h-56 object-cover mb-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Robótica</h2>
                    <p class="text-gray-700 text-center">
                        Descubre cómo construir y programar robots sencillos. Fomenta la creatividad, el trabajo en equipo y el pensamiento lógico mientras te diviertes resolviendo retos.
                    </p>
                </div>
                <!-- Danza -->
                <div class="bg-gray-100 rounded-xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('img/img_danza.jpg') }}" alt="Imagen de Danza" class="w-full h-56 object-cover mb-6 rounded-lg">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Danza</h2>
                    <p class="text-gray-700 text-center">
                        Desarrolla coordinación, expresión corporal y confianza participando en coreografías grupales. Comparte tu energía y talento en presentaciones escolares.
                    </p>
                </div>
                <!-- Banda de Guerra -->
                <div class="bg-gray-100 rounded-xl shadow-lg p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                    <img src="#" alt="Imagen de Banda de Guerra" class="w-full h-56 object-cover mb-6 rounded-lg bg-gray-200">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Banda de Guerra</h2>
                    <p class="text-gray-700 text-center">
                        Aprende a tocar instrumentos tradicionales, sigue ritmos y participa en eventos escolares. Refuerza la disciplina y el trabajo en equipo en un ambiente dinámico.
                    </p>
                </div>
            </div>
        </section>
    </main>

    @include('layout.footer_template')
</body>
</html>
