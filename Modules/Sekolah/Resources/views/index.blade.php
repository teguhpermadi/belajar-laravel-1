<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! config('sekolah.name') !!}
        </h2>
    </x-slot>

    @livewire('sekolah::show')
</x-app-layout>
