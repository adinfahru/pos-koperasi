<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: #eeeeee">
    <!-- Leaderboard System Start -->
    <div class="leaderboard-system mt-12 sm:rounded-lg" style="background:linear-gradient(45deg, #3E379B, #5a67d8)">
        <!-- Top 3 Leaderboard -->
        <div class="top-leaderboard ">
            <div class="sm:rounded-lg">
                <div class="relative z-0" style="transform:scale(0.6)">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative lg:grid lg:grid-cols-7">
                    <div class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                        <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                        <div class="flex-1 flex flex-col">
                            <div class="bg-white px-6 py-10">
                            <div>
                                <h3 class="text-center text-3xl font-bold text-indigo-900 sm:-mx-6" id="tier-growth">Yuwandi</h3>
                                <div class="mt-4 flex items-center justify-center">
                                <span class="px-3 flex items-start text-4xl tracking-tight text-gray-900">
                                    <span class="font-semibold">Rp.</span>
                                    <span class="total-uang font-bold"> 2.890.000 </span>
                                </span>
                                </div>
                                <h3 class="mt-4 text-center text-xl font-medium text-gray-500 sm:-mx-6" id="tier-growth"> / Bulan Ini </h3>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
                        <div class="relative z-10 rounded-lg shadow-xl">
                        <div class="rounded-lg pointer-events-none absolute inset-0 border-2 border-yellow-300" aria-hidden="true"></div>
                        <div class="absolute inset-x-0 top-0 transform translate-y-px">
                            <div class="flex justify-center transform -translate-y-1/2">
                            <span class="inline-flex rounded-full bg-yellow-300 px-4 py-1 text-sm font-semibold tracking-wider uppercase text-white"> #1 </span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg px-6 pt-16 pb-16">
                            <div>
                                <h3 class="text-center text-3xl font-bold text-indigo-900 sm:-mx-6" id="tier-growth">Andi</h3>
                                <div class="mt-4 flex items-center justify-center">
                                    <span class="px-3 flex items-start text-7xl tracking-tight text-gray-900 sm:text-6xl">
                                        <span class="font-semibold">Rp.</span>
                                        <span class="total-uang font-bold"> 3.460.000 </span>
                                    </span>
                                </div>
                                <h3 class="mt-4 text-center text-xl font-medium text-gray-500 sm:-mx-6" id="tier-growth"> / Bulan Ini </h3>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
                        <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                        <div class="flex-1 flex flex-col">
                            <div class="bg-white px-6 py-10">
                            <div>
                                <h3 class="text-center text-3xl font-bold text-indigo-900 sm:-mx-6" id="tier-growth">Irul</h3>
                                <div class="mt-4 flex items-center justify-center">
                                <span class="px-3 flex items-start text-4xl tracking-tight text-gray-900">
                                    <span class="font-semibold">Rp.</span>
                                    <span class="total-uang font-bold"> 970.000 </span>
                                </span>
                                </div>
                                <h3 class="mt-4 text-center text-xl font-medium text-gray-500 sm:-mx-6" id="tier-growth"> / Bulan Ini </h3>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <!-- Top 3 Leaderboard Ends -->
    <!-- Other Leaderbord -->
        <div class="other-leaderboards pb-12">
            <div class="mt-2 relative overflow-x-auto shadow-md sm:rounded-lg max-w-screen-md mx-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-black uppercase bg-gray-50 dark:bg-gray-300 dark:text-black">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Position
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengguna
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Transaksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                1.
                            </th>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Andi
                            </td>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Rp.3.460.000
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                2.
                            </th>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Yuwandi
                            </td>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Rp.2.890.000
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                3.
                            </th>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Irul
                            </td>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Rp.970.000
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Other Leaderboard Ends -->
    <!-- Leaderboard System Ends -->
    </div>
    <!-- Transaction History Tables -->
        <div class="transaction-history-table px-100 py-12">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-bold text-left rtl:text-right text-gray-900 bg-white dark:text-black dark:bg-white">
                        Transaction History
                        <p class="mt-1 text-sm font-normal text-black dark:text-black">Catatan yang mencatat semua transaksi yang telah terjadi sebelumnya.</p>
                    </caption>
                    <thead class="text-xs text-black uppercase bg-gray-50 dark:bg-gray-300 dark:text-black">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Transaksi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengguna
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Item
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Pembayaran
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                03/05/2024
                            </th>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Andi
                            </td>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Beras
                            </td>
                            <td class="harga-item px-6 py-4 font-medium dark:text-black">
                                Rp. 65.000
                            </td>
                            <td class="jumlah-item px-6 py-4 font-medium dark:text-black">
                                1
                            </td>
                            <td class="total-pembayaran px-6 py-4 font-medium dark:text-black">
                                Rp. 65.000
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                                03/05/2024
                            </th>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Andi
                            </td>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Beras
                            </td>
                            <td class="harga-item px-6 py-4 font-medium dark:text-black">
                                Rp. 65.000
                            </td>
                            <td class="jumlah-item px-6 py-4 font-medium dark:text-black">
                                1
                            </td>
                            <td class="total-pembayaran px-6 py-4 font-medium dark:text-black">
                                Rp. 65.000
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-white">
                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-black">
                                03/05/2024
                                <td class="item px-6 py-4 font-medium dark:text-black">
                                    Andi
                                </td>
                            </th>
                            <td class="item px-6 py-4 font-medium dark:text-black">
                                Beras
                            </td>
                            <td class="harga-item px-6 py-4 font-medium dark:text-black">
                                Rp. 65.000
                            </td>
                            <td class="jumlah-item px-6 py-4 font-medium dark:text-black">
                                1
                            </td>
                            <td class="total-pembayaran px-6 py-4 font-medium dark:text-black">
                                Rp. 65.000
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- TH Close -->
</body>
</html>
</x-app-layout>