<x-guest-layout>
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl text-center font-bold mb-6">Inscription Utilisateur</h1>
        <form method="POST" class="space-y-6" enctype="multipart/form-data" action="{{ route('register') }}">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-6">
                    <!-- Name -->
                    <div class="form-group">
                        <x-input-label for="nom" :value="__('nom')" />
                        <x-text-input id="nom" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <x-input-label for="prenom" :value="__('prenom')" />
                        <x-text-input id="prenom" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- telephone -->
                    <div class="form-group">
                        <x-input-label for="telephone" :value="__('telephone')" />
                        <x-text-input id="telephone" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
                        <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="space-y-6">
                    <!-- Confirm Password -->
                    <div class="form-group">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="form-group">
                            <x-input-label for="adresse" :value="__('Adresse')" />
                            <x-text-input type="text" id="adresse" name="adresse" required autocomplete="adresse" />
                            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                    </div>
                    <div class="form-group">
                            <x-input-label for="ville" :value="__('Ville')" />
                            <x-text-input type="text" id="ville" name="ville" required autocomplete="ville"/>
                            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <x-input-label for="profession" :value="__('Profession')" />
                        <x-text-input type="text" id="profession" name="profession" required autocomplete="profession"/>
                        <x-input-error :messages="$errors->get('profession')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <x-input-label for="identite" :value="__('Identite')" />
                        <x-text-input type="file" id="identite" name="identite" accept="image/*" autocomplete="identite"/>
                        <x-input-error :messages="$errors->get('identite')" class="mt-2" />
                    </div>
                </div>     
            </div>

            <div class=" items-center justify-end mt-4">
                 <x-primary-button class="mb-4">
                    {{ __('Register') }}
                </x-primary-button>
                <a class="p-8 text-indigo-600 hover:text-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>
        </form>
    </div> 
</x-guest-layout>
