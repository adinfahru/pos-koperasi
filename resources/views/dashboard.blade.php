<x-app-layout>
    <x-slot name="header">
        {{ __('Welcome!, ') }} {{ Auth::user()->name }}
    </x-slot>
</x-app-layout>