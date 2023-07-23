@extends('app')

@section ('content')

    <h1>Page Data</h1><br>

    <p>id: {{$page['id']}} : Title: {{$page['pageTitle']}}  Path: {{$page['photoPath']}} Photo: {{$page['photoName']}} UserID: {{$page['user_id']}}</p><br>
    <p>Text: {{$page['pageText']}}</p>

@endsection