
<header class="bg-green-800 p-4 flex justify-between items-center flex-wrap gap-4 font-sans encabezado">
    <!-- Logo y nombre -->
    <div class="flex items-center gap-3 logo">
        <img src="{{ asset('img/logo.png') }}" alt="FrutiGuadalupe" class="h-500 w-auto">
        <span class="text-white text-xl font-bold">FRUTI-GUADALUPE</span>
    </div>

    <!-- Formulario de búsqueda -->
    <form action="#" method="get" class="barra-busqueda flex items-center gap-2">
        <input type="text" id="buscar" name="buscar" placeholder="Buscar..."
               class="px-3 py-1 rounded text-sm focus:outline-none focus:ring focus:ring-green-400">
        <button type="submit"
                class="bg-white text-green-800 px-4 py-1 rounded hover:bg-green-100 transition duration-300">
            Buscar
        </button>
    </form>

    @if (Route::has('login'))
        <nav class="flex flex-wrap space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-white bg-transparent px-4 py-2 rounded border border-transparent text-sm hover:bg-white hover:text-green-800 hover:border-green-900 transition duration-300">
                    Dashboard
                </a>
            @else
                <a href="{{ route('Furtiguadalupe') }}"
                   class="text-white px-4 py-2 rounded text-sm hover:bg-white hover:text-green-800 transition duration-300">
                    Inicio
                </a>
                <a href="{{ route('quienes-somos') }}"
                   class="text-white px-4 py-2 rounded text-sm hover:bg-white hover:text-green-800 transition duration-300">
                    Quiénes Somos
                </a>
                <a href="{{ route('Productos') }}"
                   class="text-white px-4 py-2 rounded text-sm hover:bg-white hover:text-green-800 transition duration-300">
                    Productos
                </a>
                <a href="{{ route('login') }}"
                   class="text-white px-4 py-2 rounded text-sm hover:bg-white hover:text-green-800 transition duration-300">
                    Iniciar sesión
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="text-white px-4 py-2 rounded text-sm hover:bg-white hover:text-green-800 transition duration-300">
                        Registrarse
                    </a>
<header class="bg-green-800 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between px-4 py-3 gap-4">
        <!-- Logo -->
        <a href="{{ route('Furtiguadalupe') }}" class="flex items-center gap-3">
            <img src="{{ asset('img/logo.png') }}" alt="FrutiGuadalupe" class="h-12 w-auto">
            <span class="text-2xl font-bold tracking-wide">FrutiGuadalupe</span>
        </a>

        <!-- Menú móvil (hamburguesa) -->
        <div class="block lg:hidden">
            <button id="menu-btn" class="focus:outline-none focus:ring-2 focus:ring-white">
                <svg class="w-6 h-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Navegación -->
        <nav id="nav-menu" class="w-full lg:w-auto hidden lg:flex flex-col lg:flex-row gap-3 lg:gap-6 items-center">
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
</header>

<style>
    .nav-link {
        @apply text-white text-sm px-3 py-2 rounded hover:bg-white hover:text-green-800 transition duration-300;
    }
</style>

<script>
    // Alternar menú móvil
    document.addEventListener('DOMContentLoaded', () => {
        const menuBtn = document.getElementById('menu-btn');
        const navMenu = document.getElementById('nav-menu');

        menuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });
    });
</script>

