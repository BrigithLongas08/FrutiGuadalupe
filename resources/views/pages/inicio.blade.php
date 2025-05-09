@extends('welcome')

@section('title', 'Inicio')

@section('content')
    <!-- Sección de Bienvenida -->
    <section class="my">
        <div class="relative w-full">
            <img src="{{ asset('img/agua.jpeg') }}" alt="Frutas" class="w-full max-h-[500px] object-cover">
            <h1 class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold bg-black bg-opacity-50">
                BIENVENIDOS
            </h1>
        </div>
    </section>

    <!-- Sección de Productos -->
    <section class="px-6 py-10 bg-gray-50 w-full">
        <h2 class="text-2xl font-semibold text-center mb-6">Nuestros Productos Vendidos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-7xl mx-auto">
            @foreach (range(1, 3) as $producto)
                <div class="bg-white rounded shadow p-4 text-center">
                    <img src="{{ asset('img/agua.jpeg') }}" alt="Producto" class="h-40 mx-auto object-cover rounded">
                    <h3 class="text-lg font-bold mt-2">Producto {{ $producto }}</h3>
                    <p class="text-gray-600">Descripción breve del producto.</p>
                    <button class="mt-3 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Comprar ahora</button>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Pie de página -->
    <!-- Pie de Página -->
    <footer class="bg-green-800 text-white py-10">
        <section id="contacto" class="contacto text-center mb-6">
            <h2 class="text-2xl font-bold">Contáctanos</h2>
            <p class="mb-4">Email: contact@frutiguadalupe.com</p>
            <div class="iconos-sociales flex justify-center items-center gap-6">
                <a href="#"><img src="IMG/facebook.png" alt="Facebook" class="w-10 transition-transform hover:scale-110"></a>
                <a href="#"><img src="IMG/Instagram.png" alt="Instagram" class="w-10 transition-transform hover:scale-110"></a>
                <a href="#"><img src="IMG/tiktok.png" alt="TikTok" class="w-10 transition-transform hover:scale-110"></a>
                <a href="#"><img src="IMG/whatsapp.png" alt="WhatsApp" class="w-10 transition-transform hover:scale-110"></a>
            </div>
        </section>
        <p class="text-center text-sm">© 2025 FrutiGuadalupe</p>
    </footer>

@endsection
