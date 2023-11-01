<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{asset('assets/logo_elite_car.png')}}" class="h-24"  alt="">
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('inscription-post') }}">
            @csrf

            <div>
                <x-label for="prenom" value="{{ __('Prenom') }}" />
                <x-input id="prenom" class="block mt-1 w-full" type="text" placeholder="Prénom" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
            </div>
            <div>
                <x-label for="nom" value="{{ __('Nom') }}" />
                <x-input id="nom" class="block mt-1 w-full" type="text"  placeholder="Nom" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            </div>
            

            <div class="mt-4">
                <x-label for="email" value="{{ __('Adresse email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email"  placeholder="email@exemple.com" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Numéro de Téléphone (+221)') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone"  placeholder="Ex: 77 123 45 67"  :value="old('phone')" required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Mot de passe') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" placeholder="Mot de passe" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmation mot de passe') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirmation mot de passe" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Déja inscrit. Se connecter?') }}
                </a>

                <x-button class="ml-4">
                    {{ __("S'inscrire") }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
