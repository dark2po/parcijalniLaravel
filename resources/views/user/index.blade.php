<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Users' List
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-center">


        @forelse ($users as $user)
        <p>id: {{$user['id']}} Name: {{$user['name']}} email: {{$user['email']}} roleID: {{$user['role_id']}}</p>
        @empty
        <p>No Users registrated!</p>
        @endforelse

    </div>
</x-app-layout>