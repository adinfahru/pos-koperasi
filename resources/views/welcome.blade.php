<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Pos Koperasi</title>

</head>

<body class="antialiased">
    <nav>
        <div class="justify-center w-full mx-auto">
            <div class="flex flex-col w-full px-8 py-2 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
                <div class="flex flex-row items-center justify-between text-black">
                    <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-indigo-800" href="/">
                        <span>Koperasi Jaya</span>
                    </a>
                </div>
                <div class="flex-col items-center gap-16 text-sm font-medium text-indigo-800 md:flex md:flex-row lg:p-0 md:mt-0">
                    <a class="hover:text-black focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Beranda</a>
                    <a class="hover:text-black focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Profile</a>
                    <a class="hover:text-black focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Info Berita</a>
                    <a class="hover:text-black focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Produk</a>
                    <a class="hover:text-black focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Bantuan</a>
                    <a href="{{route('login')}}">
                        <button type="button" class="rounded-md bg-indigo-800 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Masuk
                        </button>
                    </a>
                    <a href="{{route('register')}}">
                        <button type="button" class="rounded-md bg-indigo-800 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Register
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="justify-center w-full mx-auto bg-indigo-800">
            <div class="flex flex-col w-full px-8 py-2.5 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
                <p class="text-xs text-white">
                    Jl. Telekomunikasi No. 5, Terusan Buah Batu, Bandung, 40257
                </p>
            </div>
        </div>
    </nav>

    <section>
        <div class="px-8 py-16 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <div>
                <h1 class="text-xl font-semibold tracking-tighter text-indigo-900 lg:text-6xl text-balance">
                    Ekonomi Sejahtera
                    <span class="text-indigo-800">Bersama Koperasi Jaya</span>
                </h1>
                <p class="mt-4 text-base font-medium text-indigo-800 text-balance">
                    Control and added security. With decentralization, users have more
                    control over their data and transactions, and the platform is less
                    susceptible to malicious attacks.
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
                                <img src="{{ asset('images/koperasi.png') }}" class="object-cover border shadow-2xl rounded-2xl" width="300" height="200">
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
                <div class="grid gap-2 lg:grid-flow-col-dense lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3">
                    <div class="max-w-lg min-w-full mx-auto lg:col-start-3">
                        <div class="flex h-full">
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50  rounded-3xl max-w-none">
                                <h2 class="font-medium text-gray-900">Rule of Attribution</h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                    You must give appropriate credit to the original creator of the
                                    work. This typically includes providing the name of the author
                                    or licensor, a link to the original work, and indicating if
                                    changes were made.
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
                            <div class="flex flex-col justify-center p-8 border bg-indigo-50  rounded-3xl max-w-none">
                                <h2 class="font-medium text-gray-900">
                                    Share alike (SA) absence
                                </h2>
                                <p class="mt-4 text-sm font-medium text-gray-500 text-pretty">
                                    The CC BY 3.0 License does not include a "Share Alike" (SA)
                                    provision. Unlike some other Creative Commons licenses, it does
                                    not require you to license any derivative works under the same
                                    terms. You can create adaptations or derivatives and license
                                    them differently if you choose.
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
                <div class="grid gap-2 mt-2 text-center md:grid-cols-3">
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="../images/placeholders/rectangle1.svg" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="mt-4">
                            <p class="font-medium text-gray-900">No warranty disclaimer</p>
                            <p class="mt-2 text-sm text-gray-500">
                                The license comes with no warranties. The licensor provides the
                                work "as is," and users must use it at their own risk.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="../images/placeholders/rectangle1.svg" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="px-8 mt-4">
                            <p class="font-medium text-gray-900">Modification Freedom</p>
                            <p class="mt-2 text-sm text-gray-500">
                                You can adapt, remix, transform, and build upon the licensed work.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="p-2 overflow-hidden border rounded-3xl">
                            <img src="../images/placeholders/rectangle1.svg" alt="#_" class="w-full h-full mx-auto rounded-2xl">
                        </div>
                        <div class="px-8 mt-4">
                            <p class="font-medium text-gray-900">Commercial use allowed</p>
                            <p class="mt-2 text-sm text-gray-500">
                                You are allowed to use the licensed work for both non-commercial
                                and commercial purposes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>