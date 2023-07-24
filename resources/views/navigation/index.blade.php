<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Registrated Vavigations' List
        </h2>
    </x-slot>


    @forelse ($navigations as $navigation)
        <p>id: {{$navigation['id']}} Name: {{$navigation['navigationName']}} URI: {{$navigation['uri']}} PageID: {{$navigation['page_id']}}</p>
    @empty
        <p>No navigations registrated!</p>
    @endforelse

    </div>
</x-app-layout>