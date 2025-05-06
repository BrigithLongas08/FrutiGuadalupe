@extends('welcome')
@section('title', 'Inicio')
@section('content')
   
    <!-- Sección de Bienvenida -->
    <section class="my-8 text-center">
        <div class="relative">
            <img src="{{ asset('img/agua.jpeg') }}" alt="Frutas" class="w-full max-h-96 object-cover">
            <h1 class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold bg-black bg-opacity-50">BIENVENIDO</h1>
        </div>
    </section>

    <!-- Sección de Productos -->
    <section class="px-6 py-10 bg-gray-50">
        <h2 class="text-2xl font-semibold text-center mb-6">Nuestros Productos Vendidos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Producto 1 -->
            <div class="bg-white rounded shadow p-4 text-center">
                <img src="{{ asset('img/agua.jpeg') }}" alt="Aguacate" class="h-40 mx-auto object-cover rounded">
                <h3 class="text-lg font-bold mt-2">Aguacates</h3>
                <p class="text-gray-600">Frescos y deliciosos aguacates.</p>
                <button class="mt-3 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Comprar ahora</button>
            </div>
            <!-- Producto 2 -->
            <div class="bg-white rounded shadow p-4 text-center">
                <img src="{{ asset('img/tietta.jpeg') }}" alt="Limón" class="h-40 mx-auto object-cover rounded">
                <h3 class="text-lg font-bold mt-2">Limones</h3>
                <p class="text-gray-600">Jugosos y maduros limones.</p>
                <button class="mt-3 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Comprar ahora</button>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-green-100 text-center p-6">
        <!-- Contacto -->
        <section id="contacto" class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Contáctanos</h2>
            <p>Email: contact@frutiguadalupe.com</p>
            <div class="flex justify-center space-x-4 mt-3">
                <a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook" class="h-6"></a>
                <a href="#"><img src="{{ asset('img/Instagram.png') }}" alt="Instagram" class="h-6"></a>
                <a href="#"><img src="{{ asset('img/tiktok.png') }}" alt="TikTok" class="h-6"></a>
                <a href="#"><img src="{{ asset('img/whatsapp.png') }}" alt="Whatsapp" class="h-6"></a>
            </div>
        </section>
        <p class="mt-4 text-sm">© 2025 FrutiGuadalupe</p>
    </footer>

    @vite('resources/js/app.js') {{-- JS si usas Vite --}}
</body>
</html>

@endsection