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
<x-guest-layout>
    <div class="flex overflow-y-auto flex-col md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                src="{{ asset('images/Koperasi-Logo-Resetpswd.png') }}" alt="Office" />
        </div>
        <div class="flex justify-center items-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 font-semibold text-gray-700">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </h1>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input type="email" class="block w-full" name="email" id="email" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <x-primary-button class="block mt-4 w-full">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>