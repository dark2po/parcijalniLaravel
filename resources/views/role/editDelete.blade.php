<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Edit user data!</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="/role/{{$id}}" , method=post>
    <input type="hidden" name="_method" value="PUT">
    <label for="roleName">Role name:</label><br>
    <input type="text" id="roleName" name="roleName" required="required" value="{{$roleName}}"><br><br>
    @csrf
    <input type="submit" value="Update role data">
  </form>
  <br><br>
  
  <h1>Or delete that user!!!</h1>
  <form action="/role/{{$id}}" , method=post>
    <input type="hidden" name="_method" value="DELETE">
    <!-- <label for="roleName">User name:</label><br>
    <input type="text" id="roleName" name="roleName" required="required" value="{{$roleName}}"><br><br> -->
    @csrf
    <input type="submit" value="Delete this role !!!">
  </form>

</body>

</html>