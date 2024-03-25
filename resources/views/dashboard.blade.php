<x-app-layout>
    <x-slot name="header">
    {{ __('Welcome!, ') }} {{ Auth::user()->name }} {{ __(' Dashboard') }}
    </x-slot>

   
</x-app-layout>

