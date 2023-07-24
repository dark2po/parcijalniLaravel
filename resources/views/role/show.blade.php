<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Role's Data
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">
        <p>id: {{$role['id']}} Role: {{$role['roleName']}} </p>

    </div>
</x-app-layout>