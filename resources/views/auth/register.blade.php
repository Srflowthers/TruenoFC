<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- RUT -->
        <div>
            <x-input-label for="int_rut" :value="__('RUT')" />
            <x-text-input id="int_rut" class="block mt-1 w-full" type="text" name="int_rut" :value="old('int_rut')"
                required autofocus autocomplete="int_rut" />
            <x-input-error :messages="$errors->get('int_rut')" class="mt-2" />
        </div>

        <!-- Nombre -->
        <div class="mt-4">
            <x-input-label for="int_nombre" :value="__('Nombre(s)')" />
            <x-text-input id="int_nombre" class="block mt-1 w-full" type="text" name="int_nombre"
                :value="old('int_nombre')" required autocomplete="int_nombre" />
            <x-input-error :messages="$errors->get('int_nombre')" class="mt-2" />
        </div>

        <!-- Apellido Paterno -->
        <div class="mt-4">
            <x-input-label for="int_apellido_paterno" :value="__('Apellido Paterno')" />
            <x-text-input id="int_apellido_paterno" class="block mt-1 w-full" type="text" name="int_apellido_paterno"
                :value="old('int_apellido_paterno')" required autocomplete="int_apellido_paterno" />
            <x-input-error :messages="$errors->get('int_apellido_paterno')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>