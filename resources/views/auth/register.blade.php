<x-guest-layout>
    <!-- Logo de FrutiGuadalupe -->
    <div class="flex justify-center mb-6">
        <img src="{{ asset('img/logo.png') }}" alt="FrutiGuadalupe" class="h-60 w-auto">
    </div>

    <!-- Título personalizado -->
    <h1 class="text-2xl font-bold mb-6 text-center text-green-700">Regístrate en FrutiGuadalupe 🥑🍋</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div>
            <x-input-label for="name" :value="'Nombre'" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Correo electrónico -->
        <div class="mt-4">
            <x-input-label for="email" :value="'Correo electrónico'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Contraseña'" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="'Confirmar Contraseña'" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('login') }}">
                ¿Ya estás registrado?
            </a>

            <x-primary-button class="ms-4 bg-green-600 hover:bg-green-700">
                Registrar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
