<nav style="position:fixed; top:0; width:100%; background-color:#ffffff; z-index:999;">
    <div class="justify-center w-full mx-auto">
        <div class="flex flex-col w-full px-8 py-4 mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32 max-w-7xl">
            <div class="flex flex-row items-center justify-between text-black">
                <a class="inline-flex items-center gap-3 text-lg font-black tracking-tight text-indigo-800 lg:text-2xl" href="/">
                    <span>Koperasi Jaya</span>
                </a>
            </div>
            <div class="flex-col items-center text-xs gap-14 text-sm font-semibold text-indigo-800 md:flex md:flex-row lg:p-0 md:mt-0">
                <a class="hover:text-blue-600 focus:outline-none focus:text-gray-500 md:ml-auto" href="/" style="font-size: 14px;">Beranda</a>
                <a class="hover:text-blue-600 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_" style="font-size: 14px;">Profile</a>
                <a class="hover:text-blue-600 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_" style="font-size: 14px;">Info Berita</a>
                <a class="hover:text-blue-600 focus:outline-none focus:text-gray-500 md:ml-auto" href="#_" style="font-size: 14px;">Produk</a>
                <a class="hover:text-blue-600 focus:outline-none focus:text-gray-500 md:ml-auto" href="{{route('register')}}" style="font-size: 14px;">Register</a>
                <a href="{{route('login')}}">
                    <button type="button" class="rounded-md bg-transparent px-6 py-2 text-xs font-semibold text-indigo-800 shadow-sm hover:bg-indigo-800 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:transparent" style="font-size: 14px; border: 2px solid;">
                        Login
                    </button>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="justify-center w-full mx-auto bg-indigo-800">
        <div class="flex flex-col w-full px-8 py-1 mx-auto md:px-14 md:items-center md:justify-between md:flex-row lg:px-52 max-w-1xl">
            <p class="text-xs text-white">
                Jl. Telekomunikasi No. 5, Terusan Buah Batu, Bandung, 40257
            </p>
        </div>
    </div>
</nav>