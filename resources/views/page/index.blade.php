@extends('app')

@section ('content')

    <h1>Registrated pages</h1><br>

    @forelse ($pages as $page)
        <p>id: {{$page['id']}} : Title: {{$page['pageTitle']}}  Path: {{$page['photoPath']}} Photo: {{$page['photoName']}} UserID: {{$page['user_id']}}</p>
    @empty
        <p>No pages registrated!</p>
    @endforelse

@endsection
