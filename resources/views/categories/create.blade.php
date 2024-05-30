<x-app-layout>
    <div class="p-4 mt-4 bg-white rounded-lg shadow-xs border">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="mb-4">
                <label for="category_name" class="block text-sm font-semibold mb-5 text-gray-700">Nama Kategori</label>
                <input type="text" name="category_name" id="category_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                @error('category_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <a href="{{ route('categories.index') }}" class="rounded-md bg-red-600 px-6 py-2 text-sm font-semibold mr-3 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
