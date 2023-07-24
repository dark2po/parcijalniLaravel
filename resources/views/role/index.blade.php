<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Roles' List
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">

        @forelse ($roles as $role)
        <p>id: {{$role['id']}} Role: {{$role['roleName']}} </p>
        @empty
        <p>No roles registrated!</p>
        @endforelse
    </div>
</x-app-layout>