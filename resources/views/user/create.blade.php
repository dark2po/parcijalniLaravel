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

  <form action="/user" , method=post>
    <label for="name">User name:</label><br>
    <input type="text" id="name" name="name" required="required" value="{{ old('name') }}"> <br><br>
    <label for="email">Email address:</label><br>
    <input type="text" id="email" name="email" required="required" value="{{ old('email') }}"><br><br>
    <label for="password">Password:</label><br>
    <input type="text" id="password" name="password" required="required" value="{{ old('password') }}"><br><br>

    <label for="role_id">Select role:</label><br>
    <select id="role_id" name ="role_id">
      <option value="none" selected disabled hidden>Select an Option</option> 
      @foreach ($roles as $role_id => $roleName)
      <option value="{{$role_id}}" @selected($role_id == old('role_id'))>"{{$roleName}}"</option>
      @endforeach
    </select>  
    <br><br>
    
    @csrf
    <input type="submit" value="Create new user">
  </form>

</body>

</html>