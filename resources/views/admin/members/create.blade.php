<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Nuevo Integrante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.members.store') }}">
                        @csrf

                        <!-- Rol -->
                        <div class="mt-4">
                            <x-input-label for="int_rol" :value="__('Rol')" />
                            <select id="int_rol" name="int_rol"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required autofocus>
                                <option value="">Seleccione un rol</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->rol_id }}" {{ old('int_rol') == $role->rol_id ? 'selected' : '' }}>{{ $role->rol_nombre }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('int_rol')" class="mt-2" />
                        </div>

                        <!-- RUT -->
                        <div class="mt-4">
                            <x-input-label for="int_rut" :value="__('RUT (Sin puntos y con guión)')" />
                            <x-text-input id="int_rut" class="block mt-1 w-full" type="text" name="int_rut"
                                :value="old('int_rut')" required />
                            <x-input-error :messages="$errors->get('int_rut')" class="mt-2" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Nombre -->
                            <div>
                                <x-input-label for="int_nombre" :value="__('Nombre(s)')" />
                                <x-text-input id="int_nombre" class="block mt-1 w-full" type="text" name="int_nombre"
                                    :value="old('int_nombre')" required />
                                <x-input-error :messages="$errors->get('int_nombre')" class="mt-2" />
                            </div>

                            <!-- Apellido Paterno -->
                            <div>
                                <x-input-label for="int_apellido_paterno" :value="__('Apellido Paterno')" />
                                <x-text-input id="int_apellido_paterno" class="block mt-1 w-full" type="text"
                                    name="int_apellido_paterno" :value="old('int_apellido_paterno')" required />
                                <x-input-error :messages="$errors->get('int_apellido_paterno')" class="mt-2" />
                            </div>

                            <!-- Apellido Materno -->
                            <div>
                                <x-input-label for="int_apellido_materno" :value="__('Apellido Materno (Opcional)')" />
                                <x-text-input id="int_apellido_materno" class="block mt-1 w-full" type="text"
                                    name="int_apellido_materno" :value="old('int_apellido_materno')" />
                                <x-input-error :messages="$errors->get('int_apellido_materno')" class="mt-2" />
                            </div>

                            <!-- Fecha de Nacimiento -->
                            <div>
                                <x-input-label for="int_fecha_nacimiento" :value="__('Fecha de Nacimiento')" />
                                <x-text-input id="int_fecha_nacimiento" class="block mt-1 w-full" type="date"
                                    name="int_fecha_nacimiento" :value="old('int_fecha_nacimiento')" />
                                <x-input-error :messages="$errors->get('int_fecha_nacimiento')" class="mt-2" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- Teléfono -->
                            <div>
                                <x-input-label for="int_telefono" :value="__('Teléfono')" />
                                <x-text-input id="int_telefono" class="block mt-1 w-full" type="text"
                                    name="int_telefono" :value="old('int_telefono')" />
                                <x-input-error :messages="$errors->get('int_telefono')" class="mt-2" />
                            </div>

                            <!-- Instagram -->
                            <div>
                                <x-input-label for="int_instagram" :value="__('Instagram')" />
                                <x-text-input id="int_instagram" class="block mt-1 w-full" type="text"
                                    name="int_instagram" :value="old('int_instagram')" />
                                <x-input-error :messages="$errors->get('int_instagram')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Sección Deportiva -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                            <!-- N° Camiseta -->
                            <div>
                                <x-input-label for="numero_camiseta" :value="__('N° Camiseta')" />
                                <x-text-input id="numero_camiseta" class="block mt-1 w-full" type="text"
                                    name="numero_camiseta" :value="old('numero_camiseta')" />
                                <x-input-error :messages="$errors->get('numero_camiseta')" class="mt-2" />
                            </div>

                            <!-- Posición -->
                            <div>
                                <x-input-label for="int_posicion" :value="__('Posición')" />
                                <select id="int_posicion" name="int_posicion"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Ninguna / No aplica</option>
                                    <option value="Arquero" {{ old('int_posicion') == 'Arquero' ? 'selected' : '' }}>
                                        Arquero</option>
                                    <option value="Defensa" {{ old('int_posicion') == 'Defensa' ? 'selected' : '' }}>
                                        Defensa</option>
                                    <option value="Mediocampista" {{ old('int_posicion') == 'Mediocampista' ? 'selected' : '' }}>Mediocampista</option>
                                    <option value="Delantero" {{ old('int_posicion') == 'Delantero' ? 'selected' : '' }}>
                                        Delantero</option>
                                </select>
                                <x-input-error :messages="$errors->get('int_posicion')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button class="ml-4">
                                {{ __('Registrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>