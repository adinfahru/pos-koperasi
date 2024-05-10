<x-app-layout>
  <x-slot name="header">
    {{ __('Selamat Datang ') }} {{ Auth::user()->name }}
  </x-slot>

  <div class="container mx-auto mt-6">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-1/2 px-4">
        <div class="bg-white shadow-md rounded-lg p-4">
          <h3 class="text-lg font-semibold mb-3">Leaderboard Transaksi</h3>
          <table class="table-auto w-full">
            <thead>
              <tr class="border-b border-gray-200">
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Pelanggan</th>
                <th class="px-4 py-2 text-right text-sm font-medium text-gray-500">Transaksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($leaderboard as $entry)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                  <td class="px-4 py-2 text-left text-sm">
                    @if ($entry->customer)
                      {{ $entry->customer->name }}
                    @else
                      Pelanggan Tidak Dikenal
                    @endif
                  </td>
                  <td class="px-4 py-2 text-right text-sm">
                    {{ $entry->transaction_count }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <div class="w-full lg:w-1/2 px-4">
        <div class="bg-white shadow-md rounded-lg p-4">
          <h3 class="text-lg font-semibold mb-3">Another Dashboard Section</h3>
          <p>This could be a section displaying recent transactions, sales figures, or other relevant information.</p>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
