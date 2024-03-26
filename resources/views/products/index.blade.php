<x-app-layout>
@if(session('success'))
    <div id="alert" class="text-sm mt-4 bg-green-300 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <button onclick="closeAlert()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1 1 0 0 1-1.497 1.323l-3.045-3.334-3.045 3.334a1 1 0 1 1-1.497-1.323l3.545-3.875a1 1 0 0 1 1.497 0l3.545 3.875z"/>
            </svg>
        </button>
    </div>
@endif
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <div class="flex items-center justify-end mb-6">
            <a href="{{ route('products.create') }}" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Product</a>
        </div>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs border">
            <div class="w-full overflow-x-auto shadow-xs">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border">
                            <th class="px-4 py-3">Nama Produk</th>
                            <th class="px-4 py-3">Stok</th>
                            <th class="px-4 py-3">Harga Jual</th>
                            <th class="px-4 py-3">Harga Beli</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50">
                        @forelse ($products as $product)
                        <tr class="text-gray-700 dark:text-gray-600">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-24 h-24 mr-3 rounded md:block">
                                        <img src="{{ asset('fotoProduk/'.$product->image)}}" class="object-cover w-full h-full rounded" />
                                        <div class="absolute inset-0 rounded shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $product->name }}</p>
                                        <p class="text-xs text-black-800 dark:text-gray-400">
                                            Kategori : {{ $product->category }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $product->stock }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Rp. {{ $product->price }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Rp. {{ $product->purchase }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('products.edit', $product->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>
                                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-sm px-4 py-6 bg-white dark:text-gray-400">Belum ada produk!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    function closeAlert() {
        var alert = document.getElementById('alert');
        alert.style.display = 'none';
    }
</script>
</x-app-layout>