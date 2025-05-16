<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Admin Dashboard</h2>
    </x-slot>

    <div class="py-12">
        @can('ver dashboard')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    Bienvenido, tienes permiso para ver esto.
                </div>
            </div>
        @else
            <div class="text-red-500">No tienes permiso para ver esta sección.</div>
        @endcan
    </div>
</x-app-layout>