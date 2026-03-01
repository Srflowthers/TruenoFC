<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil del Jugador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Bienvenido Jugador</h3>
                    <p>Has ingresado con el RUT: {{ Auth::user()->int_rut }}</p>
                    <p class="mt-4">Aquí podrás ver tus estadísticas, partidos próximos y citaciones.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>