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
    <div class="flex flex-col overflow-y-auto md:flex-row sm:flex-col sm:gap-10">
        <div class="md:h-auto md:w-1/2 shadow-2xl rounded-xl sm:shadow-md flex items-center justify-center h-screen">
            <img class="w-100 h-100 object-cover" src="{{ asset('images/Koperasi--Logo.png') }}" alt="Office" />     
        </div>
        
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Log in
                </h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <x-input-label :value="__('Email')" />
                        <x-text-input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="block w-full" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input type="password" id="password" name="password" class="block w-full" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox" name="remember"
                                class="text-indigo-800 form-checkbox focus:border-indigo-800 focus:outline-none focus:shadow-outline-indigo">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-4">
                        <x-primary-button class="block w-full bg-indigo-700 text-indigo-100 hover:bg-indigo-900">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                    
                </form>

                <hr class="my-8" />

                <div class="flex flex-col items-center gap-4">

                    @if (Route::has('password.request'))
                    <p class="">
                        <a class="text-sm font-medium text-primary-600 hover:underline"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </p>
                    @endif

                    <a href="/"
                        class="text-white bg-indigo-800 hover:bg-indigo-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-indigo-800 dark:hover:bg-indigo-800 focus:outline-none dark:focus:ring-indigo-800">
                        Home
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>