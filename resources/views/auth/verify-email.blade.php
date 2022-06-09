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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Gracias por registrarte! Antes de empezar, por favor verifica tu correo') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Se ha enviado un nuevo correo de verificación.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button style="background-color: #F23849">
                        {{ __('Reenviar email de verificación') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Cerrar sesión') }}
                </button>
            </form>
        </div>
    </x-auth-card>
    <script src="{{ asset('index/js/app.js') }}"></script>
</x-guest-layout>
