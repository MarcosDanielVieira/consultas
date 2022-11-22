<x-guest-layout>
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

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" placeholder="Nome" type="text" name="name"
                    :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('E-mail')" />

                <x-input id="email" class="block mt-1 w-full" placeholder="E-mail" type="email" name="email"
                    :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full" placeholder="Senha" type="password" name="password"
                    required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmação de senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirmação de senha"
                    type="password" name="password_confirmation" required />
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
                            Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
