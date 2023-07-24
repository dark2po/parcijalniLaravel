<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Data
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-center">

        <p>id: {{$user['id']}} Name: {{$user['name']}} email: {{$user['email']}} roleID: {{$user['role_id']}}</p>

    </div>
</x-app-layout>