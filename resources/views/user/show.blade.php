@extends('app')

@section ('content')

    <h1>User Data</h1><br>

    <p>id: {{$user['id']}} Name: {{$user['name']}} email: {{$user['email']}} roleID: {{$user['role_id']}}</p>

@endsection