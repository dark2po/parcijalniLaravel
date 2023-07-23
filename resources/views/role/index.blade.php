@extends('app')

@section ('content')

    <h1>Registrated roles</h1><br>

    @forelse ($roles as $role)
        <p>id: {{$role['id']}} Role: {{$role['roleName']}} </p>
    @empty
        <p>No roles registrated!</p>
    @endforelse

@endsection
