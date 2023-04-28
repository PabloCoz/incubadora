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

        <div class="bg-white rounded-md shadow-lg">
            <div class="py-6 px-4">
                <h1 class="font-bold text-center text-xl uppercase">Validación de pagos</h1>
                <div class="mt-4">
                    <form action="{{ route('validated-pay') }}" method="POST" enctype=”multipart/form-data”>
                        @csrf
                        <div class="mt-4">
                            <label for="code" class="font-bold">Codigo de validacion</label>
                            <input type="text" name="code" class="w-full border border-gray-500 rounded-md p-2">
                            @error('code')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="file" class="font-bold">Imagen de voucher</label>
                            <input type="file" name="img" class="w-full border border-gray-500 rounded-md p-2"
                                accept="image/*">
                            @error('img')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex justify-end items-center space-x-2">
                            <a href="{{ route('home') }}"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">
                                Cancelar
                            </a>
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                                Validar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
