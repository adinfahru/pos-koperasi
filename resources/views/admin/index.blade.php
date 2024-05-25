<x-app-layout>
    <body>
        <!-- Background container -->
        <div class="main-container" style="background-image:url('{{ asset('/images/gradient-indigo-purple.png') }}'); background-size: cover; background-position: center;">
            <!-- Header -->
            <h1 class="mx-10 pt-10 text-3xl font-bold text-left rtl:text-right text-white dark:text-white">Dashboard</h1>
                <h2 class="mx-10 pt-2 text-base font-regular text-left rtl:text-right text-gray-300">Dashboard Pembelian dan Penjualan</h2>
                <!-- Main -->
                <div class="mt-5 mb-10 flex justify-center">
                        <div
                            class="mx-3 my-5 w-[350px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                            >
                            <div
                                class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-indigo-900 text-white"
                            >
                                <div class="text-center">
                                <h2 class="text-xl font-semibold">Anggota Koperasi</h2>
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
                            class="mx-3 my-5 w-[350px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
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
                            class="mx-3 my-5 w-[350px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
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
    <x-slot name="header">
        {{ __('Admin Dashboard') }}
    </x-slot>

    <div class="mt-5  rounded-lg shadow-xs">
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Anggota Koperasi
                    </p>
                    <p class="text-md font-semibold">
                        {{$users->count()}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Total Sales
                    </p>
                    <p class="text-md font-semibold">
                        {{$totalSales}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Transaksi
                    </p>
                    <p class="text-md font-semibold">
                        {{$transactions->count()}}
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs border">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium">
                        Produk
                    </p>
                    <p class="text-md font-semibold">
                        {{ $products->count() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>