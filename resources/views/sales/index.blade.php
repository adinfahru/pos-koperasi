<x-app-layout>
    <div class="w-full flex flex-col mt-3 mb-3 p-4 gap-3">
        <div class="w-full p-3 flex gap-5 rounded-lg shadow-xl">
            <img src="{{ asset('images/history.png') }}" class="" width="25" height="25">
            <h1 class="text-[16px] font-semibold">
                Sales History
            </h1>
        </div>

        <div class="w-full mt-4 flex flex-col shadow-xl p-4 rounded-lg">

            <div class="py-2 relative overflow-x-auto">
                <table class="w-full text-sm text-center rtl:text-right text-gray-500">
                    <thead class="text-[14] text-white uppercase bg-[#1B4F7C]">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        {{-- row 1 --}}
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 text-left">
                                {{$product->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$product->category}}
                            </td>
                            <td class="px-6 py-4">
                                null
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{$product->price}}
                            </td>
                            <td class="px-6 py-4">
                                Rp. null
                            </td>
                            <td class="px-6 py-4">
                                null
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
</x-app-layout>