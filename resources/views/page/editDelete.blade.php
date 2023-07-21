<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Edit page data!</h1>
<form action="/page/{{$id}}", method=post>
  <input type="hidden" name="_method" value="PUT">
  <label for="pageTitle">Page title:</label><br>
  <input type="text" id="pageTitle" name="pageTitle" required="required" value="{{$pageTitle}}" ><br><br>
  <label for="pageText">Page text:</label><br>
  <input type="text" id="pageText" name="pageText" required="required" value="{{$pageText}}" ><br><br>
  <label for="photoName">Photo name:</label><br>
  <input type="text" id="photoName" name="photoName" required="required" value="{{$photoName}}" ><br><br>
  <label for="photoPath">Photo path:</label><br>
  <input type="text" id="photoPath" name="photoPath" required="required" value="{{$photoPath}}" ><br><br>

  @csrf 
  <input type="submit" value="Update page data">
</form>
<br><br>
<h1>Or delete that page!!!</h1>
<form action="/page/{{$id}}", method=post>
  <input type="hidden" name="_method" value="DELETE">
  <label for="pageTitle">Page title:</label><br>
  <input type="text" id="pageTitle" name="pageTitle" required="required" value="{{$pageTitle}}" ><br><br>
  @csrf 
  <input type="submit" value="Delete Page !!!">
</form>

</body>
</html>