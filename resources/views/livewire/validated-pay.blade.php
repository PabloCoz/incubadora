<div class="bg-white rounded-md shadow-lg">
    <div class="py-6 px-4">
        <h1 class="font-bold text-center text-xl uppercase">Validación de pagos</h1>
        <div class="mt-4">
            <form wire:submit.prevent="store">
                <div class="mt-4">
                    <label for="code" class="font-bold">Codigo de validacion</label>
                    <input type="text" wire:model="code" class="w-full border border-gray-500 rounded-md p-2">
                    @error('code')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="file" class="font-bold">Imagen de voucher</label>
                    <input type="file" wire:model="img" class="w-full border border-gray-500 rounded-md p-2"
                        accept="image/*">
                    @error('img')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <a href="{{ route('remember-code') }}" class="underline">Olvide mi codigo</a>
                    </div>
                    <div class="space-x-3">
                        <a href="{{ route('home') }}">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">
                                Cancelar
                            </button>
                        </a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Validar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
