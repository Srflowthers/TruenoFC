<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="int_rut" :value="__('RUT')" />
            <x-text-input id="int_rut" name="int_rut" type="text" class="mt-1 block w-full" :value="old('int_rut', $user->int_rut)" required autofocus autocomplete="int_rut" />
            <x-input-error class="mt-2" :messages="$errors->get('int_rut')" />
        </div>

        <div>
            <x-input-label for="int_nombre" :value="__('Nombre(s)')" />
            <x-text-input id="int_nombre" name="int_nombre" type="text" class="mt-1 block w-full"
                :value="old('int_nombre', $user->int_nombre)" required autocomplete="int_nombre" />
            <x-input-error class="mt-2" :messages="$errors->get('int_nombre')" />
        </div>

        <div>
            <x-input-label for="int_apellido_paterno" :value="__('Apellido Paterno')" />
            <x-text-input id="int_apellido_paterno" name="int_apellido_paterno" type="text" class="mt-1 block w-full"
                :value="old('int_apellido_paterno', $user->int_apellido_paterno)" required
                autocomplete="int_apellido_paterno" />
            <x-input-error class="mt-2" :messages="$errors->get('int_apellido_paterno')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>