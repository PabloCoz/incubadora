<div>

    <div class="my-4">
        <input type="search" class="w-full rounded-md" placeholder="Buscar postulante" wire:model="search">
    </div>

    <div class="relative overflow-x-auto rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre de Postulante
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Correo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Numero de Celular
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Voucher
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postulants as $postulant)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ $postulant->fullname }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $postulant->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $postulant->phone }}
                        </td>
                        <td class="px-6 py-4">

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-5">
            {{ $postulants->links() }}
        </div>
    </div>
</div>
