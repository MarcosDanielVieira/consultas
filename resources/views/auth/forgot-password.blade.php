<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha um novo.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-2" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-2" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('E-mail')" />

                <x-input id="email" class="block mt-1 w-full" placeholder="E-mail" type="email" name="email"
                    :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-center">
                <div class="row mt-4">
                    <div class="col-md-6">
                        @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="btn btn-block btn-outline-secondary mt-2">
                                Voltar
                            </a>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-block btn-outline-success mt-2" type="submit">
                            Redefinir
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
