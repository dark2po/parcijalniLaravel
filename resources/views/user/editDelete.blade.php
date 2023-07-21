<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Edit user data!</h1>
<form action="/user/{{$id}}", method=post>
  <input type="hidden" name="_method" value="PUT">
  <label for="name">User name:</label><br>
  <input type="text" id="name" name="name" required="required" value="{{$name}}" ><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" required="required" value="{{$email}}" ><br><br>
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password" required="required"  ><br><br>
  @csrf 
  <input type="submit" value="Update user data">
</form>
<br><br>
<h1>Or delete that user!!!</h1>
<form action="/user/{{$id}}", method=post>
  <input type="hidden" name="_method" value="DELETE">
  <label for="name">User name:</label><br>
  <input type="text" id="name" name="name" required="required" value="{{$name}}" ><br><br>
  @csrf 
  <input type="submit" value="Delete User !!!">
</form>

</body>
</html>