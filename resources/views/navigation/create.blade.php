<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill with new navigation data!</h1>
<form action="/navigation", method=post> 
  <label for="navigationName">Navigation name:</label><br>
  <input type="text" id="navigationName" name="navigationName" required="required"><br><br>
  <label for="uri">URI:</label><br>
  <input type="text" id="uri" name="uri" required="required"><br><br>

  @csrf 
  <input type="submit" value="Create new navigation">
</form>
</body>
</html>