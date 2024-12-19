<x-guest-layout>
    <div class="w-full max-w-md p-8 auth-container rounded-lg">
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                <input id="email"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       required
                       autofocus
                       autocomplete="username"
                       class="form-input mt-1 block w-full rounded-md shadow-sm px-4 py-2">
                @error('email')
                <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-200">Password</label>
                <input id="password"
                       type="password"
                       name="password"
                       required
                       autocomplete="current-password"
                       class="form-input mt-1 block w-full rounded-md shadow-sm px-4 py-2">
                @error('password')
                <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me"
                           type="checkbox"
                           name="remember"
                           class="form-input rounded">
                    <span class="ml-2 text-sm text-gray-200">Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-300 hover:text-white transition-colors">
                        Forgot password?
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('register') }}" class="text-sm text-gray-300 hover:text-white transition-colors">
                    Need an account?
                </a>

                <button type="submit" class="auth-button text-white px-6 py-2 rounded-md">
                    Login
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
