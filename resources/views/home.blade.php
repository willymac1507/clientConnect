@php use Illuminate\Support\Facades\Auth; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-slot name="header">
                {{ __('My Dashboard') }}
            </x-slot>
        </h2>
    </x-slot>
    <div class="py-12 flex flex-col gap-4 max-w-5xl mx-auto">
        <x-dashboard-section>
            <x-slot name="title">
                {{ __('Messages') }}
            </x-slot>
        </x-dashboard-section>
        <x-dashboard-section>
            <x-slot name="title">
                {{ __('Calendar') }}
            </x-slot>
        </x-dashboard-section>
    </div>
</x-app-layout>
