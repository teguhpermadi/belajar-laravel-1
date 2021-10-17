<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! config('profile.name') !!}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row mt-12">
            <div class="col-md-3">
                @livewire('profile::avatar', ['id' => $user->id])
            </div>
            <div class="col-md-6">
                @livewire('profile::identity', ['id' => $user->id])
            </div>
            <div class="col-md-3">
                @livewire('profile::password', ['id' => $user->id])
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                @livewire('profile::detil-profil', ['id' => $user->id])
            </div>
        </div>
    </div>
</x-app-layout>
