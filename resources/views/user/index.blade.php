@extends('app')

@section ('content')

    <h1>Registrated Users</h1><br>

    @forelse ($users as $user)
        <p>id: {{$user['id']}} Name: {{$user['name']}} email: {{$user['email']}} roleID: {{$user['role_id']}}</p>
    @empty
        <p>No Users registrated!</p>
    @endforelse

@endsection
