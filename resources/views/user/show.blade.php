<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Data
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-center">

        <ul>
            <li>
                <h1>{{ $user->name }}</h1>
                <p>{{ $user->email }}</p>
                <p>Role: {{ $user->role->roleName }}</p>
            </li>
            <div>
                <a href="{{ route('user.show', $user) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('user.edit', $user) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
        </ul>


    </div>
</x-app-layout>