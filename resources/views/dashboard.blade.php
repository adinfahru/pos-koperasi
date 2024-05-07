<x-app-layout>
    <x-slot name="header">
    {{ __('Welcome!, ') }} {{ Auth::user()->name }}
    </x-slot>
   <!-- CTA -->
   
   <!-- CTA Ends -->
</x-app-layout>

