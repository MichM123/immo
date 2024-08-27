<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="logo">
            <img src="{{asset('client/account-image.png')}}" alt="">
        </div>
        <h2>Connexion</h2>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-item">
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Username or Email" />
                    <x-input-error :messages="$errors->get('email')" />
                </div>
                
                <!-- Password -->
                <div class="form-item">
                    <x-text-input id="password" type="password" name="password" required placeholder="Password" autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')"/>
                </div>

                <!-- Remember Me -->
                <div class="remember-box">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="form-btns">
                    <x-primary-button>
                            {{ __('Log in') }}
                    </x-primary-button>
                    @if (Route::has('password.request'))
                        <div class="options">
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            <a  href="{{ route('register') }}">
                                {{ __('inscription') }}
                            </a>
                        </div>
                    @endif
                    
                </div>
            </form>
        </div>
    </div>
    </x-guest-layout>
