<x-app-layout>
    <div class="w-full p-12 mt-6 bg-white rounded-lg shadow-xs">
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full border-gray-900/10 pb-12 flex flex-col gap-4">
                
                <div class="flex gap-2 items-center">
                    <div>
                        <img aria-hidden="true" class="w-[32px] h-[32px]" src="{{ asset('images/package.png') }}" alt="" />
                    </div>
                    <h1 class="text-[24px] font-semibold leading-7 text-black">Edit Produk</h1>
                </div>

                <div class="w-full flex flex-col gap-5">
                    <div class="w-full">
                        <label for="code" class="block text-[16px] font-bold leading-6 text-gray-900">Kode Produk</label>
                        <div class="mt-2">
                            <div class="bg-gray-100 w-full flex rounded-md border border-gray-300">
                                <input type="text" name="code" id="code" value="{{ $product->code }}" autocomplete="off" class="uppercase block w-full flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <label for="name" class="block text-[16px] font-bold leading-6 text-gray-900">Nama Produk</label>
                        <div class="mt-2">
                            <div class="bg-gray-100 w-full flex rounded-md border border-gray-300">
                                <input type="text" name="name" id="name" value="{{ $product->name }}" autocomplete="off" class="block w-full flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    
                    <div class="w-full">
                        <label for="category" class="block text-[16px] font-bold leading-6 text-gray-900">Pilih Kategori</label>
                        <div class="mt-2">
                            <select id="category" name="category" class="w-full rounded-md border-0 bg-gray-100 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="Makanan" {{ $product->category === 'Makanan' ? 'selected' : '' }}>Makanan</option>
                                <option value="Minuman" {{ $product->category === 'Minuman' ? 'selected' : '' }}>Minuman</option>
                                <option value="Perabotan" {{ $product->category === 'Perabotan' ? 'selected' : '' }}>Perabotan</option>
                                <option value="Sembako" {{ $product->category === 'Sembako' ? 'selected' : '' }}>Sembako</option>
                                <option value="Obat-Obatan" {{ $product->category === 'Obat-Obatan' ? 'selected' : '' }}>Obat-Obatan</option>
                                <option value="Lainnya" {{ $product->category === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full">
                        <label for="purchasing_date" class="block text-[16px] font-bold leading-6 text-gray-900">Tanggal Pembelian</label>
                        <div class="mt-2">
                            <input type="date" name="purchasing_date" id="purchasing_date" value="{{ $product->purchasing_date }}" class="block w-full bg-gray-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="flex gap-2 justify-between">
                        <div class="w-1/2">
                            <label for="price" class="block text-[16px] font-bold leading-6 text-gray-900">Harga Jual</label>
                            <div class="mt-2">
                                <input type="number" min="1" step="any" name="price" id="price" value="{{ $product->price }}" class="block w-full bg-gray-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="w-1/2">
                            <label for="purchase" class="block text-[16px] font-bold leading-6 text-gray-900">Harga Beli</label>
                            <div class="mt-2">
                                <input type="number" name="purchase" id="purchase" value="{{ $product->purchase }}" class="block w-full bg-gray-100 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="w-full self-center">
                            <label for="stock" class="block text-[16px] font-bold leading-6 text-gray-900">Stok</label>
                            <div class="mt-2">
                                <input type="number" min="0" step="any" name="stock" id="stock" value="{{ $product->stock }}" class="block w-full rounded-md bg-gray-100 border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="w-full self-center">
                            <label for="image" class="block text-[16px] font-bold leading-6 text-gray-900">Upload Foto Barang</label>
                            <div class="mt-2">
                                <input name="image" id="image" type="file" class="block w-full text-sm text-gray-900 py-2 px-5 border-0 ring-1 ring-inset ring-gray-300 border-gray-300 rounded-lg cursor-pointer bg-gray-100 dark:text-gray-400 focus:outline-none">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5 flex items-center gap-3 justify-between">
                    <div class="w-1/2">
                        <a href="{{ route('products.index') }}">
                            <button type="button" class="block w-full text-sm px-12 py-2 rounded-md font-bold bg-white border border-gray-200 shadow-xl hover:bg-red-500 leading-6 text-gray-900">Cancel</button>
                        </a>
                    </div>

                    <div class="w-1/2">
                        <button type="submit" class="block w-full rounded-md bg-[#1B4F7C] px-12 py-2.5 text-sm font-bold text-white shadow-xl hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
