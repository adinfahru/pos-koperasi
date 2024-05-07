<x-app-layout>
    <x-slot name="header">
        {{ __('Selamat Datang ') }} {{ Auth::user()->name }}
    </x-slot>
</x-app-layout>