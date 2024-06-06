<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pos Koperasi</title>

</head>

<body class="antialiased">
    @include('layouts.navbar')
    <section>
        <div class="px-8 py-16 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-indigo-900 lg:text-6xl text-balance">
                    Ekonomi Sejahtera
                    <span class="text-indigo-800">Bersama Koperasi Jaya</span>
                </h1>
                <p class="italic mt-4 text-base font-medium text-indigo-800 text-balance">
                    " Maju terus Koperasi Indonesia, sejahtera rakyat Indonesia "
                </p>
            </div>
            <div class="space-y-2">
                <div class="grid gap-2 mt-12 mb-8 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-1">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50 rounded-3xl max-w-none">
                                <h2 class="font-medium text-gray-900">
                                    Welcome to Koperasi Jaya, your gateway to economic prosperity and community empowerment.
                                    Our platform stands as a beacon of hope, championing the ideals of shared prosperity and collaborative growth.
                                    With the tagline "Ekonomi Sejahtera Bersama Koperasi Jaya," we are committed to fostering economic well-being and
                                    ensuring a prosperous future for all.
                                </h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                    Join us in our mission to build a brighter tomorrow, where economic prosperity is not just a dream but a reality for all.
                                    Together, let's create a future of shared success and prosperity. Ekonomi Sejahtera Bersama Koperasi Jaya!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/Koperasi-Logo.png') }}" class="object-cover border shadow-2xl rounded-2xl" width="300" height="200">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-center w-full mx-auto">
                    <div class="bg-indigo-800 flex flex-col w-full px-8 py-6 mx-auto">

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
                    <h1 class="mt-10 mb-10 text-3xl font-semibold tracking-tighter text-indigo-900 text-balance">
                        Kenapa Harus Koperasi Jaya?
                    </h1>
                </div>
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto lg:col-start-3">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50  rounded-3xl max-w-none">
                                <h2 class="font-bold text-gray-900">Leaderboard</h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                Dengan sistem leaderboard kami yang menghitung berdasarkan banyaknya transaksi, 
                                Anda dapat bersaing secara sehat dan melihat pencapaian Anda naik ke puncak. 
                                Bergabunglah dengan kami dan rasakan semangat persaingan yang sehat serta kemajuan yang nyata.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-start-1 lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/score.png') }}" class="mx-auto object-cover w-60 border shadow-2xl rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50  rounded-3xl max-w-none">
                                <h2 class="font-bold text-gray-900">History Pembelian</h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                Dengan layanan history pembelian yang terperinci, 
                                Koperasi Jaya memastikan setiap langkah Anda tercatat dengan sempurna. 
                                Kami memberikan transparansi penuh dan akses mudah ke catatan transaksi Anda, 
                                sehingga Anda dapat melacak jejak keuangan Anda dengan mudah dan memperoleh kepercayaan yang tak tergoyahkan."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/bill.png') }}" class="mx-auto object-cover h-full w-60 border shadow-2xl rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto lg:col-start-3">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50  rounded-3xl max-w-none">
                                <h2 class="font-bold text-gray-900">Sisa Hasil Usaha</h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                Kami memahami pentingnya mengelola hasil usaha dengan bijak. 
                                Dengan fitur sisa hasil usaha kami, Anda dapat dengan mudah melihat dan mengelola pengeluaran serta penghasilan Anda. 
                                Kami memberikan alat yang Anda butuhkan untuk membuat keputusan finansial yang cerdas dan mengarahkan usaha Anda menuju kesuksesan yang berkelanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-start-1 lg:col-span-2">
                        <div>
                            <div class="relative h-full p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/salary.png') }}" class="mx-auto object-cover h-full w-60 border shadow-2xl rounded-2xl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h2 class="mb-10 mt-10 text-3xl font-semibold tracking-tighter text-indigo-900 text-balance">
                        Benefit Lainnya
                    </h2>
                    <div class="grid gap-2 mt-2 text-center md:grid-cols-3">
                        <div>
                            <div class="p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/repeat.png') }}" alt="#_" class="w-40 mx-auto rounded-2xl">
                            </div>
                            <div class="mt-4">
                                <p class="font-medium text-gray-900">Laporan Rekap Bulanan Anggota</p>
                            </div>
                        </div>
                        <div>
                            <div class="p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/customer-support.png') }}" alt="#_" class="w-40 mx-auto rounded-2xl">
                            </div>
                            <div class="px-8 mt-4">
                                <p class="font-medium text-gray-900">Customer Service 24/7</p>
                            </div>
                        </div>
                        <div>
                            <div class="p-2 overflow-hidden border rounded-3xl">
                                <img src="{{ asset('images/salary.png') }}" alt="#_" class="w-40 mx-auto rounded-2xl">
                            </div>
                            <div class="px-8 mt-4">
                                <p class="font-medium text-gray-900">SHU yang Bersaing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="px-8 bg-indigo-800 py-12 mx-auto md:px-12 lg:px-32 max-w-auto">
        <div class="xl:grid xl:grid-cols-2 xl:gap-8">
            <div class="text-white">
                <p class="text-xl font-bold">Koperasi Jaya</p>
                <p class="mt-2 text-sm text-white font-medium text-gray-500 lg:w-4/5">
                    Alamat: Jl. Telekomunikasi No. 5, Terusan Buah Batu, Bandung 40275
                    <span class="lg:block"> Email: support@koperasijaya.co.id</span>
                    <span class="lg:block"> Telp: (+62) 851-5696-3834</span>
                </p>
            </div>
        <div class="xl:grid xl:grid-cols-1 xl:gap-8">
            <div class="text-white">
                <p class="text-xl font-bold">Teams 5</p>
                <p class="mt-2 text-sm font-medium">
                    <ul>
                        <li>Mohamad Fahrudin</li>
                        <li>M Hasbi Asshiddiqqi</li>
                        <li>Aria Riezki Fadhila</li>
                        <li>R Rama Ahmad Waliyya</li>
                        <li>Kevin Fritz Angelo</li>
                        <li>Josia Fortino</li>
                        <li>Rayhan Maulana</li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
            <span class="text-sm text-white font-medium text-gray-500">
                Copyright © <span x-text="year">2024</span>
                <a href="#_" class="text-white hover:text-blue-50">Koperasi Jaya</a>
            </span>
        </div>
    </footer>
</body>

</html>