
<style>
    header {
        background-color: #166534; /* Verde oscuro */
        padding: 1rem 2rem;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        font-family: Arial, sans-serif;
    }

    header nav a {
        color: white;
        background-color: transparent;
        padding: 0.5rem 1rem;
        border: 1px solid transparent;
        border-radius: 4px;
        text-decoration: none;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    header nav a:hover {
        background-color: white;
        color: #166534;
        border-color: #14532d;
        
    }


</style>
<header>
    @if (Route::has('login'))
        <nav>
            @auth
                <a href="{{ url('/dashboard') }}" class="hola">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('quienes-somos') }}">Quienes Somos</a>
                <a href="{{ route('Furtiguadalupe') }}">Inicio</a>
                <a href="{{ route('Productos') }}">Productos</a>
                <a href="#">Blog</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </nav>
    @endif
</header>
