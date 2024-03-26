<x-app-layout>
    <div class="p-12 mt-6 bg-white rounded-lg shadow-xs">

        <form method="POST" action="{{ route('products.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Produk</h2>

                    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Produk</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="name" id="name" value="{{ $product->name }}" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Pilih Kategori</label>
                            <div class="mt-2">
                                <select id="category" name="category" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="Makanan" {{ $product->category === 'Makanan' ? 'selected' : '' }}>Makanan</option>
                                    <option value="Minuman" {{ $product->category === 'Minuman' ? 'selected' : '' }}>Minuman</option>
                                    <option value="Perabotan" {{ $product->category === 'Perabotan' ? 'selected' : '' }}>Perabotan</option>
                                    <option value="Sembako" {{ $product->category === 'Sembako' ? 'selected' : '' }}>Sembako</option>
                                    <option value="Obat-Obatan" {{ $product->category === 'Obat-Obatan' ? 'selected' : '' }}>Obat-Obatan</option>
                                    <option value="Lainnya" {{ $product->category === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="stock" class="block text-sm font-medium leading-6 text-gray-900">Stok</label>
                            <div class="mt-2">
                                <input type="number" min="1" step="any" name="stock" id="stock" value="{{ $product->stock }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Harga Jual</label>
                            <div class="mt-2">
                                <input type="number" min="1" step="any" name="price" id="price" value="{{ $product->price }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="purchase" class="block text-sm font-medium leading-6 text-gray-900">Harga Beli</label>
                            <div class="mt-2">
                                <input type="number" name="purchase" id="purchase" value="{{ $product->purchase }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 flex items-center justify-end gap-x-6">
                        <a href="{{ route('products.index') }}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-12 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                   
                </div>
        </form>
    </div>
</x-app-layout>