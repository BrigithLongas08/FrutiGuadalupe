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
                @endif
            @endauth
        </nav>
    @endif
</header>