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
    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/Koperasi-Logo-Resetpswd.jpeg') }}" alt="Office"/>
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    {{__('Forgot password')}}
                </h1>

                <form method="POST" action="{{ route('password.update') }}">
                @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input type="email"
                                 class="block w-full"
                                 id="email"
                                 name="email"
                                 value="{{ old('email', $request->email) }}"
                                 required
                                 autofocus/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label :value="__('Password')"/>
                        <x-text-input type="password"
                                 class="block w-full"
                                 name="password"
                                 required/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label :value="__('Confirm Password')"/>
                        <x-text-input type="password"
                                 class="block w-full"
                                 name="password_confirmation"
                                 required/>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <x-primary-button class="mt-4 w-full">
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
