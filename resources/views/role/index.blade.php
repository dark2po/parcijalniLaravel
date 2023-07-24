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
                <a href="{{ route('role.show', $role) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('role.edit', $role) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
            <hr class="dotted">
            @endforeach
        </ul>

        @endif

    </div>
</x-app-layout>