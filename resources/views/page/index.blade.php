<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrated Pages' List
        </h2>
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
                <a href="{{ route('page.show', $page) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('page.edit', $page) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
            <hr class="dotted">
            @endforeach
        </ul>

        @endif

    </div>
</x-app-layout>