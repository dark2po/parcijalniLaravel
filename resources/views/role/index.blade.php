<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Roles' List
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">

        @if ($roles->isEmpty())
        <p>No Roles Registrated.</p>
        @else
        <ul>
            @foreach ($roles as $role)
            <li>
                <h3>{{ $role->roleName }}</h3>
                <p>{{ $role->id }}</p>
            </li>
            <div>
                <a href="{{ route('role.show', $role) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View</a>

                <a href="{{ route('role.edit', $role) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit Or Delete</a>

            </div>
            <li><br> </li>
            <hr class="dotted">
            @endforeach
        </ul>

        @endif

    </div>
</x-app-layout>