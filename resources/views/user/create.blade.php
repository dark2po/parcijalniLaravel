<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill with new user data!</h1>
<form action="/user", method=post> 
  <label for="name">User name:</label><br>
  <input type="text" id="name" name="name" required="required"><br><br>
  <label for="email">Email address:</label><br>
  <input type="text" id="email" name="email" required="required"><br><br>
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password" required="required"><br><br>
  @csrf 
  <input type="submit" value="Create new user">
</form>
</body>
</html>