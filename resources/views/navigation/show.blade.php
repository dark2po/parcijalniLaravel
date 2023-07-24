<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Navigation's Data
        </h2>
    </x-slot>

    <ul>
            <li>
                <h1>{{ $navigation->navigationName }}</h1>
                <p>{{ $navigation->uri }}</p>

                <p>Navigate to page: {{ $navigation->page->title }}</p>
            </li>
            <div>
                <a href="{{ route('navigation.show', $navigation) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('navigation.edit', $navigation) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
        </ul>

    </div>
</x-app-layout>