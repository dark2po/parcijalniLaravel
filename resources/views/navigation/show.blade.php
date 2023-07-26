<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Navigation's Data
        </h2>
    </x-slot>
    <div class="container mx-auto flex justify-center">

    <ul>
            <li>
                <h1>{{ $navigation->navigationName }}</h1>
                <p>{{ $navigation->uri }}</p>

                <p>Navigate to page: {{ $navigation->page->title }}</p>
            </li>
            <div>
                <a href="{{ route('navigation.show', $navigation) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View</a>

                <a href="{{ route('navigation.edit', $navigation) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit Or Delete</a>

            </div>
            <li><br> </li>
    </ul>

    </div>
</x-app-layout>