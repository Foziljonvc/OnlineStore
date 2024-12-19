<x-app-layout>
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Mahsulotlar</h2>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @for ($i = 1; $i <= 8; $i++)
                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="https://via.placeholder.com/300x200" alt="Product" class="object-cover w-full h-full">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Mahsulot {{ $i }}</h3>
                        <p class="mt-2 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">${{ number_format(99.99, 2) }}</span>
                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Sotib olish
                            </button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</x-app-layout>
