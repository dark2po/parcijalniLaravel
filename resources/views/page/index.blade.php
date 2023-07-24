<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Pages' List
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">

        @forelse ($pages as $page)
        <p>id: {{$page['id']}} : Title: {{$page['pageTitle']}} Path: {{$page['photoPath']}} Photo: {{$page['photoName']}} UserID: {{$page['user_id']}}</p>
        @empty
        <p>No pages registrated!</p>
        @endforelse
    </div>
</x-app-layout>