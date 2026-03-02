<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Integrantes') }}
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
                <div
                    class="p-6 text-gray-200 flex flex-col md:flex-row justify-between items-center gap-4 border-b border-brand-red/30">
                    <h3 class="text-xl font-title font-bold uppercase tracking-wider text-white">Todos los Integrantes
                    </h3>
                    <a href="{{ route('admin.members.create') }}"
                        class="inline-flex items-center px-6 py-3 bg-brand-red border border-transparent font-bold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-600 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-brand-red transition ease-in-out duration-150 skew-x-[-10deg] shadow-[0_0_15px_rgba(207,20,43,0.3)]">
                        <span class="inline-block skew-x-[10deg]">Registrar Nuevo Integrante</span>
                    </a>
                </div>

                <div class="bg-[#0a0a0a] overflow-x-auto">
                    <table class="min-w-full divide-y divide-brand-darkred/30">
                        <thead class="bg-[#1a1a1a]">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-4 text-left text-xs font-bold text-gray-300 uppercase tracking-wider">
                                    Nombre</th>
                                <th scope="col"
                                    class="px-6 py-4 text-left text-xs font-bold text-gray-300 uppercase tracking-wider">
                                    RUT</th>
                                <th scope="col"
                                    class="px-6 py-4 text-left text-xs font-bold text-gray-300 uppercase tracking-wider">
                                    Rol</th>
                                <th scope="col"
                                    class="px-6 py-4 text-left text-xs font-bold text-gray-300 uppercase tracking-wider">
                                    Posición / Camiseta</th>
                                <th scope="col"
                                    class="px-6 py-4 text-left text-xs font-bold text-gray-300 uppercase tracking-wider">
                                    Teléfono</th>
                                <th scope="col"
                                    class="px-6 py-4 text-left text-xs font-bold text-gray-300 uppercase tracking-wider">
                                    Estado</th>
                            </tr>
                        </thead>
                        <tbody class="bg-[#111] divide-y divide-brand-darkred/20">
                            @forelse($members as $member)
                                <tr class="hover:bg-[#1a1a1a] transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                        {{ $member->int_nombre_completo ?? $member->int_nombre . ' ' . $member->int_apellido_paterno }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        {{ $member->int_rut }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        <span
                                            class="px-3 py-1 inline-flex text-xs leading-5 font-bold uppercase tracking-wide rounded-sm bg-brand-red/20 text-brand-red border border-brand-red/50 skew-x-[-10deg]">
                                            <span
                                                class="skew-x-[10deg]">{{ optional($member->role)->rol_nombre ?? 'N/A' }}</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        @if($member->int_posicion || $member->numero_camiseta)
                                            {{ $member->int_posicion ?: 'N/A' }} / N° {{ $member->numero_camiseta ?: 'N/A' }}
                                        @else
                                            <span class="text-gray-600">N/A</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        {{ $member->int_telefono ?: '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        @if($member->int_estado)
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-900/40 text-green-400 border border-green-500/30">Activo</span>
                                        @else
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-red-900/40 text-red-400 border border-red-500/30">Inactivo</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"
                                        class="px-6 py-8 whitespace-nowrap text-sm text-gray-500 text-center italic">
                                        No hay integrantes registrados en el sistema.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>