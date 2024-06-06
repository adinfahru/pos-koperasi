<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border text-sm">
        <div class="container">
            <h1 class="text-xl font-semibold mb-4">Low Stock Products</h1>
            @if ($lowStockProducts->isEmpty())
                <p class="text-sm text-gray-500">No products with low stock.</p>
            @else
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 bg-gray-200 uppercase border">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Stock</th>
                            <th class="px-4 py-3">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowStockProducts as $product)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3">{{ $product->name }}</td>
                                <td class="px-4 py-3">{{ $product->category->category_name }}</td>
                                <td class="px-4 py-3">{{ $product->stock }}</td>
                                <td class="px-4 py-3">{{ $product->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
