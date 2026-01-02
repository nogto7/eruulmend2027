<x-guest-layout>
    <div class="log_form">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form_item">
                <label class="form_label" for="email">Нэвтрэх нэр</label>
                <input id="email" class="form_input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form_item">
                <label for="password" class="form_label">Нууц үг</label>
                <input id="password" class="form_input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="em_button btn_primary">Нэвтрэх</button>
            </div>
        </form>
    </div>
</x-guest-layout>
