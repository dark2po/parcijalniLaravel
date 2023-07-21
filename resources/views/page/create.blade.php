<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fill with new page data!</h1>
<form action="/page", method=post> 
  <label for="pageTitle">Page title:</label><br>
  <input type="text" id="pageTitle" name="pageTitle" required="required"><br><br>
  <label for="pageText">Page text:</label><br>
  <input type="text" id="pageText" name="pageText" required="required"><br><br>

  <label for="photoPath">Photo pathe:</label><br>
  <input type="text" id="photoPath" name="photoPath" required="required"><br><br>
  <label for="photoName">Photo name:</label><br>
  <input type="text" id="photoName" name="photoName" required="required"><br><br>

  @csrf 
  <input type="submit" value="Create new page">
</form>
</body>
</html>