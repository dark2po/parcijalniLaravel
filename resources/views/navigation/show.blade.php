@extends('app')

@section ('content')

    <h1>navigation Data</h1><br>

    <p>id: {{$navigation['id']}} Name: {{$navigation['navigationName']}} URI: {{$navigation['uri']}} PageID: {{$navigation['page_id']}}</p>

@endsection