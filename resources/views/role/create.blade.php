<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  
  <h1>Fill with new user data!</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="/role" , method=post>
    <label for="roleName">Role name:</label><br>
    <input type="text" id="roleName" name="roleName" required="required" value="{{ old('roleName') }}"><br><br>
    @csrf
    <input type="submit" value="Create new role">
  </form>

</body>

</html>