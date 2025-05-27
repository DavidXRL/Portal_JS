<!DOCTYPE html>
<html>
<body class="bg-gray-200">
    <title>Admin | Telesecundaria Justo Sierra</title>
<body>
    @include('layout.main_template')

    <main class="max-w-5xl mx-auto mt-10 p-8 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Control de imágenes para el sitio web</h1>
        <p class="text-gray-700 text-center">Aquí puedes gestionar las imágenes del sitio web de la Telesecundaria Justo Sierra.</p>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nombre de la imagen</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $image)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $image->name }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('images.destroy', $image->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
     @include('layout.footer_template')
</body>
</html>
