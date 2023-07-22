<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Edit navigation data!</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="/navigation/{{$id}}" , method=post>
    <input type="hidden" name="_method" value="PUT">
    <label for="navigationName">Navigation name:</label><br>
    <input type="text" id="navigationName" name="navigationName" required="required" value="{{$navigationName}}"><br><br>
    <label for="uri">URI:</label><br>
    <input type="text" id="uri" name="uri" required="required" value="{{$uri}}"><br><br>

    <label for="page_id">Select page:</label><br>
    <select id="page_id" name ="page_id">
      <option value="none" selected disabled hidden>Select an Option</option>
      @foreach ($pages as $page_id => $pageName)
      <option value="{{$page_id}}">"{{$pageName}}"</option>
      @endforeach
    </select>  
    <br><br>

    @csrf
    <input type="submit" value="Update navigation data">
  </form>
  <br><br>
  <h1>Or delete that navigation!!!</h1>
  <form action="/navigation/{{$id}}" , method=post>
    <input type="hidden" name="_method" value="DELETE">
    <label for="navigationName">Navigation name:</label><br>
    <input type="text" id="navigationName" name="navigationName" required="required" value="{{$navigationName}}"><br><br>
    @csrf
    <input type="submit" value="Delete Navigation !!!">
  </form>

</body>

</html>