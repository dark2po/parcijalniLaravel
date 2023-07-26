<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Pages' List
        </h2>
        <div>
        <a href="{{ route('page.create') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Create New</a>
        </div>
    </x-slot>

    <div class="container mx-auto flex justify-center">

    @if ($pages->isEmpty())
        <p>No Pages Registrated.</p>
        @else
        <ul>
            @foreach ($pages as $page)
            <li>
                    <h3>{{ $page->pageTitle }}</h3>
                    <p>Posted by: {{ $page->user->name }}</p>
            </li>
            <div>
                <a href="{{ route('page.show', $page) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View</a>

                <a href="{{ route('page.edit', $page) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit Or Delete</a>
                <br>
            </div>
            <li><br> </li>
            <hr class="dotted">
            @endforeach
        </ul>

        @endif

    </div>
</x-app-layout>