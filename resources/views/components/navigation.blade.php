<nav class="bg-white shadow-sm" x-data="{ open: false }">
    <div class="max-w-full px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Sidebar Toggle -->
                <div class="flex items-center">
                    <button @click="$parent.open = !$parent.open" class="p-2 text-gray-500 rounded-md lg:hidden hover:text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Search -->
                <div class="flex items-center flex-1 px-4 lg:px-6">
                    <div class="flex-1">
                        <div class="relative max-w-xl">
                            <input type="search"
                                   class="block w-full rounded-md border-0 py-1.5 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="Qidirish...">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Navigation -->
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
