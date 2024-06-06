<x-app-layout>
    <body>
        <!-- Background container -->
        <div class="main-container" style="background-image:url('{{ asset('/images/gradient-indigo-purple.png') }}'); background-size: cover; background-position: center;">
            <!-- Header -->
            <h1 class="mx-10 pt-10 text-3xl font-bold text-left rtl:text-right text-white dark:text-white">{{ Auth::user()->name }} Dashboard</h1>
                <h2 class="mx-10 pt-2 text-base font-regular text-left rtl:text-right text-gray-300">Dashboard Pembelian dan Penjualan</h2>
                <!-- Main -->
                <div class="mt-5 mb-10 flex justify-center">
                        <div
                            class="mx-6 my-5 w-[250px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                            >
                            <div
                                class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-indigo-900 text-white"
                            >
                                <div class="text-center">
                                <h2 class="text-xl font-semibold">Anggota</h2>
                                <p class="text-sm text-gray-300">Total Anggota Koperasi</p>
                                </div>
                                <svg
                                    class="w-32 h-32 p-6 -red-400 fill-current animate-pulse"
                                    viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <!-- Your new SVG code or image tag goes here -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                    </svg>
                                </svg>
                                <div class="mb-2 text-xl font-semibold">
                                    {{$users->count()}} Anggota
                                </div>
                            </div>
                        </div>
                        <div
                            class="mx-6 my-5 w-[250px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                            >
                            <div
                                class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-indigo-900 text-white"
                            >
                                <div class="text-center">
                                <h2 class="text-xl font-semibold">Transaksi</h2>
                                <p class="text-sm text-gray-300">Total Transaksi Anggota</p>
                                </div>
                                <svg
                                    class="w-32 h-32 p-6 -red-400 fill-current animate-pulse"
                                    viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <!-- Your new SVG code or image tag goes here -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                                    </svg>
                                </svg>
                                <div class="mb-2 text-xl font-semibold">
                                    {{$transactions->count()}} Transaksi
                                </div>
                            </div>
                        </div>
                        <div
                            class="mx-6 my-5 w-[250px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                            >
                            <div
                                class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-indigo-900 text-white"
                            >
                                <div class="text-center">
                                <h2 class="text-xl font-semibold">Produk</h2>
                                <p class="text-sm text-gray-300">Total Produk Koperasi</p>
                                </div>
                                <svg
                                    class="w-32 h-32 p-6 -red-400 fill-current animate-pulse"
                                    viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <!-- Your new SVG code or image tag goes here -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </svg>
                                <div class="mb-2 text-xl font-semibold">
                                    {{$products->count()}} Produk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Pembelian Stok -->
        <!-- Penjualan/Transaction History -->
        <!-- Ambil dari database -->

        <!-- Close dari database -->
        <div class="flex items-center justify-center">
            <div class="my-12 mx-5 max-w-screen-lg w-full flex justify-center">
                <canvas id="myChart"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const ctx = document.getElementById('myChart').getContext('2d');

                    const transactionData = @json($transactionsData);

                    const labels = transactionData.map(data => data.month);
                    const dataPoints = transactionData.map(data => data.total);

                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Total transaksi per bulan',
                                data: dataPoints,
                                borderWidth: 2,
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                fill: true,
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    })
                })
            </script>
        </div>
    </body>
</x-app-layout>