<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil del Jugador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-[#111] overflow-hidden shadow-[0_0_15px_rgba(207,20,43,0.1)] sm:rounded-lg border border-brand-red/20">
                <div class="p-6 text-gray-300">
                    <h3 class="text-xl font-title font-bold mb-4 uppercase text-white tracking-widest text-brand-red">
                        Bienvenido Jugador</h3>
                    <p>Has ingresado con el RUT: <span class="font-bold text-white">{{ Auth::user()->int_rut }}</span>
                    </p>
                    <p class="mt-4">Aquí podrás ver tus estadísticas, partidos próximos y citaciones.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>