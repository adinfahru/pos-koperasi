<x-app-layout>
    <div class="h-screen py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-2/4">
                    <div class="bg-white rounded-lg shadow-md p-5 mb-3 border">
                        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Transaksi</label>
                                <form method="GET" action="">
                                    <div class="flex">
                                        <select name="product_id" id="" class="block w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option value="">{{ isset($p_detail) ? $p_detail->name : 'Nama Produk' }}</option>
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{' ID '.$product->id.' - ' . $product->name }}</option>
                                            @endforeach
                                        </select>
                                        <select name="user_id" id="user_id" class="block w-full text-xs rounded-md shadow-sm border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option value="">Pilih User</option>
                                            @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="rounded-md bg-indigo-600 text-xs px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">Pilih</button>
                                    </div>
                                </form>
                            </div>

                            <div class="sm:col-span-6">
                                <form action="{{ route('transaction.detail.create')}}" method="POST">
                                    @csrf
                                    @if($p_detail)
                                    <input type="hidden" name="transaction_id" value="{{ Request::segment(2) }}">
                                    <input type="hidden" name="product_id" value="{{ isset($p_detail) ? $p_detail->id : '' }}">
                                    <input type="hidden" name="user_id" value="{{ isset($user_id) ? $user_id : '' }}">
                                    <input type="hidden" name="product_name" value="{{ isset($p_detail) ? $p_detail->name : '' }}">
                                    <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                    @endif

                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Customer</label>
                                <input type="text" value="{{ isset($user_id) ? $users->where('id', $user_id)->first()->name : '' }}" disabled name="customer" id="" class="text-xs block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Produk</label>
                                <input type="text" value="{{ isset($p_detail) ? $p_detail->name : '' }}" disabled name="nama_produk" id="" class="text-xs block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                                <input type="text" value="{{ isset($p_detail) ? $p_detail->price : '' }}" disabled name="harga" id="" class="text-xs block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            </div>
                            <div class="sm:col-span-6 flex items-center space-x-4 mt-3">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900 mr-4">Quantity</label>
                                <div class="flex items-center space-x-4">
                                    <a href="?product_id={{ request('product_id') }}&act=min&qty={{ $qty }}" class="rounded-md bg-indigo-600 px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">-</a>
                                    <input type="number" value="{{ $qty }}" name="qty" id="" class="text-xs block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <a href="?product_id={{ request('product_id') }}&act=plus&qty={{ $qty }}" class="rounded-md bg-indigo-600 px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">+</a>
                                </div>
                            </div>
                            <div class="sm:col-span-6 mt-3">
                                <h5 class="block text-md font-medium leading-6 text-gray-900 mr-4">Subtotal : Rp. {{ $subtotal }}</h5>
                            </div>
                            <div class="sm:col-span-6 space-x-4">
                                <button type="submit" class="p-2 w-full text-xs rounded-md bg-indigo-600 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-2/4">
                <!-- Transaction details table -->
                <div class="bg-white rounded-lg shadow-md p-6 border text-xs">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 bg-gray-200 uppercase">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Nama Produk</th>
                                <th class="px-4 py-3">Quantity</th>
                                <th class="px-4 py-3">Subtotal</th>
                                <th class="px-4 py-3">#</th>
                            </tr>
                        </thead>
                        @foreach ($transaction_detail as $item)
                        <tbody class="bg-white divide-y dark:divide-gray-300 dark:bg-gray-50">
                            <tr class="text-gray-700 dark:text-gray-600">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $item->product_name}}</td>
                                <td class="px-4 py-3">{{ $item->qty}}</td>
                                <td class="px-4 py-3">{{ $item->subtotal}}</td>
                                <td class="px-4 py-3">
                                    <a href="/transaction/detail/delete?id={{ $item->id }}" class="rounded-md bg-red-600 p-1 text-sm text-xs font-semibold text-white shadow-sm hover:bg-red-500">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <a href="" class="rounded-md bg-red-600 p-1 text-sm text-xs font-semibold text-white shadow-sm hover:bg-red-900">Pending</a>
                    <a href="/transaction/detail/selesai/{{ Request::segment(2)}}" class="rounded-md bg-indigo-600 p-1 text-sm text-xs font-semibold text-white shadow-sm hover:bg-indigo-500">Selesai</a>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-2/4">
                <div class="bg-white rounded-lg shadow-md p-5 mb-4 border">
                    <form action="" method="GET">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Total Belanja</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input value="{{ $transaction->total }}" disabled type="number" name="total_belanja" id="" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Dibayarkan</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input value="{{ request('dibayarkan') }}" type="number" name="dibayarkan" id="" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <button class="rounded-md bg-indigo-600 p-1 text-sm text-xs font-semibold text-white shadow-sm hover:bg-indigo-500">Hitung</button>
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Uang Kembalian</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md bg-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input value="{{ $kembalian }}" type="number" disabled name="kembalian" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="md:w-2/4">
                <!-- Additional content if needed -->
            </div>
        </div>
    </div>
    </div>
</x-app-layout>