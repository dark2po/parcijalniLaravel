@extends('app')

@section ('content')

    <h1>Registrated navigations</h1><br>

    @forelse ($navigations as $navigation)
        <p>id: {{$navigation['id']}} Name: {{$navigation['navigationName']}} URI: {{$navigation['uri']}} PageID: {{$navigation['page_id']}}</p>
    @empty
        <p>No navigations registrated!</p>
    @endforelse

@endsection
