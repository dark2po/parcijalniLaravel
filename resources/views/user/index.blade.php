<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Users' List
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-center">

        @if ($users->isEmpty())
        <p>No Users Registrated.</p>
        @else
        <ul>
            @foreach ($users as $user)
            <li>
                <h3>{{ $user->name }}</h3>
                <p>{{ $user->email }}</p>
                <p>Role: {{ $user->role->roleName }}</p>
            </li>
            <div>
                <a href="{{ route('user.show', $user) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('user.edit', $user) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
            <hr class="dotted">
            @endforeach
        </ul>

        @endif

    </div>
</x-app-layout>