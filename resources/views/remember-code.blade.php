<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-xl text-gray-800 leading-tight text-center">
            UNIVERSIDAD NACIONAL AUTÓNOMA DE CHOTA
        </h2>
    </x-slot>

    <div class="py-8 md:py-12">
        <div class="max-w-xl mx-auto">

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-black rounded-lg bg-blue-200" role="alert">
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @elseif(session('error'))
                <div class="p-4 mb-4 text-sm text-black rounded-lg bg-red-200" role="alert">
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            @endif
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="px-4 py-6">
                    <h1 class="font-bold text-center uppercase">Recuperar codigo de validacion
                    </h1>
                    <div class="mt-5">
                        <form action="{{ route('request-code') }}" method="post">
                            @csrf
                            <input type="email" class="w-full rounded-md" name="email"
                                placeholder="Ingrese el correo con el que se registro" required>
                            <div class="flex justify-end items-center">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
