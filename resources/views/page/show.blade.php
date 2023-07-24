<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Page's Data
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">

        <p>id: {{$page['id']}} : Title: {{$page['pageTitle']}} Path: {{$page['photoPath']}} Photo: {{$page['photoName']}} UserID: {{$page['user_id']}}</p><br>
        <p>Text: {{$page['pageText']}}</p>

    </div>
</x-app-layout>