<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->role->rol_nombre ?? __('Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session('success'))
                <div class="bg-brand-red/20 border border-brand-red text-red-200 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div
                class="bg-[#111] overflow-hidden shadow-[0_0_15px_rgba(207,20,43,0.1)] sm:rounded-lg border border-brand-red/20">
                <div class="p-6 text-gray-200 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div>
                        <h4 class="text-xl font-title font-bold uppercase tracking-wider text-white">Integrantes</h4>
                        <p class="text-sm text-gray-400 mt-1">Registra nuevos administradores, cuerpo técnico o
                            jugadores.</p>
                    </div>
                    <a href="{{ route('admin.members.index') }}"
                        class="inline-flex items-center px-6 py-3 bg-brand-red border border-transparent font-bold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-brand-red focus:ring-offset-2 transition ease-in-out duration-150 skew-x-[-10deg] shadow-[0_0_15px_rgba(207,20,43,0.3)]">
                        <span class="inline-block skew-x-[10deg]">Ver Integrantes</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>