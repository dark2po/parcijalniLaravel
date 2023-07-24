<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Page's Data
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">

    <ul>
            <li>
                <h1>{{ $page->pageTitle }}</h1>
                <p>{{ $page->pageText }}</p>

                <p>Published by: {{ $page->user->name }}</p>
            </li>
            <div>
                <a href="{{ route('page.show', $page) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('page.edit', $page) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
        </ul>

    </div>
</x-app-layout>