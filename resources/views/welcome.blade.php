<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pos Koperasi Jaya</title>
</head>

@include('layouts.navbar')
<body class="antialiased;" style="background-image: url('images/bg-only-blue.png');">
    <section>
        <div class="px-8 py-16 mx-auto md:px-12 lg:px-32 max-w-7xl" style="margin-top:70px;">
            <div>
                <h1 class="text-xl font-bold tracking-tighter lg:text-6xl text-balance" style="color: #3E379B;">
                    Ekonomi Sejahtera,
                    <span class="text-white" style="color: #3E379B;">Bersama Koperasi Jaya</span>
                </h1>
            </div>
            <div class="space-y-2">
                <div class="grid gap-4 mt-10 mb-28 lg:grid-flow-col-dense lg:mx-auto lg:grid lg:grid-cols-1">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border rounded-3xl max-w-none" style="background: #3E379B;">
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
                                <img src="{{ asset('images/fotofounder.jpg') }}" class="object-cover border shadow-2xl rounded-2xl" width="300" height="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-center">
                    <div class="flex flex-col px-8 py-6" style="background: linear-gradient(to right, #3E379B, #5a67d8); width: 100vw; margin-left: -200px;">
                        <div>
                            <div class="px-8 py-2 mx-auto max-w-7xl md:px-12 lg:px-4">
                                <div class="grid grid-cols-2 text-sm font-medium text-center text-gray-500 gap-x-6 gap-y-12 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16 text-balance">
                                    <div>
                                        <div>
                                            <span class="flex items-center justify-center mx-auto size-12"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16"> <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>
                                            </span>
                                        </div>
                                        <div class="mt-6 text-white">
                                            <h3 class="text-xl font-bold">1200+ Anggota</h3>
                                            <p class="mt-2 text-xs" style="font-style: regular;">
                                                Total Anggota Koperasi Jaya
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <span class="flex items-center justify-center mx-auto size-12"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" fill="white"></path></svg></span>
                                        </div>
                                        <div class="mt-6 text-white">
                                            <h3 class="text-xl font-bold">1 Miliar+ Rupiah</h3>
                                            <p class="mt-2 text-xs" style="font-style: regular;">
                                                Total Asset
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <span class="flex items-center justify-center mx-auto size-12"><svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" fill="white"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" fill="white"></path> </svg>
                                            </span>
                                        </div>
                                        <div class="mt-6 text-white">
                                            <h3 class="text-xl font-bold">24 dari 38 Provinsi</h3>
                                            <p class="mt-2 text-xs" style="font-style: regular;">
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
                            <div class="flex flex-col justify-center p-8 border  rounded-3xl max-w-none" style="background: #3E379B;">
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
                                <img src="{{ asset('images/dashboard-pembelian-barang.png') }}" class="object-cover h-full border shadow-2xl rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border rounded-3xl max-w-none" style="background: #3E379B;">
                                <h2 class="font-bold text-white text-right" style="font-size: 20px;">
                                    Memasukkan Data Barang
                                </h2>
                                <p class="mt-4 text-sm font-medium text-white text-pretty text-right" style="text-align:justify; direction: rtl;">
                                    Memasukkan Data Barang memungkinkan Admin untuk dengan mudah
                                    memasukkan data barang baru ke dalam sistem. Admin dapat memasukkan rincian barang, seperti nama produk, kategori,
                                    stok, harga jual/beli, dan foto produk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="{{asset('images/input-data-barang.png')}}" class="object-cover h-full border shadow-2xl rounded-2xl">
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
                            <img src="{{asset('images/manajemen-anggota.png')}}" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="mt-4">
                            <p class="font-bold text-indigo-900" style="font-size: 16px;">Manajemen Anggota</p>
                            <p class="mt-2 text-sm text-gray-500">
                                Manajemen Anggota memungkinkan Admin untuk melakukan
                                penambahan anggota baru disertai dengan role-nya.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="{{asset('images/Koperasi-Logo-169.png')}}" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="px-8 mt-4">
                            <p class="font-bold text-indigo-900" style="font-size: 16px;">Mencatat Tranksaksi Penjualan</p>
                            <p class="mt-2 text-sm text-gray-500">
                                Mencatat Transaksi Penjualan memungkinkan pengguna untuk Mencatat
                                setiap transaksi penjualan dengan akurat.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="{{asset('images/Koperasi-Logo-169.png')}}" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="px-8 mt-4">
                            <p class="font-bold text-indigo-900" style="font-size: 16px;">History Pembelian</p>
                            <p class="mt-2 text-sm text-gray-500">
                                History Pembelian memungkinkan Anggota untuk melihat 
                                riwayat semua transaksi pembelian yang sudah dilakukan.
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