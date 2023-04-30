<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-xl text-gray-800 leading-tight text-center">
            UNIVERSIDAD NACIONAL AUTÓNOMA DE CHOTA
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto mt-5">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-black rounded-lg bg-blue-200 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <span class="font-bold">{{ session('success') }}</span>
                Se enviara su usuario y contraseña al correo que registro.
            </div>
        @elseif(session('error'))
            <div class="p-4 mb-4 text-sm text-black rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <span class="font-bold">{{ session('error') }}</span>
        @endif

        @livewire('validated-pay')
    </div>
</x-app-layout>
