<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Edit page data!</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  <form action="/page/{{$id}}" , method=post>
    <input type="hidden" name="_method" value="PUT">
    <label for="pageTitle">Page title:</label><br>
    <input type="text" id="pageTitle" name="pageTitle" required="required" value="{{$pageTitle}}"><br><br>
    <label for="pageText">Page text:</label><br>
    <textarea id="pageText" name="pageText" required="required" cols="55" rows="10" >{{$pageText}}</textarea> <br><br>
    <label for="photoName">Photo name:</label><br>
    <input type="text" id="photoName" name="photoName" required="required" value="{{$photoName}}"><br><br>
    <label for="photoPath">Photo path:</label><br>
    <input type="text" id="photoPath" name="photoPath" required="required" value="{{$photoPath}}"><br><br>

    <label for="user_id">Select user:</label><br>
    <select id="user_id" name ="user_id">
      <option value="none" selected disabled hidden>Select an Option</option>
      @foreach ($users as $user_id => $name)
      <option value="{{$user_id}}">"{{$name}}"</option>
      @endforeach
    </select>  
    <br><br>

    @csrf
    <input type="submit" value="Update page data">
  </form>
  <br><br>
  <h1>Or delete that page!!!</h1>
  <form action="/page/{{$id}}" , method=post>
    <input type="hidden" name="_method" value="DELETE">
    <label for="pageTitle">Page title:</label><br>
    <input type="text" id="pageTitle" name="pageTitle" required="required" value="{{$pageTitle}}"><br><br>
    @csrf
    <input type="submit" value="Delete Page !!!">
  </form>

</body>

</html>