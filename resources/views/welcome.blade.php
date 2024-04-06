<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pos Koperasi Jaya</title>
</head>

<body class="antialiased;">
    @include('layouts.navbar')
    <section>
        <div class="px-8 py-16 mx-auto md:px-12 lg:px-32 max-w-7xl" style="margin-top:70px;">
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-indigo-900 lg:text-6xl text-balance">
                    Ekonomi Sejahtera,
                    <span class="text-indigo-800">Bersama Koperasi Jaya</span>
                </h1>
            </div>
            <div class="space-y-2">
                <div class="grid gap-4 mt-10 mb-28 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-1">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border rounded-3xl max-w-none" style="background: #4338ca;">
                                <h2 class="font-medium text-white font-semibold text-justify">
                                    Koperasi Jaya didirikan pada tanggal 8 Maret 2024 oleh mahasiswa Universitas Telkom dari program studi S1 Sistem Informasi, yaitu Aria Riezki Fhadila, Josia Fortino Pakpahan, Kevin Fritz Angelo, Mohammad Fahrudin, M Hasbi Asshiddiqqi, M. Rayhan Maulana Al-Rasyid, dan R. Rama Ahmad Waliyya.
                                    Koperasi ini disahkan dengan Akte Badan Hukum No.9999 pada tanggal 10 Maret 2024 sebagai Koperasi Serba Usaha. Anggota dari Koperasi Jaya adalah karyawan tetap yang terdaftar pada BUMD.
                                </h2>
                                <p class="mt-4 text-sm font-regular text-white text-pretty text-justify">
                                    Bergabunglah dengan kami dalam misi untuk membuat hari esok yang lebih baik, kemakmuran ekonomi bukan hanya sekedar mimpi tetapi kenyataan bagi semua. Bersama-sama, mari kita ciptakan masa depan kesuksesan dan kemakmuran bersama. Ekonomi Sejahtera Bersama Koperasi Jaya!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <div class="relative h-full p-0 overflow-hidden border-rounded">
                                <img src="{{ asset('images/Koperasi-Logo.png') }}" class="object-cover border shadow-2xl rounded-2xl" width="300" height="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-center">
                    <div class="flex flex-col px-8 py-6" style="background: linear-gradient(to right, #4338ca, #5a67d8); width:800%; margin-left: -350%;">
                        <div>
                            <div class="px-8 py-2 mx-auto md:px-12 lg:px-4 max-w-7xl">
                                <div class="grid grid-cols-2 text-sm font-medium text-center text-gray-500 gap-x-6 gap-y-12 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16 text-balance">
                                    <div>
                                        <div>
                                            <span class="flex items-center justify-center mx-auto bg-gray-100 rounded-full size-12"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-gray-600 size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"></path>
                                                </svg></span>
                                        </div>
                                        <div class="mt-6 text-white">
                                            <h3 class="text-xl font-semibold">1200+ Anggota</h3>
                                            <p class="mt-2 text-xs">
                                                Total Anggota Koperasi Jaya
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <span class="flex items-center justify-center mx-auto bg-gray-100 rounded-full size-12"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-gray-600 size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"></path>
                                                </svg></span>
                                        </div>
                                        <div class="mt-6 text-white">
                                            <h3 class="text-xl font-semibold">1 Miliar+ Rupiah</h3>
                                            <p class="mt-2 text-xs">
                                                Total Asset
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <span class="flex items-center justify-center mx-auto bg-gray-100 rounded-full size-12"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="text-gray-600 size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"></path>
                                                </svg></span>
                                        </div>
                                        <div class="mt-6 text-white">
                                            <h3 class="text-xl font-semibold">24 dari 38 Provinsi</h3>
                                            <p class="mt-2 text-xs">
                                                Total Sebaran Koperasi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                <h1 class=" mt-6 text-xl font-semibold tracking-tighter text-indigo-900 lg:text-6xl text-balance" style="margin-top:70px;">
                    SEMUA KEBUTUHAN ANDA ADA DI
                    <span class="text-indigo-800 font-bold">Koperasi Jaya</span>
                </h1>
                <p class="mt-4 text-base font-medium text-indigo-800 text-balance">
                    Koperasi Jaya menyediakan segala kebutuhan anda terkait koperasi serba usaha. Mari kita lihat apa saja yang bisa dilakukan.
                </p> <br>
            </div>
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto lg:col-start-3">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border  rounded-3xl max-w-none" style="background: #4338ca;">
                                <h2 class="font-bold text-white" style="font-size: 20px;">Dashboard Pembelian dan Penjualan</h2>
                                <p class="mt-4 text-sm font-medium text-white text-pretty" style="text-align:justify;">
                                    Dashboard Pembelian dan Penjualan menyediakan akses cepat ke informasi terkini
                                    mengenai transaksi terakhir, riwayat pembelian, serta penjualan yang memungkinkan manajer
                                    untuk melihat rincian transaksi secara detail dan menganalisis tren pembelian dan penjualan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-start-1 lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="../images/placeholders/rectangle1.svg" class="object-cover h-full border shadow-2xl rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border rounded-3xl max-w-none" style="background: #4338ca;">
                                <h2 class="font-bold text-white text-right" style="font-size: 20px;">
                                    Memasukkan Data Pembelian Barang
                                </h2>
                                <p class="mt-4 text-sm font-medium text-white text-pretty text-right" style="text-align:justify; direction: rtl;">
                                    Memasukkan Data Pembelian Barang memungkinkan Admin untuk dengan mudah
                                    merekam dan mengelola pembelian barang dalam sistem. Admin dapat memasukkan rincian transaksi, seperti tanggal pembelian, 
                                    nama produk, jumlah, harga dan informasi vendor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="../images/placeholders/rectangle1.svg" class="object-cover h-full border shadow-2xl rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                <h2 class="mt-20 text-xl font-bold tracking-tighter text-indigo-900 lg:text-4xl text-balance" style="margin-bottom:35px;">
                    Fitur Lainnya
                </h2>
                <div class="grid gap-2 mt-2 text-center md:grid-cols-3">
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="../images/placeholders/rectangle1.svg" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="mt-4">
                            <p class="font-bold text-gray-900" style="font-size: 16px;">Laporan Rekap Pembelian Barang</p>
                            <p class="mt-2 text-sm text-gray-500">
                                Laporan Rekap Pembelian Barang memungkinkan pengguna untuk melacak
                                dan menganalisis semua transaksi pembelian dengan mudah.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="../images/placeholders/rectangle1.svg" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="px-8 mt-4">
                            <p class="font-bold text-gray-900" style="font-size: 16px;">Mencatat Tranksaksi Penjualan</p>
                            <p class="mt-2 text-sm text-gray-500">
                                Mencatat Transaksi Penjualan memungkinkan pengguna untuk Mencatat
                                setiap transaksi penjualan dengan akurat.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="../images/placeholders/rectangle1.svg" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="px-8 mt-4">
                            <p class="font-bold text-gray-900" style="font-size: 16px;">Rekap Riwayat Penjualan</p>
                            <p class="mt-2 text-sm text-gray-500">
                                Rekap Riwayat Penjualan memberikan akses cepat dan mudah untuk melihat 
                                riwayat semua transaksi penjualan yang dilakukan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="px-8 bg-indigo-800 py-12 mx-auto md:px-12 lg:px-32 max-w-auto">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="text-white">
            <p class="text-xl font-semibold font-bold uppercase">KOPERASIJAYA</p>
            <p class="mt-2 text-sm text-white font-medium text-gray-500 lg:w-4/5">
                Alamat: Jl. Telekomunikasi No. 5, Terusan Buah Batu, Bandung 40275
                <span class="lg:block"> Email: support@koperasijaya.co.id</span>
                <span class="lg:block"> Telp: (+62) 11 397 243 2 </span>
            </p>
        </div>
        <div class="flex justify-center xl:col-span-2">
            <div class="text-white">
                <h3 class="text-xl font-semibold font-bold uppercase">Socials</h3>
                <ul role="list" class="mt-2 space-y-2">
                    <li>
                        <a href="#_" class="hover:text-gray-500 font-medium lg:w-4/5">
                            Youtube
                        </a>
                    </li>
                    <li>
                        <a href="#_" class="hover:text-gray-500 font-medium lg:w-4/5">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="#_" class="hover:text-gray-500 font-medium lg:w-4/5">
                            Facebook
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
        <span class="text-sm text-white font-medium text-gray-500">
            Copyright © <span x-text="year">2024</span>
            <a aria-label="Michael Andreuzza" href="#_" class="text-blue-500 hover:text-gray-500">KOPERASIJAYA</a>
            Since 2024
        </span>
    </div>
</footer>
</body>
</html>