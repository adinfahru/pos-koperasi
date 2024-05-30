<x-app-layout>
    <div class="p-12 mt-6 bg-white rounded-lg shadow-xs">
        
        <form method="POST" action="{{ route('products.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Tambah Produk</h2>
                    
                    <div class="mt-5 space-y-6">

                        <div class="w-full">
                            <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Kode Produk</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                    <input type="text" name="code" id="code" value="" autocomplete="off" class="uppercase block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Produk</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                    <input type="text" name="name" id="name" value="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Pilih Kategori</label>
                            <div class="mt-2">
                                <select id="category" name="category" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                    <option>Perabotan</option>
                                    <option>Obat-Obatan</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="stock" class="block text-sm font-medium leading-6 text-gray-900">Stok</label>
                            <div class="mt-2">
                                <input type="number" min="1" step="any" name="stock" id="stock" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Harga Jual</label>
                            <div class="mt-2">
                                <input type="number" min="1" step="any" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="purchase" class="block text-sm font-medium leading-6 text-gray-900">Harga Beli</label>
                            <div class="mt-2">
                                <input type="number" name="purchase" id="purchase" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="purchasing_date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Pembelian</label>
                            <div class="mt-2">
                                <input type="date" name="purchasing_date" id="purchasing_date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Foto Produk</label>
                            <input required name="image" id="image" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 focus:outline-none">
                        </div>

                    </div>
                    <div class="mt-5 flex items-center justify-end gap-x-6">
                        <a href="{{route('products.index')}}"><button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-12 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
