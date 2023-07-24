<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Navigation's Data
        </h2>
    </x-slot>


    <p>id: {{$navigation['id']}} Name: {{$navigation['navigationName']}} URI: {{$navigation['uri']}} PageID: {{$navigation['page_id']}}</p>
    </div>
</x-app-layout>