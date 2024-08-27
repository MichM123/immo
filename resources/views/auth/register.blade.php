<x-guest-layout>
    <div class="container-fluid">
        <h2>Inscription Utilisateur</h2>
        <div class="login-form">
            <form method="POST" class="space-y-6" enctype="multipart/form-data" action="{{ route('register') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <!-- Name -->
                        <div class="form-item">
                            <x-text-input id="nom" type="text" name="nom" required placeholder="Nom"/>
                            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                        </div>
                        <div class="form-item">
                            <x-text-input id="prenom" type="text" name="prenom" required placeholder="prenom"/>
                            <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div class="form-item">
                            <x-text-input id="email" type="email" name="email" required placeholder="email"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- telephone -->
                        <div class="form-item">
                            <x-text-input id="telephone" type="text" name="telephone" required placeholder="telephone"/>
                            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="form-item">
                            <x-text-input id="password" type="password" name="password" required placeholder="Password"/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="space-y-6">
                        <!-- Confirm Password -->
                        <div class="form-item">
                            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Password"/>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="form-item">
                                <x-text-input type="text" id="adresse" name="adresse" required placeholder="adresse"/>
                                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                        </div>
                        <div class="form-item">
                                <x-text-input type="text" id="ville" name="ville" required placeholder="ville"/>
                                <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                        </div>
                        <div class="form-item">
                            <x-text-input type="text" id="profession" name="profession" required placeholder="Professsion"/>
                            <x-input-error :messages="$errors->get('profession')" class="mt-2" />
                        </div>
                        <div class="form-item">
                            <x-text-input type="file" id="identite" name="identite" accept="image/*" placeholder="identite"/>
                            <x-input-error :messages="$errors->get('identite')" class="mt-2" />
                        </div>
                    </div>     
                </div>

                <div class="form-btns">
                    <x-primary-button>
                        {{ __('Register') }}
                    </x-primary-button>
                    <div class="options">
                        <a href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                    

                </div>
            </form>
        </div>
    </div> 
</x-guest-layout>
