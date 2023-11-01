<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{asset('assets/logo.png')}}" class="h-24"  alt="">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif
        <div>
            <h1 class="text-4xl text-center font-bold">
                Connexion
            </h1>
            <h5 class="text-md text-center">
                Connectez-vous pour gérer vos demandes
            </h5>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Mot de passe') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se souvenir de moi') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
            </div>

            <div class="flex items-center justify-center mt-4">
               

                <x-button class="ml-4 bg-rose-500 hover:bg-rose-600">
                    {{ __('Se connecter') }}
                </x-button>
            </div>
            <div class="text-center mt-4 text-md">
                Vous n'avez pas de compte ? <a href="{{route('inscription')}}" class="underline text-sm text-pink-500">Cliquez ici pour vous inscrire.</a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
