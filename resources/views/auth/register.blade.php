<x-guest-layout>
    <div class="w-full max-w-md p-8 auth-container rounded-lg">
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-200">Name</label>
                <input id="name"
                       type="text"
                       name="name"
                       value="{{ old('name') }}"
                       required
                       autofocus
                       autocomplete="name"
                       class="form-input mt-1 block w-full rounded-md shadow-sm px-4 py-2">
                @error('name')
                <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
                <input id="email"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       required
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
                       autocomplete="new-password"
                       class="form-input mt-1 block w-full rounded-md shadow-sm px-4 py-2">
                @error('password')
                <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-200">Confirm Password</label>
                <input id="password_confirmation"
                       type="password"
                       name="password_confirmation"
                       required
                       autocomplete="new-password"
                       class="form-input mt-1 block w-full rounded-md shadow-sm px-4 py-2">
            </div>

            <div class="flex items-center justify-between pt-4">
                <a href="{{ route('login') }}" class="text-sm text-gray-300 hover:text-white transition-colors">
                    Already have an account?
                </a>

                <button type="submit" class="auth-button text-white px-6 py-2 rounded-md">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
