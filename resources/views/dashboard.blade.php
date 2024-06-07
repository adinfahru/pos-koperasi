<x-app-layout>
    <section class="flex items-start justify-center mt-24">
        <div class="text-center">
            <h1 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl">
                {{ __('Welcome back, ') }}
                <span class="text-indigo-800 font-bold">{{ Auth::user()->name }}!</span>
            </h1>
        </div>
    </section>
</x-app-layout>
