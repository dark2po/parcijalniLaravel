<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titleBegining}} - BackEnd Users List</title>
</head>
<body>
    <h1>Registrated Users</h1>

    @forelse ($users as $user)
        <p>id: {{$user['id']}} Name: {{$user['name']}} email: {{$user['email']}} roleID: {{$user['role_id']}}</p>
    @empty
        <p>No Users registrated!</p>
    @endforelse

</body>
</html>