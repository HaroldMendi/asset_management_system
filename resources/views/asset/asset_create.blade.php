<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Asset') }}
        </h2>
    </x-slot>
    <livewire:asset-create/>
</x-app-layout>