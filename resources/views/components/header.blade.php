<header class="bg-green-800 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between px-4 py-3 gap-4">
        <!-- Logo -->
        <a href="{{ route('Furtiguadalupe') }}" class="flex items-center gap-3">
            <img src="{{ asset('img/logo.png') }}" alt="FrutiGuadalupe" class="h-20 w-auto">
            <span class="text-2xl font-bold tracking-wide">FrutiGuadalupe</span>
        </a>

        <!-- Botón menú hamburguesa -->
        <button id="menu-btn" class="block lg:hidden focus:outline-none focus:ring-2 focus:ring-white">
            <svg class="w-6 h-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Menú principal (escritorio + móvil) -->
        <div id="mobile-menu" class="w-full lg:w-auto hidden lg:flex flex-col lg:flex-row gap-4 lg:gap-6 items-center mt-4 lg:mt-0">
            <nav class="flex flex-col lg:flex-row gap-3 lg:gap-6 items-center w-full lg:w-auto">
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                @else
                    <a href="{{ route('Furtiguadalupe') }}" class="nav-link">Inicio</a>
                    <a href="{{ route('quienes-somos') }}" class="nav-link">Quiénes Somos</a>
                    <a href="{{ route('Productos') }}" class="nav-link">Productos</a>
                    <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                    @endif
                @endauth
            </nav>

        <!-- Búsqueda -->



        
        <form action="#" method="get" class="hidden lg:flex items-center gap-2">
            <input type="text" name="buscar" placeholder="Buscar..."
                   class="px-3 py-1 rounded-md text-sm text-black focus:outline-none focus:ring focus:ring-green-300">
            <button type="submit"
                    class="bg-white text-green-800 px-4 py-1 rounded hover:bg-green-100 transition duration-300">
                Buscar
            </button>
        </form>
    </div>

    <!-- Búsqueda visible solo en móvil -->
    <form action="#" method="get" class="px-4 mt-3 pb-3 lg:hidden">
        <input type="text" name="buscar" placeholder="Buscar..."
               class="w-full px-3 py-2 rounded-md text-sm text-black focus:outline-none focus:ring focus:ring-green-300">
    </form>

    <a href="{{ url('/login') }}" 
   class="fixed bottom-5 right-5 bg-gray-300 text-white p-3 rounded-full shadow-lg hover:bg-gray-200 transition"
   title="Ir a la tienda">
    <!-- Imagen aún más grande -->
    <img src="{{ asset('img/carro.webp') }}" alt="Carrito" class="w-12 h-12" />
    </a>


</header>

<style>
    .nav-link {
        @apply text-white text-sm px-3 py-2 rounded hover:bg-white hover:text-green-800 transition duration-300;
    }
</style>

<script>
    // Script para alternar menú hamburguesa en móvil
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const links = mobileMenu.querySelectorAll('a');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Cierra el menú al hacer clic en un enlace
        links.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    });
</script>

