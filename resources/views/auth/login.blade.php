@include('layouts.navbar')
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

                    <div class="mt-4">
                        <x-input-label :value="__('Email')" />
                        <x-text-input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="block w-full" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

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
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>