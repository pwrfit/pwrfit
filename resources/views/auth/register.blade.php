<title>PWRFIT | Desafio aceptado</title>
<x-guest-layout>
    @include('auth.styles')
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="/" class="btn btn-icon btn-danger" style="height: 35px;">
            <i class="fa-regular fa-house"></i></a>
        </a>
    </div>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre -->
            <div>
                <x-label for="nombre" :value="__('Nombre completo')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                    required autofocus />
            </div>

            <!-- Documento -->
            <div class="mt-4">
                <x-label for="documento" :value="__('Documento de Identidad')" />

                <x-input id="documento" class="block mt-1 w-full" type="number" name="documento" :value="old('documento')"
                    required />
            </div>

            <div class="mt-4">
                <x-label :value="__('Membresia')" />

                <select
                    class="block mt-1 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="membresia">
                    <option selected disabled>Elige una membresia</option>
                    <option value="1">Casual - $20.900/mes</option>
                    <option value="2">Comprometido - $199.900/año</option>
                    <option value="3">Aficionado - $5.900/semana</option>
                </select>
            </div>

            <!-- Correo -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Contraseña -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Verificar Contraseña -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Verificar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <!-- Boletin -->
            <div class="block mt-4">
                <label for="boletin" class="inline-flex items-center">
                    <input id="boletin" type="checkbox"
                        class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50"
                        name="boletin" value="SI">
                    <span class="ml-2 text-sm text-gray-600">
                        {{ __('Deseo recibir correos promocionales') }}
                    </span>
                </label>
            </div>

            <!-- Boletin -->
            <div class="block mt-4">
                <label for="terminos" class="inline-flex items-center">
                    <input id="terminos" type="checkbox"
                        class="rounded border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50"
                        name="terminos" required>
                    <span class="ml-2 text-sm text-gray-600">
                        {{ __('Acepto los') }}
                        <span class="text-sm text-red-600" style="cursor: pointer" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLg">
                            {{ __('términos y condiciones') }}
                        </span>
                    </span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya tienes una cuenta?') }}
                </a>

                <x-button class="ml-4" style="background-color:#F23849;">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    @include('layouts.modal')
    <script src="{{ asset('index/js/app.js') }}"></script>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</x-guest-layout>
