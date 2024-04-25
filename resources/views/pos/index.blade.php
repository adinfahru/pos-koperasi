<x-app-layout>
    <div class="py-2 h-screen">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-3/4">
                    <form class="mb-3 md:sticky md:top-0">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block border-gray-100 w-full shadow p-3 ps-10 text-xs bg-white rounded-lg" placeholder="Cari Produk" />
                            <button type="submit" class="text-white absolute end-3 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-4 py-1.5">Search</button>
                        </div>
                    </form>
                    @include('pos\kategori')
                    <div class="w-full overflow-x-auto shadow-xs border text-xs">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr class="font-semibold tracking-wide text-left text-gray-500 bg-gray-200 uppercase border">
                                    <th class="px-4 py-3">Nama Produk</th>
                                    <th class="px-4 py-3">Stok</th>
                                    <th class="px-4 py-3">Harga Jual</th>
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
                                    <td class="px-4 py-3">
                                        <a href="{{ route('pos.addToCart', ['productId' => $product->id]) }}" class="btn btn-primary">+</a>
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
                <div class="md:w-1/4 md:ml-auto">
                    <!-- Summary -->
                    <div class="bg-white rounded-lg shadow-md p-6 md:sticky md:top-0">
                        <h2 class="text-md font-semibold mb-4">Cart</h2>
                        @if(session('cart'))
                        @foreach(session('cart') as $cartItem)
                        <div>
                            <p>{{ $cartItem->name }}</p>
                            <p>{{ $cartItem->price }}</p>
                        </div>
                        @endforeach
                        @else
                        <p>No items in cart</p>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>