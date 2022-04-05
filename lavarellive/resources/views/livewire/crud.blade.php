<!-- <div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>ESTE INDEX LO MUESTRA</h1>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CRUD
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               contenido

                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>age</th>
                            <th>Color</th>
                            @foreach($pets as $pet)
                                <tr>
                                    <td>$pet ->id</td>
                                    <td>$pet ->name</td>
                                    <td>$pet ->age</td>
                                    <td>$pet ->color</td>
                                </tr>
                            @endforeach
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
