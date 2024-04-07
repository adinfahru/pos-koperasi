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
                    Create account
                </h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input type="text" id="name" name="name" class="block w-full" value="{{ old('name') }}"
                            required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input name="email" type="email" class="block w-full" value="{{ old('email') }}" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input type="password" name="password" class="block w-full" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label id="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input type="password" name="password_confirmation" class="block w-full" required />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button class="block w-full">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>

                <hr class="my-8" />

                <p class="mt-4">
                    <a class="text-sm font-medium text-primary-600 hover:underline"
                        href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                </p>
            </div>
        </div>
</x-guest-layout>