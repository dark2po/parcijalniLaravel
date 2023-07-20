<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill with new user data!</h1>
<form action="/role", method=post> 
  <label for="roleName">Role name:</label><br>
  <input type="text" id="roleName" name="roleName" required="required"><br><br>
  @csrf 
  <input type="submit" value="Create new role">
</form>
</body>
</html>