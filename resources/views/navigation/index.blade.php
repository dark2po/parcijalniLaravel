<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Registrated Vavigations' List
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center">

    @if ($navigations->isEmpty())
        <p>No Navigations Registrated.</p>
        @else
        <ul>
            @foreach ($navigations as $navigation)
            <li>
                <h3>{{ $navigation->navigationName }}</h3>
                <p>{{ $navigation->uri }}</p>
                <p>Navigate to: {{ $navigation->page->pageTitle }}</p>
            </li>
            <div>
                <a href="{{ route('navigation.show', $navigation) }}" style="background-color: blue; color: white; padding: 6px 12px;">View</a>

                <a href="{{ route('navigation.edit', $navigation) }}" style="background-color: orange; color: white; padding: 6px 12px;">Edit Or Delete</a>

            </div>
            <hr class="dotted">
            @endforeach
        </ul>

        @endif

    </div>
</x-app-layout>